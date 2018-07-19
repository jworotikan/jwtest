$(document).ready(function() {
	// sembunyikan opsi semua produk, kecuali yang pertama
	$('#product option:not(:first-child)').hide();

	// membuat event jika mengubah pilihan type
	$('#type').change(function() {
		// mendapatkan id yang terpilih
		var id_type = $(this).val();

		// jika memilih yang seharusnya (bukan "pilih tipe")
		if (id_type) {
			// sembunyikan opsi semua produk, kecuali yang pertama
			$('#product option:not(:first-child)').hide();
			// tampilkan yang mempunyai attribut type-id sesuai dengan yang terpilih
			$('#product option[type-id=' + id_type + ']').show();

			// menjadikan tidak ada yang terpilih pada produk (reset pilihan produk)
			$('#product').prop('selectedIndex',0);
		}
	});
});