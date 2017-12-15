<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-6">
    	<div class="x_panel">
      <div class="x_title">
        <h2>Form Edit Menu</h2>
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
	    <form action="<?= base_url('admin/menu/update/'.$edit_menu->id) ?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Master Menu
          </label>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <select class="form-control select2" name="id_parent" required>
              <option value="">-- Pilih Master Menu --</option>
              <?php foreach ($parent as $pr): ?>
                <option value="<?= $pr->id ?>" <?= $edit_menu->id_parent == $pr->id ? 'selected' : '' ?>><?= $pr->nama_menu?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kategori
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input type="text" name="nama_menu" value="<?= $edit_menu->nama_menu ?>" required="required" autofocus class="form-control col-md-7 col-xs-12">
	        </div>
	      </div>
	      <div class="ln_solid"></div>
	      <div class="form-group">
	        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	        </div>
	      </div>

	    </form>
	  </div>
	</div>
    </div>
    <div class="col-md-6">
    	<div class="x_panel">
      <div class="x_title">
        <h2>Daftar Menu</h2>
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
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>Nama Kategori</th>
              <th width="5%">#</th>
              <th width="5%">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($menu as $kt): ?>
            	<tr>
               <td><?= $no ?></td>
              <td><?= $kt->nama_menu ?></td>
              <td>
                <a href="<?= base_url('admin/menu/edit/'.$kt->id.'.html') ?>" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
              </td>
              <td>
                <a href="<?= base_url('admin/menu/delete/'.$kt->id) ?>" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
              </td> 
              </tr>
            <?php $no++; endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>
	</div>
  </div>