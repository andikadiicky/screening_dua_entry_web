//Dika Responsive DataTables TAB
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	$($.fn.dataTable.tables(true)).DataTable()
		.columns.adjust()
		.responsive.recalc();
});
$(function () {
	$('#tbl-summary-pic-management-saham-pribadi').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});
$(function () {
	$('#tbl-summary-pemegang-saham-perusahaan').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});
$(function () {
	$('#tbl-summary-pemegang-saham-masyarakat-lainnya').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});
$(function () {
	$('#table-external-sales').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});
$(function () {
	$('#table-internal-sales').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});
$(function () {
	$('#table-object-pembiayaan').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"responsive": true,
	})
});

//Dika
//Entry Web Pilih Tipe Debitur
function pilihDebitur() {
	var x = document.getElementById("slc-tipe-deb").value;
	localStorage.setItem('Tipe Debitur', $('#slc-tipe-deb').val());
	if (x == 'Perorangan') {
		console.log('cek personal')
		$('#PER').show();
		$('#COM').hide();
		$('#slc-tipe-deb').prop('disabled', true);

	} else if (x == 'Company') {
		$('#COM').show();
		$('#PER').hide();
		$('#slc-tipe-deb').prop('disabled', true);

	} else if (x == '') {
		$('#COM').hide();
		$('#PER').hide();
	}
	console.log(x)
}

//FUNCTION FOR => TAB DEBITUR PERSONAL - IDENTITAS//

//FUNCTION FOR => TAB DEBITUR PERSONAL - PEKERJAAN//

//FUNCTION FOR => TAB DEBITUR PERSONAL - PENDAPATAN//

//FUNCTION FOR => TAB DEBITUR COMPANY - IDENTITAS//

//FUNCTION FOR => TAB DEBITUR COMPANY - PENDAPATAN//

//FUNCTION FOR => TAB DEBITUR COMPANY - PIC PERUSAHAAN//

//FUNCTION FOR => TAB DEBITUR COMPANY - SUSUNAN PENGURUS & PEMEGANG SAHAM//
function addInfoPICSahamPrib() {
	$('#info-identitas-pic-pemegang-saham-pribadi').show();
	$('#btn-add-pic-saham-pribadi').hide();
}

function addInfoPemegangSahamPerusahaan() {
	$('#info-identitas-pemegang-saham-perusahaan').show();
	$('#btn-add-pemegang-saham-perusahaan').hide();
}

function addInfoPemegangSahamMasy() {
	$('#info-identitas-pemegang-saham-masyarakat-lainnya').show();
	$('#btn-add-pemegang-saham-masy').hide();
}

//FUNCTION FOR => TAB IDENTITAS ORDER//

//FUNCTION FOR => TAB OBJECT PEMBIAYAAN - OBJ PEMBIAYAAN//
//Pilih Radio Obj Pembiayaan
$('input[type="radio"]').change(function () {
	if (this.id == "radio-objek-kend") {
		$('#form-object-pemb-pengajuan-pencairan').hide();
		$('#copy-obj-dana').hide();
		$('#copy-obj-kendaraan').show();
	} else if (this.id == "radio-objek-dana") {
		$('#form-object-pemb-pengajuan-pencairan').show();
		$('#copy-obj-dana').show();
		$('#copy-obj-kendaraan').hide();
	}
});

//Trigger Modal Copy Objek
$('#copy-obj-kendaraan').click(function () {
	console.log('trigger modal copy obj kendaraan');
	$('#modal-copy-object').modal('show');
});
$('#copy-obj-dana').click(function () {
	console.log('trigger modal copy obj dana');
	$('#modal-copy-object').modal('show');
});

//FUNCTION FOR => TAB OBJECT PEMBIAYAAN - REFUND//
