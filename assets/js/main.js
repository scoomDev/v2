let $ = require('jquery');

require('bootstrap');

$(document).ready(() => {
    console.log('ready !');
    $('[data-toggle="popover"]').popover();
});