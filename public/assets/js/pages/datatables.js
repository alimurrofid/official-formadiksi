$(document).ready(function () {
    $("#tableQuestion").DataTable({
        ordering: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: $("#table-url").val(),
        },
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: false,
                searchable: false,
            },
            {
                data: "created_at",
                render: DataTable.render.datetime("DD MMMM YYYY HH:mm:ss"),
                name: "created_at",
            },
            { data: "email", name: "email" },
            { data: "nama", name: "nama" },
            { data: "pertanyaan", name: "pertanyaan" },
            { data: "opsi", name: "opsi", orderable: false, searchable: false},
        ],
        columnDefs: [],
    });
});
