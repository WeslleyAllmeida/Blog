<?php 
    $idPost = addslashes($explode['1']);
    $sql = $con->prepare("SELECT * FROM posts WHERE id = ?");
    $sql->bind_param("s",$idPost);
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
        atualizaVisitas($con, $dados['id'], $dados['visitas']);
?>
    <div class='post-container'>
      <div class='post'>
        
        <i class="fas fa-user-circle"></i> <?php echo $dadosU['nome'] ?> <br>
        <i class="far fa-clock"></i> <?php echo $dados['data'] ?> -
        <i class="far fa-eye"></i> <?php echo $dados['visitas'] ?> - 
        <i class="far fa-thumbs-up" onclick="location.href='curtir/<?php echo $dados['id'] ?>/<?php echo $dados['curtidas'] ?>'"></i> <?php echo $dados['curtidas'] ?>
        <br> <br>
        <h1 class="title is-5"><?php echo $dados['titulo'];?></h1>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-10">
                <?php echo $dados['postagem']; ?> <br><br>
                <img src="<?php echo $dados['imagem'];?>">
             </div>
         </div><a href="../blog"> <button class="button is-info">voltar</button> </a>
        </div>
      </div>
      
      <hr>
      </div>
<?php }}?>