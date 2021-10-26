$(document).ready(()=>{
    // ----------------------icon
    var dis = $('.disG')
    for(var i=0; i<dis.length; i++){
        if($(dis[i]).text()==0){
            $(dis[i]).html('<i class="fa fa-user" aria-hidden="true"></i>')
        }
        else{
            $(dis[i]).html('<i class="fa fa-user-times" aria-hidden="true"></i>')
        }
    }

    var dis = $('.disR')
    for(var i=0; i<dis.length; i++){
        if($(dis[i]).text()==0){
            $(dis[i]).html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>')
        }
        else{
            $(dis[i]).html('<i class="fa fa-times-circle-o" aria-hidden="true"></i>')
        }
    }

    // ----------------------------------------------------
    $(document).on('click','.huy',function(){
        var mahd = $(this).attr('id')
        var order = $(document).find('#'+mahd).parents('tr')[0]
        $.post('/PHP/KHACHSAN/admin/delOrder/'+mahd,function(data){
            order.remove()
        })
    })
    $(document).on('click','.delGuest',function(){
        var user = $(this).attr('id')
        var guest = $(document).find('#'+user).parents('tr')[0]
        $.post('/PHP/KHACHSAN/admin/delGuest/'+user,function(data){
            guest.remove()
        })
    })
    $(document).on('click','.delRoom',function(){
        var idRoom = $(this).attr('id')
        var room = $(document).find('#'+idRoom).parents('tr')[0]
        $.post('/PHP/KHACHSAN/admin/delRoom/'+idRoom,function(data){
            room.remove()
        })
    })
    $(document).on('click','.disGuest',function(){
        var user = $(this).attr('id')
        var guest =   $(document).find('#disGuest'+user)
        $.post('/PHP/KHACHSAN/admin/disableGuest/'+user,function(data){
            guest.html('<i class="fa fa-user-times" aria-hidden="true"></i>')
        })
    })

    $(document).on('click','.actGuest',function(){
        var user = $(this).attr('id')
        var guest =   $(document).find('#disGuest'+user)
        $.post('/PHP/KHACHSAN/admin/activeGuest/'+user,function(data){
            guest.html('<i class="fa fa-user" aria-hidden="true"></i>')
        })
    })
    $(document).on('click','.disRoom',function(){
        var idRoom = $(this).attr('id')
        var room =   $(document).find('#disRoom'+idRoom)
        $.post('/PHP/KHACHSAN/admin/disableRoom/'+idRoom,function(data){
            room.html('<i class="fa fa-times-circle-o" aria-hidden="true"></i>')
        })
    })
    $(document).on('click','.actRoom',function(){
        var idRoom = $(this).attr('id')
        var room =   $(document).find('#disRoom'+idRoom)
        $.post('/PHP/KHACHSAN/admin/activeRoom/'+idRoom,function(data){
            room.html('<i class="fa fa-check-circle-o" aria-hidden="true"></i>')
        })
    })
})