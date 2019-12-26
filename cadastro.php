<div class="container">
            <div class="card border-0 shadow my-3">
                <div class="card-body p-3">
                <h1 class="font-weight-light">Cadastro</h1>
                  <div class="form-group">

                    <form class="form-horizontal" name="cadastro" action="cad-user.php" method="post">
                      
                      <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome" autofocus required>
                      </div>

                      <div class="form-group">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
                      </div>

                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com.br" required>
                      </div>
                      
                      <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                      </div>
                      
                      <button type="reset" class="btn btn-primary d-block text-center mt-2 small center">Limpar</button>
                      <button class="mt-2 btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrar</button>
                      <p class="text-center mt-2 text-danger">
                      <?php
                        if(isset($_SESSION['cadastroerro'])){
                          echo '<script>alert("Usuario ou email ja existem");</script>';
                          echo  $_SESSION['cadastroerro'];
                        unset($_SESSION['cadastroerro']);
                        }
                      ?>
                      </p>
                      </form>
                  </div>

          </div>
      </div>
</div>