 <!-- /.container -->
  <!-- MODAIS REGISTRAR.PHP-->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" name="login">Faça seu cadastro!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="registrar1.php" method="post">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputEmail4">Email</label>
  <input type="email" class="form-control" name="regEmail" placeholder="Email">
  </div>
  <div class="form-group col-md-6">
  <label for="inputPassword4">Senha</label>
  <input type="password" class="form-control" name="regPassword" placeholder="Senha">
  </div>
  </div>
  <div class="form-group">
  <label for="inputAddress">Endereço</label>
  <input type="text" class="form-control" name="regEndereco" placeholder="Rua xxxx, nº 0">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputCity">Cidade</label>
  <input type="text" class="form-control" name="regCidade">
  </div>

  <div class="form-group col-md-2">
  <label for="inputCEP">CEP</label>
  <input type="number" class="form-control" name="regCep">
  </div>
  </div>
  <div class="form-group">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="grCheck">
  <label class="form-check-label" for="grCheck">
    Concordo com os Termos
  </label>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
  <button type="reset" class="btn btn-primary">Reset</button>
  </form>
    </div>
      </div>
    </div>
  </div>

  <!-- modal do login -->
  <div class="modal fade" id="logon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" name="logon">Faça seu login!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="loginEmail">Email</label>
  <input type="email" class="form-control" name="loginEmail" placeholder="Email">
  </div>


  <div class="form-group col-md-6">
  <label for="loginPassword">Senha</label>
  <input type="password" class="form-control" name="loginPassword" placeholder="Senha">
  </div>
  </div>


  <button type="submit" class="btn btn-primary">Entrar</button>
  <button type="reset" class="btn btn-primary">Reset</button>
  </form>
  </div>
  </div>
  </div>
  </div>


  <!-- Footer -->

  <!-- Footer -->
    <footer class="footer text-center bg-danger">
      <div class="container">
        <div class="row">

          <!-- Footer Location -->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Localização</h4>
            <p class="lead mb-0">R. Alm. Tefé, 680
              <br> Niterói - Centro - RJ </p>
          </div>

          <!-- Footer Social Icons -->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Curta nas redes sociais!</h4>
            <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-fw fa-facebook-f"></i>
            </a>
            <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-fw fa-twitter"></i>
            </a>
            <a class="btn btn-outline-light btn-social mx-1" href="#">
              <i class="fab fa-fw fa-linkedin-in"></i>
            </a>

          </div>

          <!-- Footer About Text -->
          <div class="col-lg-4">
            <p class="m-0 text-center text-dark font-weight-bold">Copyright &copy; DI NAPOLES 2019</p>
          </div>

        </div>
      </div>
    </footer>






  <!-- Bootstrap core JavaScript -->
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
