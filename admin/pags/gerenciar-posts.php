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
<div class="column is-8">
    <div id="form-publicar">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Data</th>
                <th>Gerenciar</th>
            </tr>
            <?php
                $query = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
                $query->execute();
                $get = $query->get_result();
                $total = $get->num_rows;
                if($total > 0){
                    while($dados = $get->fetch_array()){            
            ?>
            <tr>
            <td><?php echo $dados['id'];?></td>
            <td><?php echo $dados['titulo'];?></td>
            <td><?php echo $dados['data'];?></td>
            <td>
            <a href="../p/<?php echo $dados['id'];?>">
            <button class="button is-primary">Ver Publicação</button>
            </a>
            <a href="../admin/editar-post/<?php echo $dados['id'];?>">
            <button class="button is-warning">Editar</button>
            </a>
            <a href="../admin/deletar-post/<?php echo $dados['id'];?>">
            <button class="button is-danger">Excluir</button>
            </a>
            </td>
            </tr>
                    <?php }}?>
        </table>
    </div>
</div>