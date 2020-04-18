<?php
    if(session_destroy()){
        redireciona('login', 'sucess', 2, '<div class="notification is-success">Deslogando...</div>');
    } else{
        echo "Erro ao deslogar.";
    }
?>