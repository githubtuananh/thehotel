
$(document).ready(()=>{
    $('.fa-eye').click(function(){
        if($('#password-field').attr('unmark')=='show'){
            $('#password-field').attr('type','text')
            $('#password-field').attr('unmark','hide')
            $('.fa-eye').css('color','#f36b31')
        }
        else
        {
            $('#password-field').attr('type','password')
            $('#password-field').attr('unmark','show')
            $('.fa-eye').css('color','unset')
        }
    })
    $('input').keyup(function(){
        $('.mes').html('')
    }) 
})