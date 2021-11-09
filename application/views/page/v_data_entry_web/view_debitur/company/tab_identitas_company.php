<section class="content">
    <div class="container-fluid">
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-form-identitas-comp-web" class="use-bottom-border">
                        <h4>Customer Company - Identitas</h4>
                    </div>
                    <div class="card-body">
                        <!-- Start Form Identitas Perusahaan -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Jenis Badan Usaha*:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-badan-usaha">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Status Penamaan Modal:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-penamaan-modal">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Status Kepemilikan Badan Usaha:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-kepemilikan">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">No NPWP*:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit npwp" name="npwp" id="inp-no-npwp-comp" maxlength="15" placeholder="00.000.000.0-000.000">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Nama Lengkap Sesuai NPWP:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-lengkap-comp">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Nama Perusahaan*:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-perusahaan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">No NIB/TDP:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-nib-tdp">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">No Akta Pendirian*:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-no-akta-pendirian">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Tanggal Akta Pendirian*:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <div class="input-group date" id="reservationdate">
                                                <input id="inp-tgl-akta-pendirian" type="text" class="form-control datetimepicker-input tanggal" data-toggle="datetimepicker">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 1)*:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-lvl1-comp">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 2)*:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-lvl2-comp">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 3)*:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-lvl3-copm">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Total Lama Usaha*:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-total-thn-usaha-comp">
                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center; margin:2px">
                                                <center>
                                                    Thn
                                                </center>
                                            </div>
                                            <input type="text" class="form-control" id="inp-total-bln-usaha-comp">
                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">
                                                <center>
                                                    Bln
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Status Lokasi:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-lokasi-comp">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Lokasi Usaha:</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-lokasi-usaha-comp">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Total Pegawai:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-total-pegawai">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">No Ijin Usaha/SIUP:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-no-ijin-siup">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">No Akta Perubahana Terakhir:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-last-no-akta">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Tanggal Akta Perubahan Terakhir*:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <div class="input-group date" id="reservationdate">
                                                <input id="inp-last-akta-date-changed" type="text" class="form-control datetimepicker-input tanggal" data-toggle="datetimepicker">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Modal Dasar:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-modal-dasar-comp">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Modal Disetor:</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-modal-setor-comp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Start Alamat Perusahaan -->
                                <div class="flex-square">
                                    <div class="flex-square-title">
                                        <center>
                                            <h5>Informasi Alamat Perusahaan</h5>
                                        </center>
                                    </div>
                                    <div class="flex-square-body">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Alamat KTP*:</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <textarea class="form-control" id="inp-alamat-comp"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">RT/RW*:</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control inp-digit" id="inp-rt-comp">
                                                        <div class="col-md-2" style="display:flex; justify-content:center; align-items:center; font-weight:bold">
                                                            <center>
                                                                /
                                                            </center>
                                                        </div>
                                                        <input type="text" class="form-control" id="inp-rw-comp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kode Pos*:</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-zipcode-comp">
                                                        <option selected disabled=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kelurahan*:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inp-kelurahan-comp" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kecamatan*:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inp-kecamatan-comp" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Kab/Kota*:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inp-kabkot-comp" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Provinsi*:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inp-provinsi-comp" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No Telephone*:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control inp-digit" id="inp-no-telp-comp">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No Fax*:</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control inp-digit" id="inp-no-fax-comp">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="check-alamat-tagih-comp">
                                                            <label class="form-check-label" for="checkAlamatTagihComp">Alamat Tagih</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- END Alamat Perusahaan -->
                            </div>
                            <div class="col-md-6">
                                <div class="col" style="display: flex; justify-content:flex-end; position:absolute; right:0; bottom:0;">
                                    <button class="btn btn-success" id="btn-save-iden-comp"><i class="fa fa-save"></i> Save</button>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Identitas Perusahaan -->
                    </div>
                </div>
            </div>
        </div>
</section>