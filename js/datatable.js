$(function () {
    table=$('#table_id').DataTable({
        responsive: true,
        "bProcessing": true,
        "serverSide": true,
        "ajax": {
            "type": "post",
            "url": base_url+"index.php/Datatable/datatable_records"
        },
        "columns": [
        {"data": "title"},
        {"data": "content"},
        {"data": "date"},
        {"data": "name"},
        {"data": "email"}
        ],
    });

    
    
});


