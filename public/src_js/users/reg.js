function blockElements(){
    $('#box_no').attr('readonly', 'readonly');
    $('#register-btn').attr('disabled', 'disabled');
}

function unblockElements(){
    $('#box_no').removeAttr('readonly');
    $('#register-btn').removeAttr('disabled');
}

function movieFormatResult(post_office) {
    var markup = "<table class='movie-result'><tr>";

    markup += "<div class='movie-synopsis'>"+ post_office.postal_code + ', ' + post_office.office +', '+post_office.constituency+', '+post_office.county+"</div>";
    markup += "</td></tr></table>";

    return markup;
}

function movieFormatSelection(post_office) {
    return post_office.postal_code + ', ' + post_office.office + ', '+ post_office.constituency + ', ' + post_office.county;
}

$("#live_box_no").select2({
    placeholder: "Search for a Postal Code",
    minimumInputLength: 2,
    ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
        url: $("#live_box_no").attr('url'),
        dataType: 'json',
        data: function (term, page) {
            return {
                q: term, // search term
                page_limit: 10,
                //apikey: "ju6z9mjyajq2djue3gbvv26t" // please do not use so this example keeps working
            };
        },
        results: function (data, page) { // parse the results into the format expected by Select2.
            // since we are using custom formatting functions we do not need to alter remote JSON data
            return {
                results: data
            };
        }
    },
//            initSelection: function (element, callback) {
//                // the input tag has a value attribute preloaded that points to a preselected movie's id
//                // this function resolves that id attribute to an object that select2 can render
//                // using its formatResult renderer - that way the movie name is shown preselected
//                var id = $(element).val();
//                if (id !== "") {
//                    $.ajax("http://api.rottentomatoes.com/api/public/v1.0/movies/" + id + ".json", {
//                        data: {
//                            apikey: "ju6z9mjyajq2djue3gbvv26t"
//                        },
//                        dataType: "jsonp"
//                    }).done(function (data) {
//                        callback(data);
//                    });
//                }
//            },
    formatResult: movieFormatResult, // omitted for brevity, see the source of this page
    formatSelection: movieFormatSelection, // omitted for brevity, see the source of this page
    dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
    escapeMarkup: function (m) {
        return m;
    } // we do not want to escape markup since we are displaying html in results
});

$('#have_box_no').on('change', function(){
    var answer = parseInt($(this).val());

    if(answer == 0){
        $.ajax({
            type: 'POST',
            url: '//196.202.202.207:8800/eposta/api/v3/?open_box',
            data: '{"user_id": "2","box_type": "New","box_number": "10","postal_code": "00100"}', // or JSON.stringify ({name: 'jonas'}),
            success: function(data) {
                unblockElements();

                $('#box_no').attr('readonly', 'readonly').val(data.box_number);
            },
            contentType: "application/json",
            dataType: 'json',
            beforeSend: function () {
                blockElements();
            }
        });
    } else {
        unblockElements();
    }
});