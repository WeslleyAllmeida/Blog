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
    <li><a href="../admin/inicio">Inicio</a></li>
    <li><a href="../admin/publicar">Publicar</a></li>
    <li><a href="../admin/gerenciar-posts">Gerenciar Publicações</a></li>
    <li><a href="../admin/perfil">Editar Perfil</a></li>
    <li><a href="../admin/sair">Sair</a></li>
  </ul>
</aside>
</div>
<?php }?>
<div class="column is-8">
<form method="POST" enctype="multipart/form-data" id="form-publicar">
    
    <input class="input" name="titulo" type="text" placeholder="Titulo*"> <br> <br>
    
    <div class="file has-name is-fullwidth">
  <label class="file-label">
    <input class="file-input" name="userfile" type="file" name="resume">
    <span class="file-cta">
      
      <span class="file-label">
        Escolha o arquivo
      </span>
  </label>
</div>
<br>
<br>

<textarea class="textarea" name="post" placeholder="Descrição*"></textarea>
<br>
<button class="button is-info is-outlined">Publicar</button>
<input type="hidden" name="env" value="post">
</form>
</div>
</div>
<?php
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['titulo'] && $_POST['post']){
			$idUser = $_SESSION['usuarioID'];
			$titulo = $_POST['titulo'];
			$post = $_POST['post'];

			$uploaddir = '../images/uploads/';
			$uploaddirN = 'images/uploads/';
			$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
			$uploadfileN = $uploaddirN.basename($_FILES['userfile']['name']);


			$query = $con->prepare("INSERT INTO posts (id_postador, titulo, data, postagem, imagem) VALUES (?, ?, ?, ?, ?)");
			$query->bind_param("sssss", $idUser, $titulo, $data, $post, $uploadfileN);
			$query->execute();

			if($query->affected_rows > 0 && move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
				echo "<div class='notification is-success'>Publicação enviada com sucesso!</div>";
			}else{
				echo "<div class='notification is-warnig'>Erro ao enviar a publicação!</div>";
			}


		}else{
			echo "<div class='notification is-danger'>Preencha todos os campos</div>";
		}
	}
?>