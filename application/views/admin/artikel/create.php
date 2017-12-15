  <div class="x_panel">
    <div class="x_title">
      <h2>Posting Artikel</h2>
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
    <form action="<?= base_url('admin/artikel/simpan') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <div class="col-md-12 col-sm-6 col-xs-12">
            <input type="text" name="judul" required="required" placeholder="Judul Artikel" autofocus class="form-control col-md-7 col-xs-12">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <div class="col-md-12 col-sm-6 col-xs-12">
            <select name="sub_kategori" required="required" class="form-control select2">
              <option value="">-- Pilih Kategori --</option>
              <?php foreach ($menu as $sk): ?>
                <option value="<?= $sk->id ?>"><?= $sk->nama_menu ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
            <div class="col-md-12">
              <label for="exampleInputFile">Upload Foto</label>
              <input type="file" id="gambar"  name="gambar" accept="image/*" onchange="showMyImage(this)" required>
              <div> <img id="thumbnil" src="" width="250px" /></div>
            </div>
         </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <textarea name="deskripsi"></textarea>
        </div>
      </div>
    </div>      
      <br>
      <center>
        <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </center>
    </div>
  </div>
  </form>
</div>

<script type="text/javascript">
  function showMyImage(fileInput) {
      var files = fileInput.files;
      for (var i = 0; i < files.length; i++) {
          var file = files[i];
          var imageType = /image.*/;
          if (!file.type.match(imageType)) {
              continue;
          }
          var img=document.getElementById("thumbnil");
          img.file = file;
          var reader = new FileReader();
          reader.onload = (function(aImg) {
              return function(e) {
                aImg.src = e.target.result;
              };
          })(img);
          reader.readAsDataURL(file);
      }
  }
</script>