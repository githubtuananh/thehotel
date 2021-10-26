$(document).ready(()=>{
    $('input[name="searchGuest"]').keyup(()=>{
        var txt = $('input[name="searchGuest"]').val();
        $.post('/PHP/KHACHSAN/Ajax/searchGuest',{data:txt},function(data){
            $('tbody').html(data);
        })
    })
    $('input[name="searchRoom"]').keyup(()=>{
        var txt = $('input[name="searchRoom"]').val();
        $.post('/PHP/KHACHSAN/Ajax/searchRoom',{data:txt},function(data){
            $('tbody').html(data);
        })
    })
    $('input[name="searchOrder"]').keyup(()=>{
        var txt = $('input[name="searchOrder"]').val();
        $.post('/PHP/KHACHSAN/Ajax/searchOrder',{data:txt},function(data){
            $('tbody').html(data);
        })
    })
})

