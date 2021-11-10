<section class="content">
    <div class="container-fluid">
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-form-identitas-order-web" class="use-bottom-border">
                        <h4>Informasi Identitas Order</h4>
                    </div>
                    <div class="card-body">
                        <!-- Start Form Identitas Order -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Channel*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-channel">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Outlet Channel*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-outlet-channel">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Pembiayaan*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-pembiayaan">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Skema Pembiayaan*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-skema-pembiayaan">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tujuan Pengunaan Unit*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-tujuan-penggunaan-unit">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tujuan Pembiayaan*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-tujuan-pembiayaan">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Produk Marketing*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-prod-marketing">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Marketing Program*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-marketing-prog">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Sumber Nasabah*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-sumber-nasabah">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Group Customer*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-group-cust">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="form-object-pemb-radio">
                                    <label for="lbl-object-pembiyaan" class="col-sm-4 col-form-label">Multiunit*:</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="pilihMultiunit" value="ya" id="radio-multiunit-yes"> Ya
                                        </label>
                                        <label class="radio-inline" style="margin-left: 10px;">
                                            <input type="radio" name="pilihMultiunit" value="tidak" id="radio-multiunit-no"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Cara Bayar Angsuran*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-cara-bayar">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Marketing Scheme*:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-marketing-scheme">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="flex-square">
                                    <div class="flex-square-title">
                                        <center>
                                            <h5>Informasi Refinancing/Restructuring</h5>
                                        </center>
                                    </div>
                                    <div class="flex-square-body">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">No Kontrak Lama*:</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control inp-digit" id="inp-no-kontrak-lama">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Identitas Order -->
                    </div>
                </div>
            </div>
            <br>
            <!-- External Sales -->
            <div class="col-md-12">
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Informasi External Sales</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">External Sales Type*:</label>
                                    <div class="col-sm-8">
                                        <select id="slc-ext-sales-type" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">External Sales Job*:</label>
                                    <div class="col-sm-8">
                                        <select id="slc-ext-sales-job" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">External Sales *:</label>
                                    <div class="col-sm-8">
                                        <select id="slc-ext-sales" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button class="btn btn-success" id="btn-add-iden-ord-ext"><i class="fa fa-plus"></i> Tambah</button>
                                    <button class="btn btn-danger" id="btn-reset-external-sales"> <i class="fas fa-sync-alt"></i> Reset</button>
                                </div>
                            </div>

                            <div class="col-md-12" style="margin-top: 15px;">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="table-external-sales" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>External Sales Type</th>
                                                    <th>External Sales No</th>
                                                    <th>External Sales Name</th>
                                                    <th>Job</th>
                                                    <th>Rekening</th>
                                                    <th>Komisi</th>
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

                        </div>
                    </div>
                </div>
            </div>
            <!-- END External Sales -->
            <br>
            <!-- Internal Sales -->
            <div class="col-md-12">
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Informasi Internal Sales</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Internal Sales Type*:</label>
                                    <div class="col-8">
                                        <select id="slc-int-sales-type" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Internal Sales Job*:</label>
                                    <div class="col-8">
                                        <select id="slc-int-sales-job" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Internal Sales Force*:</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <select id="slc-int-sales-force" class="form-control select2bs4" data-live-search="true">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Internal Sales Head Job*:</label>
                                    <div class="col-8">
                                        <select id="slc-int-sales-head-job" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Internal Sales Head*:</label>
                                    <div class="col-8">
                                        <select id="slc-int-sales-head" class="form-control select2bs4" data-live-search="true">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button class="btn btn-success" id="btn-add-iden-ord-ext"><i class="fa fa-plus"></i> Tambah</button>
                                    <button class="btn btn-danger" id="btn-reset-external-sales"> <i class="fas fa-sync-alt"></i> Reset</button>
                                </div>
                            </div>

                            <div class="col-md-12" style="margin-top: 15px;">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="table-internal-sales" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Internal Sales Type</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Job</th>
                                                    <th>Internal Sales Head</th>
                                                    <th>Job Head</th>
                                                    <th>Bank Acc No</th>
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
                                                        <a href="#"><i class="fas fa-edit fa-gray"></i></a>
                                                        <a href="#"><i class="fas fa-trash fa-red"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-12">
                <div class="col" style="display: flex; justify-content:flex-end; position:absolute; right:0; bottom:0;">
                    <button class="btn btn-success" id="btn-save-iden-order-comp"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
            <!-- Internal Sales -->
        </div>
</section>