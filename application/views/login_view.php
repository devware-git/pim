
<body class="gradmat" style="background-image: url('assets/img/login.jpg');">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block" style="background-image: url('assets/img/login.jpg')!important;"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center"><img src="assets/img/log_predio.png" style="width:60px; margin-bottom: 4px">
                    <h1 class="h4 text-gray-900 mb-4">Bem vindo!</h1>
                  </div>
                  <?php echo form_open('../login','class="needs-validation" novalidate'); ?>
                    <div class="form-group">
                      <label>Login:</label>
                      <input type="text" name="login" class="form-control form-control-user" id="login" aria-describedby="emailHelp" placeholder="Login" required>
                      <div class="invalid-tooltip">
                        O campo Login é Obrigatorio.
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Senha:</label>
                      <input type="password" name="senha"class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha" required>
                      <div class="invalid-tooltip">
                        O campo Senha é Obrigatorio.
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Mantenha-me conectado</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/chart-area-demo.js"></script>
  <script src="assets/js/chart-pie-demo.js"></script>

  <?php
    if(isset($js)) {
      foreach ($js as $var) { ?>
        <script type="text/javascript" src="<?php echo(base_url('assets/js/'.$var.'.js')); ?>"></script>
    <?php  }
    }?>

</body>

</html>