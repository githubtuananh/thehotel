$(document).ready(()=>{
    $('.form-submit').click(function(){
        var username = $('input[name="username"]').val()
        var password = $('input[name="password"]').val()
        $.post('/PHP/KHACHSAN/Ajax/checkAdmin',{username:username,password:password},function(data){
            if(data==true){
                window.location.replace('/PHP/KHACHSAN/admin/show')
            }
            else{
                $('.form-message').html(data)
            }
        })
    }) 
    $('input').keyup(function(){
        $('.form-message').html('')
    }) 
})