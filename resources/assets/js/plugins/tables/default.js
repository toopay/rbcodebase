'use strict';
/**
 * @author Batch Themes Ltd.
 */
(function() {
    $(function() {
        $(document).on('click', '.table th .check', function() {
            var isChecked = $('#checkbox-1').data('checked');
            $('#checkbox-1').data('checked', !isChecked);
            $('.table td input').each(function() {
                $(this).prop('checked', !isChecked);
            });
        });
    });
})();
