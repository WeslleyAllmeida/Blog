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
<h1 class="title">Olá, <?php echo $_SESSION['usuarioNome']; ?>! </h1>
</div>