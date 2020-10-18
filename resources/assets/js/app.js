/**
 * Require this Application's bootstrap file
 */
require('./bootstrap');

require('./modules/tabs');

jQuery(function(e){

    /**
     * Assign a DatePicker to make it easy for Users 
     * to select the date in which they were born
     */
    $('#dateofbirth').datepicker({
        dateFormat: 'DD, d MM, yy',
        changeMonth: true, 
		changeYear: true,
    });
});