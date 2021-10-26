$(document).ready(()=>{
    $('.select').click(function(){
        var arrival = $('input[name="arrival"]').val()
        var leave = $('input[name="leave"]').val()
        if(arrival!='' && leave!=''){
            $.post('/PHP/KHACHSAN/Ajax/submitdate',{
                arrival:arrival,
                leave:leave
            },function(data){
                $('.ajax').html(data)
            })
        }

        $.post('/PHP/KHACHSAN/Ajax/submitdate',{
            arrival:arrival,
            leave:leave
        })
    })
    $('.choose').click(function(){
        var arrival = $('input[name="arrival"]').val()
        var leave = $('input[name="leave"]').val()
        if(arrival!='' && leave!=''){
            $('.box-order').css('display','none')
            $('.box-order1').css('display','block')
            $.post('/PHP/KHACHSAN/Ajax/loadOrderBox',{
                arrival:arrival,
                leave:leave
            },function(data){
                $('.box-order1').html(data)
            })
        }
    })
    $('.coutinue').click(function(){
        var leave = $('input[name="leave"]').val()
        $('.form-info-guest').css('display','block')
        $('.box-info').css('display','none')
    })
    $('#book-room').click(function(){
        var name = $('input[name="name"]').val()
        var sdt = $('input[name="sdt"]').val()
        var mess = $('textarea[name="mess"]').val()
        var arrival = $('input[name="arrival"]').val()
        var leave = $('input[name="leave"]').val()
        $.post('/PHP/KHACHSAN/product/book',{
            name:name,
            sdt:sdt,
            mess:mess,
            arrival:arrival,
            leave:leave
        },function(data){
            if(data=='true'){
                $('.mess').html('Đặt phòng thành công')
                $('.mess').css('color','green')
            }
            else if(data=='false'){
                $('.mess').html('Đặt phòng thất bại')
                $('.mess').css('color','red')
            }
            else{
                $('.mess').html(data)
                $('.mess').css('color','red')
            }
        })
    })
})