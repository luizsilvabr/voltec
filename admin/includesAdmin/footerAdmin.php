    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer text-center">
        <strong><a style="color: #7f7f7f" target="_blank" href="https://www.sudotechnology.com.br/">© 2022 SUDO Technology. Todos os direitos reservados.</a></strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/js/iziToast.min.js"></script>
    <script src="../assets/vendors/summernote/summernote-bs4.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph', 'height']],
                    ['table', ['table']]
                ]
            });
         });
        <?php if (isset($_SESSION['msgLogin'])) { ?>
            var description = '<?php print $_SESSION['msgLogin'] ?>'
            if (description == '') {
                pass
            } else {
                if (description.includes('Vindo')) {
                    iziToast.success({
                        id: 'success',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }
            }
        <?php }
        unset($_SESSION['msgLogin']) ?>

        <?php if (isset($_SESSION['controller'])) { ?>
            var description = '<?php print $_SESSION['controller'] ?>'
            if (description == '') {
                pass
            } else {
                if (description.includes('Sucesso')) {
                    iziToast.success({
                        id: 'success',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }
                if (description.includes('Erro')) {
                    iziToast.error({
                        id: 'error',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }
            }
        <?php }
        unset($_SESSION['controller']) ?>
    </script>
    </body>

    </html>