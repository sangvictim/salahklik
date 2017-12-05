<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-12">
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
	    <form action="<?= base_url('admin/sub_kategori/add') ?>" method="POST" data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="id_kategori" required="required" class="form-control col-md-7 col-xs-12">
              <option value="">-- Pilih Kategori --</option>
              <?php foreach ($kategori as $kt): ?>
                <option value="<?= $kt->id ?>"><?= $kt->nama_kategori ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
	      <div class="form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub Kategori
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	          <input type="text" name="nama_sub_kategori" required="required" autofocus class="form-control col-md-7 col-xs-12">
	        </div>
	      </div>
	      <div class="ln_solid"></div>
	      <div class="form-group">
	        <div class="col-md-12 col-sm-6 col-xs-12 col-md-offset-5">
	          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	        </div>
	      </div>

	    </form>
	  </div>
	</div>
    </div>
    <div class="col-md-12">
    	<div class="x_panel">
      <div class="x_title">
        <h2>Daftar Kategori</h2>
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
              <th>Parent Kategori</th>
              <th>Nama Sub Kategori</th>
              <th width="5%">#</th>
              <th width="5%">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($sub_kategori as $kt): ?>
            	<tr>
            		<td><?= $no ?></td>
                <td><?= $kt->nama_kategori ?></td>
              	<td><?= $kt->nama_sub_kategori ?></td>
              	<td>
                  <a href="<?= base_url('admin/sub_kategori/edit/'.$kt->id.'.html') ?>" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                  <a href="<?= base_url('admin/sub_kategori/delete/'.$kt->id) ?>" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
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