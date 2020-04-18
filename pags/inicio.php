<?php 
    $sql = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
    $sql->execute();
    $get = $sql->get_result();
    $total = $get->num_rows;

    if($total <= 0){
        echo "<div class='notification is-warning>Nenhuma publicação encontrada!</div>'";
    }else{
        while($dados = $get->fetch_array()){
        $idPostador = $dados['id_postador'];
        $query = $con->prepare("SELECT * FROM usuarios WHERE id = ?");
        $query->bind_param("s", $idPostador);
        $query->execute();
        $dadosU = $query->get_result()->fetch_assoc();
?>
    <div class='post-container'>
      <div class='post'>
        
        <i class="fas fa-user-circle"></i> <?php echo $dadosU['nome'] ?> <br>
        <i class="far fa-clock"></i> <?php echo $dados['data'] ?> -
        <i class="far fa-eye"></i> <?php echo $dados['visitas'] ?> - 
        <i class="far fa-thumbs-up"></i> <?php echo $dados['curtidas'] ?>
        <br> <br>
        <h1 class="title is-5"><?php echo $dados['titulo'];?></h1>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-2">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="<?php echo $dados['imagem'];?>" width="128" heigth="128">
                </figure>
             </div>
             <div class="column is-10">
                <?php echo substr_replace($dados['postagem'], (strlen($dados['postagem']) > 500 ? '...' : ''), 500); ?>
             </div>
         </div><a href="p/<?php echo $dados['id'];?>"> <button class="button is-info">Ver mais</button> </a>
        </div>
      </div>
      
      <hr>
      </div>
<?php }}?>