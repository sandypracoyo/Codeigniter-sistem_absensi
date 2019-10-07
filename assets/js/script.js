$(function () {


    $('.tampilmodaldetail').on('click', function () {


        const id = $(this).data('id');

        $.ajax({

            url: 'http://localhost/project_karyawan/karyawan/detailkaryawan',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#jk').val(data.jenis_kelamin);
                $('#jabatan').val(data.jabatan);
                $('#no_hp').val(data.no_hp);
                $('#alamat').val(data.alamat);
                if (data.status == 1) {
                    $('#status').val('aktif');
                } else {
                    $('#status').val('tidak aktif');
                }
            }
        });

    });

});