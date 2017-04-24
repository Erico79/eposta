for(var month = 1; month <= 12; month++) {
    var UploadedDocs = $('#uploaded-docs-report' + month).DataTable({
        processing: true,
        serverSide: false,
        order: [[0, "desc"]],
        ajax: 'load-uploaded-docs/' + month,
        columns: [
            {data: 'id', 'name': 'id'},
            {data: 'document_name', 'name': 'document_name'},
            {data: 'created_by', 'name': 'created_by'},
            {data: 'customer_mfid', 'name': 'customer_mfid'},
            {data: 'supplier_mfid', 'name': 'supplier_mfid'},
            {data: 'category_id', 'name': 'category_id'},
            {data: 'subcat_id', 'name': 'subcat_id'},
            {data: 'icon', 'name': 'icon'},
            {data: 'public', 'name': 'public'},
            {data: 'download', 'name': 'download'}
        ]
    });
}