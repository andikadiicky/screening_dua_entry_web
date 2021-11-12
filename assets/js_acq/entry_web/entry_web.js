$(document).ready(function () {
	app.formEntryWebScrDua.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.formEntryWebScrDua = {
	controller: 'c_data_entry_web/',
	api: 'c_data_entry_web_api/',
	elm: {},
	message_hint: "Ketik untuk melakukan pencarian minimal 4 karakter",

	init: function () {
		var file = this;
		file.getJenisIdentitas();
		file.getStatusKawin();
		file.getJenisIdentitasPasangan();

	},

	imageUploaded: function () {
		var fileUpload = document.querySelector(
			'input[type=file]')['files'][0];
		console.log(fileUpload);
		var arrType = [];
		arrType = fileUpload.type.split("/");

		if (arrType[1] != "jpg" && arrType[1] != "jpeg" && arrType[1] != "png") {
			alert_error("Format foto tidak sesuai!");
			$("#upl-npwp-personal").val("");
		} else {
			var reader = new FileReader();
			console.log("next");
			reader.onload = function (event) {
				var image = new Image();
				image.onload = function () {
					var canvas = document.createElement('canvas');
					var context = canvas.getContext("2d");
					canvas.width = image.width / 4;
					canvas.height = image.height / 4;
					context.drawImage(image,
						0,
						0,
						image.width,
						image.height,
						0,
						0,
						canvas.width,
						canvas.height
					);

					console.log("COMPRESS -> " + canvas.toDataURL());
					base64String = canvas.toDataURL().replace("data:", "")
						.replace(/^.+,/, "");
					imageBase64Stringsep = base64String;
					localStorage.setItem("base64StringImage", base64String);
					console.log(base64String);
				}
				image.src = event.target.result;
			}
			reader.readAsDataURL(fileUpload);
		}
	},

	getJenisIdentitas: function () {
		var file = app.formEntryWebScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllCard",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					var jenis_identitas = response.data.map(function (obj) {
						return {
							id: obj.id_card,
							text: obj.id_card_desc
						};
					});
				} else {
					file.getJenisIdentitas();
				}
				//parameter JENIS IDENTITAS
				$('#slc-jenis-identitas-personal').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH JENIS IDENTITAS',
					language: 'id',
					allowClear: true,
					cache: true,
					dataType: 'json',
					data: jenis_identitas,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.id_card,
									text: obj.id_card_desc
								};
							})
						};
					}
				});
			}
		});
	},

	getStatusKawin: function() {
        var file = app.formEntryWebScrDua;
        $.ajax({
            url: app.base_url + file.api + "getAllMarital",
            success: function(response, textStatus, jqXHR) {
                if (response.status && response.data.length != 0) {
                    var status_kawin = response.data.map(function(obj) {
                        return {
                            id: obj.MARITAL_ID,
                            text: obj.MARITAL_DESC
                        };
                    });
                } else {
                    file.getStatusKawin();
                }
                //parameter STATUS PERKAWINAN
                $('#slc-status-kawin-personal').select2({
                    theme: 'bootstrap4',
                    placeholder: 'PILIH STATUS PERKAWINAN',
                    language: 'id',
                    allowClear: true,
                    cache: true,
                    dataType: 'json',
                    data: status_kawin,
                    processResults: function(response) {
                        return {
                            results: response.data.map(function(obj) {
                                return {
                                    id: obj.MARITAL_ID,
                                    text: obj.MARITAL_DESC
                                };
                            })
                        };
                    }
                });
            }
        });
    },

	getJenisIdentitasPasangan: function () {
		var file = app.formEntryWebScrDua;
		$.ajax({
			url: app.base_url + file.api + "getAllCard",
			success: function (response, textStatus, jqXHR) {
				if (response.status && response.data.length != 0) {
					var jenis_identitas = response.data.map(function (obj) {
						return {
							id: obj.id_card,
							text: obj.id_card_desc
						};
					});
				} else {
					file.getJenisIdentitas();
				}
				//parameter JENIS IDENTITAS
				$('#slc-jenis-identitas-pasangan').select2({
					theme: 'bootstrap4',
					placeholder: 'PILIH JENIS IDENTITAS',
					language: 'id',
					allowClear: true,
					cache: true,
					dataType: 'json',
					data: jenis_identitas,
					processResults: function (response) {
						return {
							results: response.data.map(function (obj) {
								return {
									id: obj.id_card,
									text: obj.id_card_desc
								};
							})
						};
					}
				});
			}
		});
	},
}

//Parameter tipe debitur *Hardcode
var tipe_debitur = [{
		id: 0,
		text: 'PERSONAL'
	},
	{
		id: 1,
		text: 'COMPANY'
	}
]

$('#slc-tipe-deb').select2({
	theme: 'bootstrap4',
	placeholder: 'Pilih Tipe Debitur',
	language: 'id',
	allowClear: true,
	data: tipe_debitur
});
//END parameter tipe debitur *Hardcode

//FUNCTION FOR => TAB DEBITUR PERSONAL - IDENTITAS//
//Parameter jenis kelamin *Hardcode
var join_income = [{
		id: 'L',
		text: 'LAKI-LAKI'
	},
	{
		id: 'P',
		text: 'PEREMPUAN'
	}
]

$('#slc-jenis-kelamin-personal').select2({
	theme: 'bootstrap4',
	placeholder: 'SILAHKAN PILIH',
	language: 'id',
	allowClear: true,
	data: join_income
});
//END parameter jenis kelamin *Hardcode

$('#upl-npwp-personal').change(function () {
	var file = app.formEntryWebScrDua
	file.imageUploaded();
});

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


//Put Whatever Function here
//Responsive DataTables TAB
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
	if (x == 0) {
		$('#PER').show();
		$('#COM').hide();
		$('#slc-tipe-deb').prop('disabled', true);

	} else if (x == 1) {
		$('#COM').show();
		$('#PER').hide();
		$('#slc-tipe-deb').prop('disabled', true);

	} else if (x == '') {
		$('#COM').hide();
		$('#PER').hide();
	}
}
