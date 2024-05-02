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
    var formData = new FormData(this);
    // Get the base64 data from the image elements
    var drawnLinesBase64 = $('#drawnLinesPreview').attr('src');
    var fullyEditedBase64 = $('#fullyEditedPreview').attr('src');

    // Extract the base64 data from the URIs
    var drawnLinesData = drawnLinesBase64.replace(/^data:image\/(png|jpg|jpeg);base64,/, '');
    var fullyEditedData = fullyEditedBase64.replace(/^data:image\/(png|jpg|jpeg);base64,/, '');

    // Convert base64 data to a Blob object
    var drawnLinesBlob = base64ToBlob(drawnLinesData);
    var fullyEditedBlob = base64ToBlob(fullyEditedData);

    // Append image files to FormData
    formData.append('drawnLinesInput', drawnLinesBlob, 'drawnLines.png');
    formData.append('fullyEditedInput', fullyEditedBlob, 'fullyEdited.png');
    console.log(formData);
    $.ajax({
        url: base_url+"Quote/add_quote_process", 
        method:"POST",
        dataType : "json",
        data: formData,
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

function base64ToBlob(base64Data) {
    var byteCharacters = atob(base64Data);
    var byteNumbers = new Array(byteCharacters.length);
    for (var i = 0; i < byteCharacters.length; i++) {
        byteNumbers[i] = byteCharacters.charCodeAt(i);
    }
    var byteArray = new Uint8Array(byteNumbers);
    return new Blob([byteArray], { type: 'image/png' });
}