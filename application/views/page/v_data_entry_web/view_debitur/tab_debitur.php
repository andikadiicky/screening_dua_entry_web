<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header p-2">
                    <div class="col-md-3">
                        <div class="form-group">
                            <h5>Tipe Debitur</h5>
                            <div class="input-group">
                                <select id="slc-tipe-deb" class="form-control select2bs4" style="width: 100%;" onchange="pilihDebitur()">
                                    <option value="" selected disabled></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sub Tab Personal -->
        <div id="PER" style="display: none;">
            <ul class="nav nav-tabs col-md-12" id="nav-subtab-debitur-personal" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-identitas-perorangan" data-toggle="tab" href="#identitas-perorangan" role="tab" aria-controls="identitas-perorangan">Identitas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-pekerjaan-perorangan" data-toggle="tab" href="#pekerjaan-perorangan" role="tab" aria-controls="pekerjaan-perorangan">Pekerjaan</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-pendapatan-perorangan" data-toggle="tab" href="#pendapatan-perorangan" role="tab" aria-controls="pendapatan-perorangan">Pendapatan</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="identitas-perorangan" role="tabpanel" aria-labelledby="identitas-perorangan">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/personal/tab_identitas_personal'); ?>
                </div>
                <div class="tab-pane" id="pekerjaan-perorangan" role="tabpanel" aria-labelledby="pekerjaan-perorangan">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/personal/tab_pekerjaan_perorangan'); ?>
                </div>
                <div class="tab-pane" id="pendapatan-perorangan" role="tabpanel" aria-labelledby="pendapatan-perorangan">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/personal/tab_pendapatan_perorangan'); ?>
                </div>
            </div>
        </div>
        <!-- END Sub Tab Personal -->

        <!-- Sub Tab Company -->
        <div id="COM" style="display: none;">
            <ul class="nav nav-tabs col-md-12" id="nav-subtab-debitur-company" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-identitas-company" data-toggle="tab" href="#identitas-company" role="tab" aria-controls="identitas-company">Identitas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-pendapatan-company" data-toggle="tab" href="#pendapatan-company" role="tab" aria-controls="pendapatan-company">Pendapatan</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-pic-perusahaan" data-toggle="tab" href="#pic-perusahaan" role="tab" aria-controls="pic-perusahaan">PIC Perusahaan</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-pengurus-pemegang-saham" data-toggle="tab" href="#pengurus-pemegang-saham" role="tab" aria-controls="pengurus-pemegang-saham">Susunan Pengurus & Pemegang Saham</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="identitas-company" role="tabpanel" aria-labelledby="identitas-company">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/company/tab_identitas_company'); ?>
                </div>
                <div class="tab-pane" id="pendapatan-company" role="tabpanel" aria-labelledby="pendapatan-company">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/company/tab_pendapatan_company'); ?>
                </div>
                <div class="tab-pane" id="pic-perusahaan" role="tabpanel" aria-labelledby="pic-perusahaan">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/company/tab_pic_perusahaan'); ?>
                </div>
                <div class="tab-pane" id="pengurus-pemegang-saham" role="tabpanel" aria-labelledby="pengurus-pemegang-saham">
                    <?php $this->load->view('/page/v_data_entry_web/view_debitur/company/tab_pengurus_pemegang_saham'); ?>
                </div>
            </div>
        </div>
        <!-- END Sub Tab Company -->
</section>