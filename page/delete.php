<?php
require('db.php');
$id = filter_input(INPUT_GET, 'user_id', FILTER_SANITIZE_NUMBER_INT);
$seek_users = "DELETE FROM users WHERE user_id='$id'";
$seeking_users= mysqli_query($conn, $seek_users);

if(mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style= 'color:green;'>Usuário apagado com sucesso!!!<p>";
    header('Location: read.php');
} else {
    $_SESSION['msg'] = "<p style= 'color:red;'>ERRO: O usuário não foi apagado com sucesso!!!<p>";
    header('Location: read.php');
}
?>