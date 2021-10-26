$(document).ready(()=>{
    $('input[name="searchRoom"]').keyup(()=>{
        var txt = $('input[name="searchRoom"]').val();
        $.post('/PHP/KHACHSAN/Ajax/guestSearchRoom',{name:txt},function(data){
            $('.product').html(data);
        })
    })
    $('#cost').change(function(){
        var cost = $('#cost').val()
        console.log(cost)
        $.post('/PHP/KHACHSAN/Ajax/guestSearchRoomCost',{cost:cost},function(data){
            $('.product').html(data);
        })
    })
})