<section class="content">
    <div class="container-fluid">
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-form-objek-pemb-web" class="use-bottom-border">
                        <h4>Informasi Objek Pembiayaan</h4>
                    </div>
                    <div class="card-body">
                        <!-- Table Object Pembiayaan -->
                        <div class="col-md-12" style="margin-top: 10px;">
                            <div class="card">
                                <div class="card-body">
                                    <table id="table-object-pembiayaan" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Object ID</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Merk</th>
                                                <th>Model</th>
                                                <th>Tahun Kendaraan</th>
                                                <th>Harga Kendaraan</th>
                                                <th>Total Pokok Hutang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>data</td>
                                                <td>data</td>
                                                <td>data</td>
                                                <td>data</td>
                                                <td>data</td>
                                                <td>data</td>
                                                <td>data</td>
                                                <td style="text-align: center;">
                                                    <a href="#" id="edit-obj-pemb"><i class="fas fa-edit"></i></a>
                                                    <a href="#" id="copy-obj-kendaraan"><i class="fas fa-copy"></i></a>
                                                    <a href="#" id="copy-obj-dana" style="display: none;"><i class="fas fa-copy"></i></a>
                                                    <a href="#" id="delete-obj-pemb"><i class="fas fa-trash fa-red"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Table Object Pembiayaan -->
                        <br>
                        <!-- Start Form Object Pembiayaan -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tipe Pembiayaan:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-pemb">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Kendaraan*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kend">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lbl-object-pembiyaan" class="col-sm-4 col-form-label">Object Pembiayaan*:</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="pilihObjPembiayaan" value="kendaraan" id="radio-objek-kend"> Kendaraan
                                        </label>
                                        <label class="radio-inline" style="margin-left: 10px;">
                                            <input type="radio" name="pilihObjPembiayaan" value="dana" id="radio-objek-dana"> Dana
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Merk - Model Kendaraan*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-merk-model-modal-kend">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tahun Kendaraan*:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-tahun-kend" maxlength="4">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row" id="form-object-pemb-pengajuan-pencairan" style="display: none;">
                                    <label class="col-sm-4 col-form-label">Pengajuan Pencairan:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-pengajuan-pencairan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Harga Kendaraan*:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-harga-kend">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tenor*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-tenor-kend">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">%Upping:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-upping" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Tercantum di BPKB*:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-bpkb">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Warna Plat*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-warna-plat">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Ketersediaan Unit*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-unit-tersedia">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="flex-square">
                                    <div class="flex-square-title">
                                        <center>
                                            <h5>Informasi Supplier</h5>
                                        </center>
                                    </div>
                                    <div class="flex-square-body">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jenis Supplier*:</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-supplier">
                                                        <option selected disabled=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Penyedia Unit*:</label>
                                                <div class="col-sm-8">
                                                    <select id="slc-ext-sales-type" class="form-control select2bs4" data-live-search="true">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="flex-square">
                                                <div class="flex-square-body-inside">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Paket Rekening*:</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-paket-rek">
                                                                <option selected disabled=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Rekening Produk:</label>
                                                        <div class="col-sm-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inp-kode-rek-produk" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inp-desc-rek-produk" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Rekening Komisi:</label>
                                                        <div class="col-sm-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inp-kode-rek-komisi" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inp-desc-rek-komisi" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Rekening Discount:</label>
                                                        <div class="col-sm-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inp-kode-rek-discount" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inp-desc-rek-discount" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Object Pembiayaan -->
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div id="title-form-struktur-kredit-web" class="use-bottom-border">
                    <h4>Informasi Struktur Kredit</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Start Form Kiri -->
                        <div class="col-md-6">
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Struktur Kredit</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Tipe Pembayaran Angsuran*:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-bayar-angs">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Periode*:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-periode">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Advance/Arrear:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-adv-arrear">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Resiko Jaminan Gross:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-risk-gross">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Resiko Jaminan Net:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-risk-net">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Resiko Jaminan (Cabang):</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-risk-cab">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Total Pokok Hutang:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-total-hutang">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">%LTV:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-ltv" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lbl-object-pembiyaan" class="col-sm-4 col-form-label">Calculate By*:</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline">
                                                <input type="radio" name="pilihKalkulasi" value="rate" id="radio-rate"> Rate
                                            </label>
                                            <label class="radio-inline" style="margin-left: 10px;">
                                                <input type="radio" name="pilihKalkulasi" value="angsuran" id="radio-angs"> Angsuran
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Effective Rate*:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-effective-rate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Flat Rate*:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-flat-rate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Angsuran*:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-angsuran">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Biaya Admin</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Tunai:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tunai-admin" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Kredit:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-kredit-admin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Total Biaya:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tot-biaya-admin">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Biaya Provisi</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Tunai:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tunai-provisi" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Kredit:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-kredit-provisi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Total Biaya:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tot-biaya-provisi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Biaya Fiducia</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Fiducia:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-biaya-fiducia" readonly>
                                            </div>
                                            <div class="input-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pilihTipeFiducia" id="tunai" value="tunai">
                                                    <label class="form-check-label" for="tunai">Tunai</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pilihTipeFiducia" id="kredit" value="kredit">
                                                    <label class="form-check-label" for="kredit">Kredit</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Angsuran</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Total Bunga:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tot-bunga-angs" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Angsuran Pertama:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-angs-pertama" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Angsuran Terakhir:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-angs-terakhir" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <!-- Start Form Kiri-->

                        <!-- Start Form Kanan -->
                        <div class="col-md-6">
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Asuransi Kerugian</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Tenor Asuransi:</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="inp-tenor-asuransi" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="pilih-prorate" value="prorate">
                                                <label class="form-check-label" for="pilih-prorate">Prorate</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Jenis Asuransi:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-asuransi">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Perusahaan Asuransi:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-perusahaan-asuransi">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Wilayah Asuransi:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-wil-asuransi">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Tunai Asuransi:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-biaya-asuransi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Kredit Asuransi:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-kredit-asuransi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Total Asuransi:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tot-biaya-asuransi" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Usia Kendaraan s/d Akhir Tenor (th):</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-usia-kend" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="flex-square">
                                        <div class="flex-square-body">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Basic Net Insurance:</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-net-insc" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Basic Gross Insurance:</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-gross-insc" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Gross Insurance Default:</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-default-gross" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Perluasan Jaminan</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="check-srcc" value="srcc">
                                            <label class="form-check-label" for="check-srcc">SRCC</label>
                                        </div>
                                        <div class="form-check form-check-inline add-margin">
                                            <input class="form-check-input" type="checkbox" id="check-flh" value="flh">
                                            <label class="form-check-label" for="check-flh">FLH</label>
                                        </div>
                                        <div class="form-check form-check-inline add-margin">
                                            <input class="form-check-input" type="checkbox" id="check-tjh" value="tjh">
                                            <label class="form-check-label" for="check-tjh">TJH</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="check-ts" value="ts">
                                            <label class="form-check-label" for="check-ts">TS</label>
                                        </div>
                                        <div class="form-check form-check-inline add-margin-1">
                                            <input class="form-check-input" type="checkbox" id="check-eqts" value="eqts">
                                            <label class="form-check-label" for="check-eqts">EQTS</label>
                                        </div>
                                        <div class="form-check form-check-inline add-margin-2">
                                            <input class="form-check-input" type="checkbox" id="check-pa-driver" value="pa-driver">
                                            <label class="form-check-label" for="check-pa-driver">PA DRIVER</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="check-liability" value="liability">
                                            <label class="form-check-label col-sm-5" for="check-liability">Limit Of Liability:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-limit-liability" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5>Informasi Asuransi Kerugian</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Jenis Asuransi:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-asuransi2">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Perusahaan Asuransi:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-perusahaan-asuransi2">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Tunai Asuransi:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-biaya-asuransi2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Kredit Asuransi:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-kredit-asuransi2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Biaya Total Asuransi:</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control inp-digit" id="inp-tot-biaya-asuransi2" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="flex-square">
                                        <div class="flex-square-body">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Net Insurance:</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-net-insc2" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Gross Insurance:</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-gross-insc2" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="col" style="display: flex; justify-content:flex-end; position:absolute; right:0; bottom:0;">
                                <button class="btn btn-success" id="btn-save-obj-pemb"><i class="fa fa-save"></i> Save</button>
                                <button class="btn btn-danger" id="btn-reset-obj-pemb" style="margin-left: 5px;"><i class="fa-solid fa-circle-minus"></i> Reset</button>
                            </div>
                        </div>
                        <!-- END Form Kanan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>