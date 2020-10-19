/**
 * Require this Application's bootstrap file
 */
require('./bootstrap');

window.React = require('react');

import ExampleComponent from './component/ExampleComponent';

require('./modules/tabs');

console.log(React);

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