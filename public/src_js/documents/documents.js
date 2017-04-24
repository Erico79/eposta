var Doc = {
    selectCustomer: function () {
        $('#select_customer').fadeIn('slow', function () {
            $('select[name=customer]').attr('required', 'required').removeAttr('disabled');

            $('#select_supplier').fadeOut('slow', function () {
                $('select[name=supplier]').removeAttr('required').attr('disabled', 'disabled');
            });
        });
    },
    selectSupplier: function (){
        $('#select_supplier').fadeIn('slow', function () {
            $('select[name=supplier]').attr('required', 'required').removeAttr('disabled');

            $('#select_customer').fadeOut('slow', function () {
                $('select[name=customer]').removeAttr('required').attr('disabled', 'disabled');
            });
        });
    },
    hideSelectors: function () {
        $('#select_supplier, #select_customer').fadeOut('slow');
    },
    loadSubCategories: function (cat_id) {
        if(cat_id != ''){
            $.ajax({
                url: 'load-subcategories/' + cat_id,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var sub_cats = '<option value="">--Choose Sub Category--</option>';
                    for(var i = 0; i < data.length; i++){
                        sub_cats += '<option value="'+ data[i].id +'">' + data[i].category_name + '</option>';
                    }

                    console.log(sub_cats);
                    $('#sub_category').show();
                    $('#sub_category select').html(sub_cats);
                }
            });
        } else {
            $('#sub_category').hide();
            $('#sub_category select').val('');
        }
    },
    isDocSelected: function () {
        var selectedRows = $('#table1 > tbody > tr.info');

        if(selectedRows.length){
            var doc_ids = [],
                preview = [];
            selectedRows.each(function () {
                var doc_id = $(this).find('td:first').text();
                var doc_name = $(this).find('td:first').next('td').text();
                var file_icon = $(this).find('td:first').nextAll('td.file_icon').html();

                doc_ids.push(doc_id);

                preview.push({
                    'doc_id': doc_id,
                    'doc_name': doc_name,
                    'file_icon': file_icon
                });
            });

            return {
                doc_ids: doc_ids,
                preview: preview
            };
        }else{
            alert('You must select at least one record!');
            return false;
        }
    },
    loadPreview: function (trs) {
        var preview = '<table class="table table-striped">' +
            '<thead>' +
                '<tr>' +
                    '<th>Doc#</th>' +
                    '<th>Doc Name</th>' +
                    '<th></th>' +
                '</tr>'
            '</thead>' +
            '<tbody>';

        for(var i = 0; i < trs.length; i++){
            preview += '<tr>';

            preview += '<td>' + trs[i].doc_id + '</td>';
            preview += '<td>' + trs[i].doc_name + '</td>';
            preview += '<td>' + trs[i].file_icon + '</td>';

            preview += '</tr>';
        }

        preview += '</tbody></table>';
        $('#preview').html(preview);
    },
    getAllocatedUsers: function (docs) {
        $.ajax({
            url: '/get-doc-users',
            type: 'post',
            data: {
                'selected_docs': docs,
                _token: $('input[name=_token]:first').val()
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var selected_users = [];

                for (var i = 0; i <= data.length; i++){
                    selected_users[i] = data[i];
                }

                console.log(selected_users);
                $('#select2_sample2').select2('val', selected_users);
            }
        })
    }
};

$('#attach_to').on('change', function () {
    var choice = $(this).val();

    if(choice == 'customer')
        Doc.selectCustomer();
    else if(choice == 'supplier')
        Doc.selectSupplier();
    else
        Doc.hideSelectors();
});

// delete document
$('#delete-doc').on('click', function () {
   if(confirm('Are you sure you want to delete the document?')) {
       // submit hidden form
       $('form#delete-document').submit();
   } else {
       return false;
   }
});

// load subcategories
$('#category').on('change', function () {
    var cat = $(this).val();

    Doc.loadSubCategories(cat);
});

// highlight selected rows
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

// open modal if a document is selected
$('#access_btn').click(function () {
    if(Doc.isDocSelected() != false){
        var doc = Doc.isDocSelected();
        var trs = doc.preview;

        Doc.loadPreview(trs);

        // open modal
        $('#users-access').modal('show');

        // get the document's allocated users
        Doc.getAllocatedUsers(doc.doc_ids);


        $('#doc_ids').val(doc.doc_ids);
    }
});