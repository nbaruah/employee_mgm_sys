$(document).ready(function(){
    $('.show_error').on('click', function(){
        $('#error-banner').slideToggle();
    });
    
    $( ".pick-date" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        yearRange: '1900:' + new Date().getFullYear()
    });
        
    $("#same").change(function() {
        if(this.checked) {
            var permanent_add = $('textarea[name="permanent_add"]').val();
            $('textarea[name="present_add"]').val(permanent_add);
        }
        
        if(!this.checked){
            $('textarea[name="present_add"]').val('');
        }
    });
});