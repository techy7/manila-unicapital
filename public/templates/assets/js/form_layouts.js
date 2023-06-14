/* ============================================================
 * Form Layouts
 * Form layout options available in Pages
 * For DEMO purposes only. Extract what you need.
 * ============================================================ */
(function($) {

    'use strict';

    $(document).ready(function() {

        // Validation method for budget, profit, revenue fields
        $.validator.addMethod("usd", function(value, element) {
            return this.optional(element) || /^(\$?)(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$/.test(value);
        }, "Please specify a valid dollar amount");

        $('#start-date, #end-date').datepicker();

        $("#employee_id").mask("99999999");
        $("#passcode").mask("999999");
        
        $("#form-login").validate();
        $("#form-add-edit").validate();
    });

})(window.jQuery);
