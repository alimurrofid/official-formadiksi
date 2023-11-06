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
                render: function (data) {
                    return moment(data).format('DD MMMM YYYY HH:mm:ss');
                },
                name: "created_at",
            },          
            { data: "email", name: "email" },
            { data: "nama", name: "nama" },
            { data: "jurusan", name: "jurusan" },
            { data: "prodi", name: "prodi" },
            { data: "angkatan", name: "angkatan" },
            { data: "untuk", name: "untuk" },
            { data: "pertanyaan", name: "pertanyaan" },
            { data: "answered_by", name: "answered_by" },
            { data: "opsi", name: "opsi", orderable: false, searchable: false },
        ],
        columnDefs: [],
    });
});
