const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire(
		'Data ',
		'Berhasil ' + flashData,
		'success'
	);
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: "Data akan dihapus",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
