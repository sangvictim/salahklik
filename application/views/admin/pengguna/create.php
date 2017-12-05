<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Add Admin</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
	    <br />
	    <form action="<?= base_url('admin/pengguna/add') ?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">

	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input type="text" name="nama" required="required" autofocus class="form-control col-md-7 col-xs-12">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	        	<textarea name="alamat" class="form-control col-md-7 col-xs-12" required></textarea>
	        </div>
	      </div>
	      <div class="form-group">
	        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Notelp</label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input required class="form-control col-md-7 col-xs-12" type="number" name="notelp" minlength="12">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <select name="role" class="form-control col-md-7 col-xs-12" required>
	          	<option value="">-- Pilih Role --</option>
	          	<?php foreach ($role as $rl): ?>
	          		<option value="<?= $rl->id ?>"><?= $rl->nama_role ?></option>
	          	<?php endforeach ?>
	          </select>
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input class="form-control col-md-7 col-xs-12" name="username" required="required" type="text">
	        </div>
	      </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input class="form-control col-md-7 col-xs-12" name="password" required="required" type="password" minlength="6">
	        </div>
	      </div>
	      <div class="ln_solid"></div>
	      <div class="form-group">
	        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	          <button type="submit" class="btn btn-success">Submit</button>
	        </div>
	      </div>

	    </form>
	  </div>
	</div>
	</div>
	</div>
  </div>