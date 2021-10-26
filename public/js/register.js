$(document).ready(()=>{
    $('input[name="username"]').keyup(function(){
        var username = $(this).val()
        $.post('/PHP/KHACHSAN/Ajax/checkUser',{user:username},function(data){
            $('#mess').html(data)
        })
    }) 
    var password = $('input[name="password"]').val()

    $('input').keyup(function(){
        $('.mes').html('')
    }) 
})