document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.blog-filter');
    var cards = document.querySelectorAll('.blog-grid [data-cat]');
    if (!buttons.length || !cards.length) return;
    function applyFilter(slug) {
        cards.forEach(function(card){
            var c = card.getAttribute('data-cat');
            var show = (slug === '*' || c === slug);
            card.style.display = show ? '' : 'none';
        });
    }
    buttons.forEach(function(btn){
        btn.addEventListener('click', function(){
            buttons.forEach(function(b){ b.classList.remove('is-active'); });
            btn.classList.add('is-active');
            applyFilter(btn.getAttribute('data-filter'));
        });
    });
});


