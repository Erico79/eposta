Dropzone.autoDiscover = false;

var myDropzone = new Dropzone("div#my-dropzone", {
    url: $('div#mydropzone').attr('action'),
    paramName: 'file'
});

// events
var uploadedFiles = [];
// get the server response after the file has been successfully uploaded
myDropzone.on('success', function (file, response) {
    uploadedFiles.push(response.path);

    // add the file path of the uploaded files in preparation for submission
    $('#uploaded_files').val(uploadedFiles);
});

// get bill fields
$('#not_type_id').on('change', function () {
    var notification_type = $(this).val();

    if(notification_type == '2'){
        $('#bill_fields').slideDown('slow', function () {
            $(this).find('input').attr('required', 'required');
        });
    }else{
        $('#bill_fields').slideToggle('slow', function () {
            $(this).find('input').removeAttr('required');
        });
    }
});