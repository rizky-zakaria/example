  </div>
  <!-- /.card -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>

  <!-- modal -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
          <b>Version</b> 0.0.1-cw
      </div>
      <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">Bisadong.id</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="<?= base_url(); ?>vendor/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url(); ?>vendor/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>vendor/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>vendor/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>vendor/dist/js/demo.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>
  <script src="sweetalert2.min.js"></script>
  <!-- Page specific script -->
  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
          });
      });
  </script>
  <?php
    if (isset($_SESSION['alert'])) {
        echo "
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: '" . $_SESSION['alert'] . "',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ";
        unset($_SESSION['alert']);
    }
    ?>
  </body>

  </html>