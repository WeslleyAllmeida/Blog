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
    <li><a href="../inicio">Inicio</a></li>
    <li><a href="../publicar">Publicar</a></li>
    <li><a href="../gerenciar-posts">Gerenciar Publicações</a></li>
    <li><a href="../perfil">Editar Perfil</a></li>
    <li><a href="../sair">Sair</a></li>
  </ul>
</aside>
</div>
<?php }?>

<?php
    $idPost = addslashes($explode['1']);
    $query = $con->prepare("SELECT * FROM posts WHERE id =?");  
    $query->bind_param("s", $idPost);
    $query->execute();
    $get = $query->get_result();
    $dados = $get->fetch_assoc();

?>
<div class="column is-8">
<form method="POST" enctype="multipart/form-data" id="form-publicar">
    <label class="title">Titulo</label>
    <input class="input" name="titulo" type="text" placeholder="Titulo*" value="<?php echo $dados['titulo'];?>"> <br> <br>
<br>
<br>

<textarea class="textarea" name="post" placeholder="Descrição*"><?php echo $dados['postagem'];?></textarea>
<br>
<button class="button is-info is-outlined">Alterar Publicação</button>
<input type="hidden" name="env" value="post">
</form>
</div>
</div>
<?php
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['titulo'] && $_POST['post']){
			$titulo = $_POST['titulo'];
            $post = $_POST['post'];
            
            $sql = $con->prepare("UPDATE posts SET titulo = ?, postagem = ? WHERE id = ?");
            $sql->bind_param("sss", $titulo, $post, $idPost);
            $sql->execute();


			if($sql->affected_rows > 0){
				echo "<div class='notification is-success'>Publicação alterar com sucesso!</div>";
			}else{
				echo "<div class='notification is-warnig'>Erro ao alterar a publicação!</div>";
			}


		}else{
			echo "<div class='notification is-danger'>Preencha todos os campos</div>";
		}
	}
?>