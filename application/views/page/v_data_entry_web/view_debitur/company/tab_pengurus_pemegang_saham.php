<section class="content">
    <div class="container-fluid">
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-form-susunan-pengurus-saham" class="use-bottom-border">
                        <h4>Customer Company - Susunan Pengurus & Pemegang Saham</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <!-- Start PIC Management & Pemegang Saham Pribadi -->
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5 class="flex-square-title-responsive">Informasi Identitas PIC Management & Pemegang Saham Pribadi</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12 d-flex justify-content-end button-add-responsive-1">
                                        <button type="button" class="btn btn-secondary" id="btn-add-pic-saham-pribadi" onclick="addInfoPICSahamPrib()">Tambah</button>
                                    </div>
                                    <br>
                                    <div id="info-identitas-pic-pemegang-saham-pribadi" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Jenis Identitas*:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-identitas-pic-mg">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Upload KTP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="btn btn-info btn-file"><i class="fas fa-file-upload"></i> Upload<input type="file" id="ktp-pic-mgmnt" /></span>
                                                            <label style="margin-left: 10px;">.jpg, .jpeg, .png</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">No KTP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-no-ktp-pic-mg" maxlength="16">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nama Sesuai KTP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inp-nama-pic-mg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Tempat Lahir Sesuai KTP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inp-tempat-lahir-pic-mg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Tanggal Lahir Sesuai KTP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group date" id="reservationdate">
                                                                <input id="inp-tanggal-lahir-pic-mg" type="text" class="form-control datetimepicker-input tanggal" data-toggle="datetimepicker">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Jenis Kelamin*:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kelamin-pic-mg">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Kewarganegaraan*:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-kewarganegaraan-pic-mg">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">No HP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="inp-nohp-pic-mg" maxlength="13">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Email:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inp-email-pic-mg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Jabatan*:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan-pic-mg">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Pemilik Saham*:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pemilik-saham-pic-mg">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">% Kepemilikan Saham*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="persen-milik-saham-pic-mg" maxlength="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col to-bottom-right" style="display: flex; justify-content:flex-end; right:0; bottom:0;">
                                                    <button class="btn btn-success" id="btn-save-identitas-pic"><i class="fa fa-save"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- END PIC Management & Pemegang Saham Pribadi -->

                            <!-- Start Summary PIC Management & Pemegang Saham Pribadi -->
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5 class="flex-square-title-responsive">Summary PIC Management & Pemegang Saham Pribadi</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12 view-datatable-responsive-1">
                                        <table id="tbl-summary-pic-management-saham-pribadi" class="table table-bordered table-hover" method="post" action='<?= base_url(); ?>'>
                                            <thead>
                                                <tr>
                                                    <th>Jenis Identitas</th>
                                                    <th>No Identitas</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jabatan</th>
                                                    <th>% Kepemilikan Saham</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center;">
                                                        <a href="#"><i class="fas fa-edit fa-gray"></i></a>
                                                        <a href="#"><i class="fas fa-trash fa-red"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END Summary PIC Management & Pemegang Saham Pribadi -->
                        </div>
                        <br>
                        <br>
                        <div class="col-md-12">
                            <!-- Start Identitas Pemegang Saham Perusahaan -->
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5 class="flex-square-title-responsive">Informasi Identitas Pemegang Saham Perusahaan</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12 d-flex justify-content-end button-add-responsive-2">
                                        <button type="button" class="btn btn-secondary" id="btn-add-pemegang-saham-perusahaan" onclick="addInfoPemegangSahamPerusahaan()">Tambah</button>
                                    </div>
                                    <br>
                                    <div id="info-identitas-pemegang-saham-perusahaan" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Jenis Badan Usaha*:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-badan-usaha-pemegang-saham">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nama Perusahaan*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inp-nama-perusahaan-pemegang-saham">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Foto NPWP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="btn btn-info btn-file"><i class="fas fa-file-upload"></i> Upload<input type="file" id="npwp-pemegang-saham" /></span>
                                                            <label style="margin-left: 10px;">.jpg, .jpeg, .png</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">No NPWP*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit npwp" name="npwp" id="inp-no-npwp-pemegang-saham" maxlength="15" placeholder="00.000.000.0-000.000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Tanggal Akta Pendirian*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group date" id="reservationdate">
                                                                <input id="inp-tanggal-akta-pendirian-pemegang-saham" type="text" class="form-control datetimepicker-input tanggal" data-toggle="datetimepicker">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">% Kepemilikan Saham*:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="persen-kepemilikan-pemegang-saham" maxlength="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col to-bottom-right" style="display: flex; justify-content:flex-end; right:0; bottom:0;">
                                                    <button class="btn btn-success" id="btn-save-identitas-pemegang-saham"><i class="fa fa-save"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- END Identitas Pemegang Saham Perusahaan -->

                            <!-- Start Summary Pemegang Saham Perusahaan -->
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5 class="flex-square-title-responsive">Summary Pemegang Saham Perusahaan</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12 view-datatable-responsive-2">
                                        <table id="tbl-summary-pemegang-saham-perusahaan" class="table table-bordered table-hover" method="post" action='<?= base_url(); ?>'>
                                            <thead>
                                                <tr>
                                                    <th>Nama Perusahaan</th>
                                                    <th>No NPWP</th>
                                                    <th>Tanggal Pendirian</th>
                                                    <th>% Kepemilikan Saham</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center;">
                                                        <a href="#"><i class="fas fa-edit fa-gray"></i></a>
                                                        <a href="#"><i class="fas fa-trash fa-red"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END Summary Pemegang Saham Perusahaan -->
                        </div>
                        <br>
                        <br>
                        <div class="col-md-12">
                            <!-- Start Pemegang Saham Masyarakat/Instansi Publik/Lainnya -->
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5 class="flex-square-title-responsive">Informasi Pemegang Saham Masyarakat/Instansi Publik/Lainnya</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12 d-flex justify-content-end button-add-responsive-3">
                                        <button type="button" class="btn btn-secondary" id="btn-add-pemegang-saham-masy" onclick="addInfoPemegangSahamMasy()">Tambah</button>
                                    </div>
                                    <br>
                                    <div id="info-identitas-pemegang-saham-masyarakat-lainnya" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Pemilik Saham:</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pemilik-saham">
                                                            <option selected disabled=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nama Instansi Publik:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inp-nama-instansi-publik">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">% Kepemilikan Saham:</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control inp-digit" id="persen-kepemilikan-saham-masy" maxlength="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col to-bottom-right" style="display: flex; justify-content:flex-end; right:0; bottom:0;">
                                                    <button class="btn btn-success" id="btn-save-pemegang-saham-masy"><i class="fa fa-save"></i> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- END Pemegang Saham Masyarakat/Instansi Publik/Lainnya -->

                            <!-- Start Summary Pemegang Saham Masyarakat/Instansi Publik/Lainnya -->
                            <div class="flex-square">
                                <div class="flex-square-title">
                                    <center>
                                        <h5 class="flex-square-title-responsive">Summary Pemegang Saham Masyarakat/Instansi Publik/Lainnya</h5>
                                    </center>
                                </div>
                                <div class="flex-square-body">
                                    <div class="col-md-12 view-datatable-responsive-3">
                                        <table id="tbl-summary-pemegang-saham-masyarakat-lainnya" class="table table-bordered table-hover" method="post" action='<?= base_url(); ?>'>
                                            <thead>
                                                <tr>
                                                    <th>Pemilik Saham</th>
                                                    <th>Nama Instansi Publik</th>
                                                    <th>% Kepemilikan Saham</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center;">
                                                        <a href="#"><i class="fas fa-edit fa-gray"></i></a>
                                                        <a href="#"><i class="fas fa-trash fa-red"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END Summary Pemegang Saham Masyarakat/Instansi Publik/Lainnya -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>