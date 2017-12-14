<section id="integrations" class="section-gray" style="margin-top: -10%">
  <div class="container ">
    <div class="row services">
      <div class="col-md-12">
        <div class="row">
          <?php foreach ($konten_by as $kt): ?>
            <div class="col-sm-4">
              <div class="box box-services">
                <div class="">
                  <img src="<?= base_url(substr($kt->gambar, 1))  ?>" alt="" style="width: 100px">
                </div>
                <a href="<?= base_url('page/detail/'.$kt->permalink.'.html') ?>"><h4 class="heading"><?= $kt->judul?></h4></a>
                
                <?= substr($kt->deskripsi, 0, 50)?>.... 
                <br>
                <a href="<?= base_url('page/detail/'.$kt->permalink.'.html') ?>" class="btn btn-info">Read More >>></i></a>
              </div>
            </div>
          <?php endforeach ?>
        </div>
          <br>
          <?=
          $this->pagination->create_links();
          ?>
      </div>
    </div>
  </div>
</section>