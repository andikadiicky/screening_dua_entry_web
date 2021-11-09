<section class="content">
    <div class="container-fluid">
        <!-- Sub Tab Objek Pembiayaan -->
        <div>
            <ul class="nav nav-tabs col-md-12" id="nav-subtab-obj-pembiayaan" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-obj-pembiayaan" data-toggle="tab" href="#obj-pembiayaan" role="tab" aria-controls="obj-pembiayaan">Objek Pembiayaan</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-refund" data-toggle="tab" href="#refund" role="tab" aria-controls="refund">Refund</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="obj-pembiayaan" role="tabpanel" aria-labelledby="obj-pembiayaan">
                    <?php $this->load->view('/page/v_data_entry_web/view_objek_pembiayaan/sub_tab_obj_pemb'); ?>
                </div>
                <div class="tab-pane" id="refund" role="tabpanel" aria-labelledby="refund">
                    <?php $this->load->view('/page/v_data_entry_web/view_objek_pembiayaan/sub_tab_refund'); ?>
                </div>
            </div>
        </div>
        <!-- END Sub Tab Objek Pembiayaan -->
</section>
<?php $this->load->view('modal/v_copy_object'); ?>