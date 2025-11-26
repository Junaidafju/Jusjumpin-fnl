(function ($) {
    'use strict';

    $(document).ready(function () {
        var mediaUploader;

        $('.jusjumpin-upload-button').on('click', function (e) {
            e.preventDefault();
            var $button = $(this);
            var $inputField = $('#jusjumpin_popup_image_url_input'); // Target by ID
            var $imagePreview = $('.jusjumpin-popup-image-preview'); // Target by class

            // If the uploader object has already been created, reopen the dialog
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            // Extend the wp.media object
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Popup Image',
                button: {
                    text: 'Choose Image'
                },
                multiple: false
            });

            // When a file is selected, grab the URL and set it as the text field's value
            mediaUploader.on('select', function () {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $inputField.val(attachment.url);
                // Update the preview image immediately
                $imagePreview.attr('src', attachment.url).show(); // Use the new preview element
            });

            // Open the uploader dialog
            mediaUploader.open();
        });

        // Handle the "Remove Image" button click
        $('#jusjumpin_popup_image_remove_button').on('click', function(e) {
            e.preventDefault();
            var $button = $(this);
            var $inputField = $('#jusjumpin_popup_image_url_input');
            var $imagePreview = $('.jusjumpin-popup-image-preview');

            $inputField.val(''); // Clear the input field
            $imagePreview.attr('src', '').hide(); // Hide the image preview
            $button.hide(); // Hide the remove button itself
        });
    });

})(jQuery);
