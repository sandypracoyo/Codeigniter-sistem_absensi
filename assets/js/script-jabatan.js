$(function () {
    $('.tampilmodaltambah').on('click', function () {
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_jabatan').val('');
        $('.modal-body form').attr('action', 'http://localhost/project_karyawan/jabatan');

    });

    $('.tampilmodaledit').on('click', function () {

        $('#exampleModalLabel').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/project_karyawan/jabatan/editjabatan');


        const id = $(this).data('id');

        $.ajax({

            url: 'http://localhost/project_karyawan/jabatan/getjabatan',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id_jabatan').val(data.id_jabatan);
                $('#nama_jabatan').val(data.jabatan);
            }
        });

    });
});