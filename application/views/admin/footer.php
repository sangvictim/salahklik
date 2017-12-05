          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/') ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/') ?>vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/')?>vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/')?>vendors/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/') ?>build/js/custom.min.js"></script>
    <script src="<?= base_url('assets/')?>vendors/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?= base_url('assets/')?>vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
  $(function () {
    $(".datatables").DataTable();
    $(".select2").select2();
    tinymce.init({ selector:'textarea' });
  });
</script>
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

  </body>
</html>