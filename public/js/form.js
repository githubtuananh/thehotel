$(document).ready(()=>{
    $('.submitInsertGuest').click(function(){
            var idRoom = $('input[name="idRoom"]').val()
            var name = $('input[name="name"]').val()
            var username = $('input[name="username"]').val()
            var password = $('input[name="password"]').val()
            if(username==''){
                $('.message').html('<i class="fa fa-exclamation" aria-hidden="true"></i> Vui lòng điền đầy đủ')
                $(".message").css("color", "#DC3545");
            }
            else{
                $.post('/PHP/KHACHSAN/admin/insertGuest/',
                {
                    idRoom,
                    name,
                    username,
                    password
                }
                ,function(data){
                    console.log(data)
                    if(jQuery.parseJSON(data) == true){
                        $('.message').html('<i class="fa fa-check" aria-hidden="true"></i> Thêm thành công')
                        $(".message").css("color", "#0fe9a0");
                    }
                    else{
                        $('.message').html('<i class="fa fa-times" aria-hidden="true"></i> Thêm thất bại')
                        $(".message").css("color", "#DC3545");
                    }
                })
            }
            $('input').keyup(function(){
                $('.message').html('');
            })
    })

    $('.submitInsertRoom').click(function(){
            var idRoom = $('input[name="idRoom"]').val()
            var name = $('input[name="name"]').val()
            var cost = $('input[name="cost"]').val()
            var linkImg = $('input[name="img"]').val()
            var soluong = $('input[name="soluong"]').val()
            if(idRoom==''){
                $('.message').html('<i class="fa fa-exclamation" aria-hidden="true"></i> Vui lòng điền đầy đủ')
                $(".message").css("color", "#DC3545");
            }
            else{
                $.post('/PHP/KHACHSAN/admin/insertRoom/',
                {
                    idRoom,
                    name,
                    cost,
                    linkImg,
                    soluong
                }
                ,function(data){
                    console.log(data)
                    if(data =='true'){
                        $('.message').html('<i class="fa fa-check" aria-hidden="true"></i> Thêm thành công')
                        $(".message").css("color", "#0fe9a0");

                    }
                    else{
                        $('.message').html('<i class="fa fa-times" aria-hidden="true"></i> Thêm thất bại')
                        $(".message").css("color", "#DC3545");
                    }
                })
            }
            $('input').keyup(function(){
                $('.message').html('');
            })
    })


    $('.submitUpdateGuest').click(function(){
        var idRoom = $('input[name="idRoom"]').val()
        var name = $('input[name="name"]').val()
        var username = $('input[name="username"]').val()
        // var password = $('input[name="password"]').val()
        if(username==''){
            $('.message').html('<i class="fa fa-exclamation" aria-hidden="true"></i> Vui lòng điền đầy đủ')
            $(".message").css("color", "#DC3545");
        }
        else{
            $.post('/PHP/KHACHSAN/admin/updateGuest/',
            {
                idRoom,
                name,
                username,
            }
            ,function(data){
                console.log(data)
                if(jQuery.parseJSON(data) == true){
                    $('.message').html('<i class="fa fa-check" aria-hidden="true"></i> Chỉnh sửa thành công')
                    $(".message").css("color", "#0fe9a0");
                }
                else{
                    $('.message').html('<i class="fa fa-times" aria-hidden="true"></i> Chỉnh sửa thất bại')
                    $(".message").css("color", "#DC3545");
                }
            })
        }
        $('input').keyup(function(){
            $('.message').html('');
        })

    })

    $('.submitUpdateRoom').click(function(){
        var idRoom = $('input[name="idRoom"]').val()
        var name = $('input[name="name"]').val()
        var cost = $('input[name="cost"]').val()
        var linkImg = $('input[name="img"]').val()
        var soluong = $('input[name="soluong"]').val()
        if(idRoom==''){
            $('.message').html('<i class="fa fa-exclamation" aria-hidden="true"></i> Vui lòng điền đầy đủ')
            $(".message").css("color", "#DC3545");
        }
        else{
            $.post('/PHP/KHACHSAN/admin/updateRoom/',
            {
                idRoom,
                name,
                cost,
                linkImg,
                soluong
            }
            ,function(data){
                console.log(data)
                if(data =='true'){
                    $('.message').html('<i class="fa fa-check" aria-hidden="true"></i> Chỉnh sửa thành công')
                    $(".message").css("color", "#0fe9a0");

                }
                else{
                    $('.message').html('<i class="fa fa-times" aria-hidden="true"></i> Chỉnh sửa thất bại')
                    $(".message").css("color", "#DC3545");
                }
            })
        }
        $('input').keyup(function(){
            $('.message').html('');
        })
    })
})