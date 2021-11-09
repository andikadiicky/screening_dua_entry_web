<div class="card card-primary card-outline card-outline-tabs">
	<div class="card-header p-2">
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent col-md-12">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggle-nav-tabs" style="margin-bottom: 5px;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="toggle-nav-tabs">
				<ul class="nav nav-tabs col-md-12" id="nav-tab-utama" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="tab-debitur" data-toggle="tab" href="#debitur" role="tab" aria-controls="debitur">Debitur</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="tab-identitas-order" data-toggle="tab" href="#identitas-order" role="tab" aria-controls="identitas-order">Identitas Order</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="tab-obj-pembiayaan" data-toggle="tab" href="#objek-pembiayaan" role="tab" aria-controls="objek-pembiayaan">Objek Pembiayaan</a>
					</li>
					<li class="nav-item margin-left">
						<form style="display: flex; align-items:right">
							<input type="text" id="inp-initial-rec" class="form-control col-md-5" style="margin-left:5px;" placeholder="Initial Recommendation" readonly>
							<input type="text" id="inp-pilih-cab" class="form-control col-md-3" style="margin-left:5px;" placeholder="No Order" readonly>
							<input type="text" id="inp-no-app" class="form-control col-md-4" style="margin-left:5px;" placeholder="No Aplikasi" readonly>
						</form>
					</li>
				</ul>
			</div>
		</nav>
		<div class="tab-content" id="tab-content-entry-web">
			<div class="tab-pane active" id="debitur" role="tabpanel" aria-labelledby="debitur-tab">
				<?php $this->load->view('/page/v_data_entry_web/view_debitur/tab_debitur'); ?>
			</div>
			<div class="tab-pane" id="identitas-order" role="tabpanel" aria-labelledby="identitas-order-tab">
				<?php $this->load->view('/page/v_data_entry_web/view_identitas_order/tab_identitas_order'); ?>
			</div>
			<div class="tab-pane" id="objek-pembiayaan" role="tabpanel" aria-labelledby="objek-pembiayaan">
				<?php $this->load->view('/page/v_data_entry_web/view_objek_pembiayaan/tab_objek_pembiayaan'); ?>
			</div>
		</div>
	</div>
</div>