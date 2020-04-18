        <div class="container-login">
          <h1 class="title">Login</h1>
          <div class="form-body">
          <div class="field">
            <p class="control has-icons-left has-icons-right">
            <form method="POST">
              <input class="input" name="usuario" type="text" placeholder="Usuário">
            </p>
          </div>
          <div class="field">
              <input class="input" name="senha" type="password" placeholder="********">
            </p>
          </div>
          <div class="field">
            <p class="control">
              <button class="button is-info is-outlined">Entrar</button>
            </p>
          </div>
          <input type="hidden" name="env" value="log"> 
        </form>
          </div>
        </div>
      
    <br>

    <?php
    if(isset($_POST['env'])){
        if ($_POST['usuario'] && $_POST['senha']){
            $usuario = addslashes($_POST['usuario']);
            $senha = addslashes($_POST['senha']);

            $sql = $con->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
            $sql->bind_param("ss", $usuario, $senha);
            $sql->execute();
            $get = $sql->get_result();
            $total = $get-> num_rows;
            $dados = $get->fetch_assoc();

            if($total>0){
                $_SESSION['usuarioID'] = $dados['id'];
                $_SESSION['usuarioUsuario'] = $dados['usuario'];
                $_SESSION['usuarioNome'] = $dados['nome'];

                redireciona('inicio', 'sucess', 2, '<div class="notification is-success">Logado com sucesso!</div>');
                
            }else {
                echo "<div class='notification is-warning'>Usuário ou senha invalidos";
            }

        }else{
            echo "<div class='notification is-danger'>Preencha todos os campos </div>";
        }
    }
?>
</div>
</div>