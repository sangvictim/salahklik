<?php
        if ($this->session->flashdata('gagal') != '') { ?>
          <center><div class="alert alert-danger" role="alert"><?= $this->session->flashdata('gagal') ?></div></center>
        <?php }
        if ($this->session->flashdata('sip') != '') { ?>
          <center><div class="alert alert-success" role="alert"><?= $this->session->flashdata('sip') ?></div></center>
        <?php }
      ?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-12">
    	<div class="x_panel">
      <div class="x_title">
        <h2>Daftar Postingan <a href="<?= base_url('admin/artikel/create.html') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Artikel Baru</a></h2>
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
              <th>Judul</th>
              <th>Sub Kategori</th>
              <th>deskripsi</th>
              <th>Penulis</th>
              <th>Tgl Posting</th>
              <th width="5%">#</th>
              <th width="5%">#</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($artikel as $art): ?>
            	<tr>
            		<td><?= $no ?></td>
                <td><?= $art->judul ?></td>
                <td><?= $art->sub_kategori ?></td>
                <td><?= $art->deskripsi ?></td>
                <td><?= $art->penulis ?></td>
              	<td><?= $art->created_at ?></td>
              	<td>
                  <a href="<?= base_url('admin/artikel/edit/'.$art->id.'.html') ?>" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                  <a href="<?= base_url('admin/artikel/delete/'.$art->id) ?>" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
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