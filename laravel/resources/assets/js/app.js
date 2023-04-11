require('./bootstrap');
import './bootstrap';
$(function (){
    //default datepicker
    $('body').find('.datepicker').each(function (){
        $(this).dateTime({
            showClose: true,
            debug: true,
        });
    });
});
