var base_url = $('#base_url').val();
$('#add_user').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Users/add_user_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    window.location.href = base_url+"Users";
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

$('#edit_user').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Users/edit_user_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    window.location.href = base_url+"Users";
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

$('.delete_user').on('click', function(e)
{   
    var user_id = $(this).data('userid');
    $.ajax({
        url: base_url+"Users/delete_user", 
        method:"POST",
        dataType : "json",
        data: "user_id=" + encodeURIComponent(user_id),
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    window.location.href = base_url+"Users";
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        }
    });
});

$('#add_quote').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Quote/add_quote_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    window.location.href = base_url+"Quote";
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});