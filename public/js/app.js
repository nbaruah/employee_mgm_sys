$(document).ready(function(){
    $('.show_error').on('click', function(){
        $('#error-banner').slideToggle();
    });
    
    $( "#dob" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        yearRange: '1900:2031'
    });
});