<head>
<style>
.menu{
    
    position: absolute;
    top:0px;
    background-color:#eee;
    padding:15px;
}
</style>
</head>
</section>
<div class="columns">
<?php if($_SESSION['usuarioID']){?>
<div class="column is-2">
<aside class="menu">
  <p class="menu-label">
    Dashboard
  </p>
  <ul class="menu-list">
    <li><a href="inicio">Inicio</a></li>
    <li><a href="publicar">Publicar</a></li>
    <li><a href="gerenciar-posts">Gerenciar Publicações</a></li>
    <li><a href="perfil">Editar Perfil</a></li>
    <li><a href="sair">Sair</a></li>
  </ul>
</aside>
</div>
<?php }?>

<?php
	$idUser = $_SESSION['usuarioID'];
	$query = $con->prepare("SELECT * FROM usuarios WHERE id = ?");
	$query->bind_param("s", $idUser);
	$query->execute();
	$dados = $query->get_result()->fetch_assoc();

?>
<div class="column is-8">
<form method="POST" enctype="multipart/form-data" id="form-publicar">
    <label class="title">Nome</label>
    <input class="input" name="nome" type="text" placeholder="Titulo*" value="<?php echo $dados['nome'];?>"> <br> <br>
<br>
<br>
    <label class="title">Usuario</label>
    <input class="input" name="usuario" type="text" placeholder="Usuario*" value="<?php echo $dados['usuario'];?>"> <br> <br>
<br>
<br>
    <label class="title">Senha</label>
    <input class="input" name="senha" type="password" placeholder="***********" value="<?php echo $dados['senha'];?>"> <br> <br>
<br>
<button class="button is-info is-outlined">Editar Perfil</button>
<input type="hidden" name="alt" value="cad">
</form>
</div>
</div>
<?php
	if(isset($_POST['alt']) && $_POST['alt'] == "cad"){
		if($_POST['nome'] && $_POST['usuario'] && $_POST['senha']){
			$nome = addslashes($_POST['nome']);
			$usuario = addslashes($_POST['usuario']);
			$senha = addslashes($_POST['senha']);

			$sql = $con->prepare("UPDATE usuarios SET nome = ?, usuario = ?, senha = ? WHERE id = ?");
			$sql->bind_param("ssss", $nome, $usuario, $senha, $idUser);
			$sql->execute();

			if($sql->affected_rows > 0){
				redireciona('perfil', 'success', 2, '<div class="notification is-success">Dados alterado com sucesso!');
			}else if($sql->affected_rows == 0){
				echo "<div class='notification is-warning'>Você não atualizou nada!</div>";
			}else if($sql->affected_rows < 0){
				echo "<div class='notification is-warnig'>Erro ao atualizar os dados!</div>";
			}


		}else{
			echo "<div class='notification is-danger'>Preencha todos os campos!</div>";
		}
	}
?>