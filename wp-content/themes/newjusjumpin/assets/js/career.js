/* =============================================================
   JUS JUMPIN — career.js  v3.0
   WordPress careers page JavaScript
   WhatsApp handled 100% client-side (no PHP redirect needed)
   ============================================================= */

(function () {
  'use strict';

  /* WA number injected by wp_localize_script as JJ_CAREER.wa */
  var WA = (typeof JJ_CAREER !== 'undefined' && JJ_CAREER.wa) ? JJ_CAREER.wa : '919830662244';

  /* ─────────────────────────────────────────
     INIT on DOM ready
  ───────────────────────────────────────── */
  document.addEventListener('DOMContentLoaded', function () {
    initTabs();
    initFileZone('g_cv',  'jj-gen-name');
    initFileZone('m_cv',  'jj-modal-name');
    initModalOverlayClose();
    initEscClose();
    initScrollReveal();
    initSmoothScroll();
  });

  /* ─────────────────────────────────────────
     DEPARTMENT TABS
  ───────────────────────────────────────── */
  function initTabs() {
    var tabs   = document.querySelectorAll('.jj-tab');
    var groups = document.querySelectorAll('.jj-dept');

    // Set opacity on first visible dept
    var firstActive = document.querySelector('.jj-dept.active');
    if (firstActive) firstActive.style.opacity = '1';

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var deptId = 'dept-' + this.getAttribute('data-dept');

        /* hide all */
        groups.forEach(function (g) {
          g.classList.remove('active');
          g.style.display  = 'none';
          g.style.opacity  = '0';
        });

        /* deactivate all tabs */
        tabs.forEach(function (t) { t.classList.remove('active'); });

        /* show selected */
        var target = document.getElementById(deptId);
        if (target) {
          target.style.display = 'block';
          target.classList.add('active');
          setTimeout(function () {
            target.style.transition = 'opacity .35s ease';
            target.style.opacity    = '1';
          }, 10);
        }

        /* activate clicked tab */
        this.classList.add('active');
      });
    });
  }

  /* ─────────────────────────────────────────
     FILE ZONE SETUP (drag-drop + label)
  ───────────────────────────────────────── */
  function initFileZone(inputId, nameId) {
    var input  = document.getElementById(inputId);
    var nameEl = document.getElementById(nameId);
    /* nameId might be a class selector inside a zone */
    if (!nameEl && nameId) nameEl = document.querySelector('.' + nameId);
    if (!input) return;

    input.addEventListener('change', function () {
      if (input.files && input.files[0]) {
        if (validateFile(input) && nameEl) {
          nameEl.textContent = '✅ ' + input.files[0].name;
          nameEl.classList.add('visible');
        }
      }
    });

    /* drag and drop */
    var zone = input.closest('.jj-filezone');
    if (!zone) return;

    zone.addEventListener('dragover',  function (e) { e.preventDefault(); zone.classList.add('dragging'); });
    zone.addEventListener('dragleave', function ()  { zone.classList.remove('dragging'); });
    zone.addEventListener('drop',      function (e) {
      e.preventDefault();
      zone.classList.remove('dragging');
      if (e.dataTransfer.files.length) {
        input.files = e.dataTransfer.files;
        input.dispatchEvent(new Event('change'));
      }
    });
  }

  /* ─────────────────────────────────────────
     MODAL
  ───────────────────────────────────────── */
  var currentRole = '';

  /* exposed globally for onclick attributes */
  window.jjOpenModal = function (role) {
    currentRole = role || 'General Application';

    var roleEl = document.getElementById('jj-modal-role');
    var jobEl  = document.getElementById('jj-modal-job');
    var modal  = document.getElementById('jj-modal');

    if (roleEl) roleEl.textContent = '✦ ' + currentRole;
    if (jobEl)  jobEl.value        = currentRole;
    if (modal) {
      modal.classList.add('open');
      document.body.style.overflow = 'hidden';
      /* re-trigger icon pop animation */
      var icon = modal.querySelector('.jj-modal__icon');
      if (icon) {
        icon.style.animation = 'none';
        void icon.offsetWidth;
        icon.style.animation = '';
      }
    }
  };

  window.jjCloseModal = function () {
    var modal = document.getElementById('jj-modal');
    if (modal) {
      modal.classList.remove('open');
      document.body.style.overflow = '';
    }
  };

  function initModalOverlayClose() {
    var bg = document.getElementById('jj-modal');
    if (bg) {
      bg.addEventListener('click', function (e) {
        if (e.target === bg) window.jjCloseModal();
      });
    }
  }

  function initEscClose() {
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') window.jjCloseModal();
    });
  }

  /* ─────────────────────────────────────────
     WHATSAPP — client-side, no PHP needed
  ───────────────────────────────────────── */
  window.jjSendWA = function (src) {
    var name, phone, email, exp, loc, msg, cvName, role;

    if (src === 'modal') {
      name  = val('m_name');
      loc   = val('m_loc');
      phone = val('m_phone');
      email = val('m_email');
      exp   = val('m_exp');
      msg   = val('m_msg');
      cvName = cvFileName('m_cv');
      role  = currentRole || 'General Application';
    } else {
      name  = val('g_name');
      phone = val('g_phone');
      email = val('g_email');
      exp   = val('g_exp');
      msg   = val('g_msg');
      cvName = cvFileName('g_cv');
      role  = val('jj-job-title') || 'General Application';
    }

    if (!name || !phone || !email || !exp) {
      alert('⚠️ Please fill in all required fields before sending.');
      return;
    }

    var expLabel = exp === 'fresher' ? '🎓 Fresher (0–1 years)' : '💼 Experienced (1+ years)';

    var text  = '🎯 *NEW APPLICATION — JUS JUMPIN* 🎯\n\n';
    text     += '🏷️ *Position:* ' + role + '\n';
    text     += '👤 *Name:* ' + name + '\n';
    if (loc)   text += '📍 *Location:* ' + loc + '\n';
    text     += '📞 *Phone:* +91 ' + phone + '\n';
    text     += '📧 *Email:* ' + email + '\n';
    text     += '💼 *Experience:* ' + expLabel + '\n';
    if (msg)   text += '💬 *Message:* ' + msg + '\n';
    if (cvName) text += '\n📎 *CV Filename:* ' + cvName + '\n_(Please attach the CV file in this chat)_\n';
    text     += '\n_Submitted via Jus Jumpin Careers Page_';

    var url = 'https://wa.me/' + WA + '?text=' + encodeURIComponent(text);
    window.open(url, '_blank');
  };

  /* ─────────────────────────────────────────
     SCROLL REVEAL
  ───────────────────────────────────────── */
  function initScrollReveal() {
    if (!('IntersectionObserver' in window)) return;
    var els = document.querySelectorAll('.jj-jcard, .jj-ben, .jj-icard, .jj-img-main, .jj-img-sec');
    var io  = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity    = '1';
          entry.target.style.transform  = entry.target.classList.contains('jj-icard') &&
                                          entry.target.matches(':nth-child(even)') ? 'translateY(16px)' : 'translateY(0)';
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    els.forEach(function (el, i) {
      el.style.opacity    = '0';
      if (!el.classList.contains('jj-icard')) el.style.transform = 'translateY(24px)';
      el.style.transition = 'opacity .5s ease ' + (i % 4 * 0.08) + 's, transform .5s ease ' + (i % 4 * 0.08) + 's';
      io.observe(el);
    });
  }

  /* ─────────────────────────────────────────
     SMOOTH SCROLL for hero CTA
  ───────────────────────────────────────── */
  function initSmoothScroll() {
    var cta = document.querySelector('.jj-hero__cta');
    if (!cta) return;
    cta.addEventListener('click', function (e) {
      var href   = cta.getAttribute('href');
      var target = href ? document.querySelector(href) : null;
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
    });
  }

  /* ─────────────────────────────────────────
     HELPERS
  ───────────────────────────────────────── */
  function val(id) {
    var el = document.getElementById(id);
    return el ? el.value.trim() : '';
  }

  function cvFileName(inputId) {
    var el = document.getElementById(inputId);
    return (el && el.files && el.files[0]) ? el.files[0].name : null;
  }

  function validateFile(input) {
    if (!input.files || !input.files[0]) return false;
    var file   = input.files[0];
    var sizeMB = file.size / 1024 / 1024;
    var ext    = file.name.split('.').pop().toLowerCase();

    if (sizeMB > 5) {
      alert('⚠️ File is too large. Please upload under 5MB.');
      input.value = '';
      return false;
    }
    if (['pdf','doc','docx'].indexOf(ext) === -1) {
      alert('⚠️ Wrong file type. PDF, DOC, or DOCX only please.');
      input.value = '';
      return false;
    }
    return true;
  }

}());