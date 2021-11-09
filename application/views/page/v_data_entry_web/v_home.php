<?php $this->load->view('layout/header'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="float-right">
            <select class="form-control select2bs4" style="width: 100%;" id="slc-pilih-cabang">
              <option selected disabled="">0102 - Kelapa Gading</option>
            </select>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <h1>Data Entry</h1>
        </div>
        <div class="col-sm-6">
          <div class="float-right">
          <button class="btn btn-primary" id="btn-konfirmasi" data-toggle="modal">Konfirmasi</button>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- TAB Utama Data Entry WEB -->
      <?php $this->load->view('layout/tab_data_entry_web') ?>
      <br>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('modal/v_modal_alert'); ?>
<?php $this->load->view('layout/footer'); ?>
<!-- <?php $this->load->view('layout/footer_end'); ?> -->