$('#table1 > tbody > tr').live('click', function(event){
    if(event.ctrlKey) {
        $(this).toggleClass('info');
    }
    else {
        if ( $(this).hasClass('info') ) {
            $('#table1 > tbody > tr').removeClass('info');
        }
        else {
            $('#table1 > tbody > tr').removeClass('info');
            $(this).toggleClass('info');
        }
    }
});

var launchModal = function (action_name) {
    $('#ebox_modal').modal('show');

    // get the modal action
    var action = $('#url').val();

    // set the action according to the button clicked
    var form_action = action + action_name;
    $('#ebox_form').attr('action', form_action);
};

var checkIfSelected = function () {
    var selected = $('tr.info').length;
    var ebox_id = $('tr.info > td:first').text();

    if(selected){
        if(selected > 1) {
            alert('You can only update one record at a time!');
            return false;
        }

        // get the selected record data via ajax
        $.ajax({
            url: '/user/eboxes/' + ebox_id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#edit_id').val(data.id);
                $('#box').val(data.box);
                $('#postal_code').val(data.postal_code)

                launchModal('/update');
            }
        })
    } else {
        alert('You must select at least one record');
    }
}

$('#add').on('click', function () {
    launchModal('/save');
});

$('#update').on('click', function () {
    checkIfSelected();
});

$('#delete').on('click', function () {
    if($('tr.info').length){
        var ebox_ids = [];

        $('tr.info').each(function () {
            var ebox_id = $(this).find('td:first').text();
            ebox_ids.push(ebox_id);
        });

        $('#delete_ids').val(ebox_ids);
        $('#delete_modal').modal('show');
    } else {
        alert('You must select at least one record!');
    }
});