$('#add').click(function (event){
    event.preventDefault();
    var movie_id = $(this).serialize();
    $.ajax({
        url:"{{route('Watchedmovie.add'}}",
        method:"POST",
        dataType:"json",
        success:function (data){

        }
    })
})
