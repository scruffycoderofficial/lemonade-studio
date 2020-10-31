window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
    
    require('jquery-ui/ui/widgets/datepicker');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';