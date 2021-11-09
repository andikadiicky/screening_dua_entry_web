<section class="content">
    <div class="container-fluid">
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-form-pekerjaan-per-web" class="use-bottom-border">
                        <h4>Informasi Pekerjaan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- START Informasi Pekerjaan -->
                                <div class="flex-square">
                                    <div class="flex-square-title">
                                        <center>
                                            <h5>Informasi Pekerjaan Debitur</h5>
                                        </center>
                                    </div>
                                    <div class="flex-square-body">
                                        <div class="col-md-12">
                                            <!--  Start Form Pekerjaan Karyawan, ASN, Pejabat Penyelenggara Negara, TNI/POLRI -->
                                            <div id="form-pekerjaan-karyawan">
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Pekerjaan Debitur*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pekerjaan">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jenis Tempat Bekerja*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-tempat-kerja">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Nama Tempat Bekerja*:</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="inp-nama-tempat-kerja">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jabatan Debitur*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Status Pegawai*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-peg">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 1)*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-lvl1">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 2)*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-lvl2">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 3)*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-lvl3">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Total Lama Bekerja*</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-total-thn-kerja">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center; margin:2px">
                                                                <center>
                                                                    Thn
                                                                </center>
                                                            </div>
                                                            <input type="text" class="form-control" id="inp-total-bln-kerja">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">
                                                                <center>
                                                                    Bln
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Join Income Dengan Pasangan*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-join-income">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Start Form Pekerjaan Wiraswasta / Wiraswasta Profesional -->
                                            <div id="form-pekerjaan-wira" style="display: none">
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Pekerjaan Debitur*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pekerjaan-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jenis Tempat Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-tempat-usaha-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Nama Tempat Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="inp-nama-tempat-usaha-wira">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Bidang Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-bidang-usaha-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 1)*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-wira-lvl1">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 2)*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-wira-lvl2">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Sektor Ekonomi (Level 3)*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sektor-eko-wira-lvl3">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Status Lokasi*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-lok-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Lokasi Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-lokasi-usaha-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Total Pegawai Tempat Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control inp-digit" id="inp-total-peg-wira">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Total Lama Usaha*</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-total-thn-kerja-wira">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center; margin:2px">
                                                                <center>
                                                                    Thn
                                                                </center>
                                                            </div>
                                                            <input type="text" class="form-control" id="inp-total-bln-kerja-wira">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">
                                                                <center>
                                                                    Bln
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Join Income Dengan Pasangan*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-join-income">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- END Informasi Pekerjaan -->
                            </div>

                            <div class="col-md-6">
                                <!-- START Informasi Pekerjaan -->
                                <div class="flex-square">
                                    <div class="flex-square-title">
                                        <center>
                                            <h5>Informasi Pekerjaan Pasangan</h5>
                                        </center>
                                    </div>
                                    <div class="flex-square-body">
                                        <div class="col-md-12">
                                            <!-- Start Form Informasi Pekerjaan Pasangan Karyawan, ASN, Pejabat Penyelenggara Negara, TNI/POLRI -->
                                            <div id="form-pekerjaan-pasangan-karyawan">
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Pekerjaan Pasangan*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pekerjaan-pasangan">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jenis Tempat Bekerja/Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-tempat-kerja-pasangan">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Nama Tempat Bekerja/Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="inp-nama-tempat-kerja-pasangan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jabatan Pasangan*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan-pasangan">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Status Pegawai*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-pegawai-pasangan">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Total Lama Bekerja/Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-total-thn-kerja-pasangan">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center; margin:2px">
                                                                <center>
                                                                    Thn
                                                                </center>
                                                            </div>
                                                            <input type="text" class="form-control inp-digit" id="inp-total-bln-pasangan">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">
                                                                <center>
                                                                    Bln
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>

                                            <!-- Start Form Pekerjaan Pasangan Wiraswasta / Wiraswasta Profesional -->
                                            <div id="form-pekerjaan-pasangan-wira" style="display: none;">
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Pekerjaan Pasangan*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pekerjaan-pasangan-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jenis Tempat Bekerja/Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-tempat-kerja-pasangan-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Nama Tempat Bekerja/Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="inp-nama-tempat-kerja-pasangan-wira">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Jabatan Pasangan*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan-pasangan-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Status Pegawai*:</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-status-pegawai-pasangan-wira">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-5 col-form-label">Total Lama Bekerja/Usaha*:</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-total-thn-kerja-pasangan-wira">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">
                                                                <center>
                                                                    Thn
                                                                </center>
                                                            </div>
                                                            <input type="text" class="form-control" id="inp-total-bln-pasangan-wira">
                                                            <div class="col-md-2" style="display:flex; justify-content:center; align-items:center;">
                                                                <center>
                                                                    Bln
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="display: flex; justify-content:flex-end; position:absolute; right:0; bottom:0;">
                                    <button class="btn btn-success" id="btn-save-pekerjaan-per"><i class="fa fa-save"></i> Save</button>
                                </div>
                                <!-- END Informasi Pekerjaan -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>