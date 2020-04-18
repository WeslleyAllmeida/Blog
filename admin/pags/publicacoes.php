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
    <li><a>Publicações</a></li>
    <li><a href="../admin/inicio">Inicio</a></li>
    <li><a href="../admin/gerenciar-posts">Gerenciar Publicações</a></li>
    <li><a href="../admin/perfil">Editar Perfil</a></li>
    <li><a href="../admin/sair">Sair</a></li>
  </ul>
</aside>
</div>
<?php }?>
<div class="column is-8">
<div class='post-container'>
      <div class='post'>
        <p class='date'>21 DE DEZEMBRO DE 2022<p>
        <h1>Primeira Publicação do Blog</h1>
        </br>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-2">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="../images/4.jpg" width="128" heigth="128">
                </figure>
             </div>
             <div class="column is-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat ratione in maiores eaque. Corporis dolorem voluptates cupiditate consectetur doloribus necessitatibus deserunt voluptatem quae, mollitia dolor est, temporibus reprehenderit suscipit?
             </div>
         </div> 
        </div>
      </div>
      <hr>
      <div class='post'>
        <p class='date'>21 DE DEZEMBRO DE 2022<p>
        <h1>Primeira Publicação do Blog</h1>
        </br>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-2">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="../images/2.jpg">
                </figure>
             </div>
             <div class="column is-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat ratione in maiores eaque. Corporis dolorem voluptates cupiditate consectetur doloribus necessitatibus deserunt voluptatem quae, mollitia dolor est, temporibus reprehenderit suscipit?
             </div>
         </div> 
        </div>
      </div>
      <hr>
      <div class='post'>
        <p class='date'>21 DE DEZEMBRO DE 2022<p>
        <h1>Primeira Publicação do Blog</h1>
        </br>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-2">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="../images/3.jpeg">
                </figure>
             </div>
             <div class="column is-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat ratione in maiores eaque. Corporis dolorem voluptates cupiditate consectetur doloribus necessitatibus deserunt voluptatem quae, mollitia dolor est, temporibus reprehenderit suscipit?
             </div>
         </div> 
        </div>
      </div>
      <hr>
      <div class='post'>
        <p class='date'>21 DE DEZEMBRO DE 2022<p>
        <h1>Primeira Publicação do Blog</h1>
        </br>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-2">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="../images/4.jpg">
                </figure>
             </div>
             <div class="column is-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat ratione in maiores eaque. Corporis dolorem voluptates cupiditate consectetur doloribus necessitatibus deserunt voluptatem quae, mollitia dolor est, temporibus reprehenderit suscipit?
             </div>
         </div> 
        </div>
      </div>
      <hr>
      <div class='post'>
        <p class='date'>21 DE DEZEMBRO DE 2022<p>
        <h1>Primeira Publicação do Blog</h1>
        </br>
        <div class='post-content'>
         <div class="columns">
             <div class="column is-2">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="../images/2.jpg">
                </figure>
             </div>
             <div class="column is-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugiat ratione in maiores eaque. Corporis dolorem voluptates cupiditate consectetur doloribus necessitatibus deserunt voluptatem quae, mollitia dolor est, temporibus reprehenderit suscipit?
             </div>
         </div> 
        </div>
      </div>
      <hr>  
    </div>
</div>
</div>
<?php 
    
?>