<section class="content">
    <div class="container-fluid">
        <div style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="title-form-pendapatan-per-web" class="use-bottom-border">
                        <h4>Informasi Pendapatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row" id="form-pendapatan">
                            <div class="col-md-6">
                                <!-- Start Informasi Pendapatan -->

                                <!-- Start Form Pendapatan Karyawan, ASN, Pejabat Penyelenggara Negara, TNI/POLRI -->
                                <div id="form-pendapatan-karyawan">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Pendapatan Utama Perbulan*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-pendapatan-utama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Pendapatan Lainnya Debitur*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-pendapatan-lain">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Sumber Pendapatan Lainnya Debitur*:</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-sumber-pendapatan">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Pendapatan Perbulan Pasangan*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-pendapatan-pasangan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Sumber Pendapatan Pasangan*:</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-sumber-pendapatan-pasangan">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" id="sumber-pendapatan-utama" name="" value="">
                                    <input type="hidden" id="tot-pendapatan-seluruh" name="" value="">
                                    <input type="hidden" id="biaya-hidup" name="" value="">
                                    <input type="hidden" id="sisa-pendapatan" name="" value="">
                                    <input type="hidden" id="angs-diajukan" name="" value="">
                                    <input type="hidden" id="angs-muf-deb" name="" value="">
                                    <input type="hidden" id="angs-lain-deb" name="" value="">
                                    <input type="hidden" id="angs-muf-pasangan" name="" value="">
                                    <input type="hidden" id="angs-lain-pasangan" name="" value="">
                                    <input type="hidden" id="tot-angs-seluruh" name="" value="">
                                    <input type="hidden" id="dbr-karyawan" name="" value="">
                                    <input type="hidden" id="dir-karyawan" name="" value="">
                                </div>
                                <!-- END Form Pendapatan Karyawan, ASN, Pejabat Penyelenggara Negara, TNI/POLRI -->

                                <!-- Start Form Pendapatan Wiraswasta/Wiraswasta Profesional -->
                                <div id="form-pendapatan-wira" style="display: none;">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Pendapatan/Omzet Usaha*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-pendapatan-wira">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Biaya Modal/HPP (Harga Pokok Penjualan)*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-modal-hpp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Biaya Operasional*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-biaya-opr">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Pendapatan Lainnya Debitur*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-pendapatan-lain-wira">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Sumber Pendapatan Lainnya Debitur*:</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-sumber-pendapatan-wira">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Pendapatan Perbulan Pasangan*:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control inp-digit" id="inp-pendapatan-pasangan-wira">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Sumber Pendapatan Pasangan*:</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-sumber-pendapatan-pasangan-wira">
                                                <option selected disabled=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" id="sumber-pendapatan" name="" value="">
                                    <input type="hidden" id="laba-kotor" name="" value="">
                                    <input type="hidden" id="laba-opr" name="" value="">
                                    <input type="hidden" id="tot-pendapatan-seluruh-wira" name="" value="">
                                    <input type="hidden" id="biaya-hidup-wira" name="" value="">
                                    <input type="hidden" id="sisa-pendapatan-wira" name="" value="">
                                    <input type="hidden" id="angs-diajukan-wira" name="" value="">
                                    <input type="hidden" id="angs-muf-deb-wira" name="" value="">
                                    <input type="hidden" id="angs-lain-deb-wira" name="" value="">
                                    <input type="hidden" id="angs-muf-pasangan-wira" name="" value="">
                                    <input type="hidden" id="angs-lain-pasangan-wira" name="" value="">
                                    <input type="hidden" id="tot-angs-seluruh-wira" name="" value="">
                                    <input type="hidden" id="dbr-wira" name="" value="">
                                    <input type="hidden" id="dir-wira" name="" value="">
                                </div>
                                <!-- END Form Pendapatan Wiraswasta/Wiraswasta Profesional -->

                                <!-- END Informasi Pendapatan -->
                            </div>
                            <div class="col-md-6">
                                <div class="col" style="display: flex; justify-content:flex-end; position:absolute; right:0; bottom:0;">
                                    <button class="btn btn-success" id="btn-save-pendapatan-karyawan"><i class="fa fa-save"></i> Save</button>
                                </div>
                                <div class="col" style="display: flex; display:none; justify-content:flex-end; position:absolute; right:0; bottom:0;">
                                    <button class="btn btn-success" id="btn-save-pendapatan-wira"><i class="fa fa-save"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>