<section id="integrations" class="section-gray" style="margin-top: -10%">
  <div class="container ">
    <div class="row services">
      <div class="col-md-9">
        <div class="row pull-left">
        	<h4><strong style="color: #3d96cf"><?= $konten->judul?></strong></h4>
        	<hr>
        </div>
        <div class="row">
        	<img src="<?= base_url(substr($konten->gambar, 1))  ?>">
        </div>
        <div class="row">
        	<p>
        		<?= $konten->deskripsi ?>
        	</p>
        </div>
        <div class="row">
        	<div class="pull-left">
        		Author By: <?= $konten->nama_penulis ?>
        	</div>
        	<div class="pull-right">
        		Post: <?= $konten->created_at ?>
        	</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row pull-left">
        judul deskripsi dll
        </div>
      </div>
    </div>
  </div>
</section>