<?php
session_start();
require('db.php');
$id = filter_input(INPUT_GET, 'user_id', FILTER_SANITIZE_NUMBER_INT);

$seek_users = "SELECT * FROM users WHERE user_id = '$id'";

$seeking_users = mysqli_query($conn, $seek_users);
$peruse_users = mysqli_fetch_assoc($seeking_users);


if ($_SERVER["REQUEST_METHOD"] == "POST") :

    $sql = "UPDATE users SET 
    user_name = '{$_POST['name']}', 
    user_email = '{$_POST['email']}' , 
    user_password = '{$_POST['password']}', 
    user_ = '{$_POST['author']}'
    WHERE users_id = '{$_POST['id']}';"; 
    
  $conn->query($sql);

endif;



$page_article = <<<HTML

  <h1>Editar informações do livro:</h1>

  <form action="?p=update.php" method="POST">

  <input type="hidden" name="id" value="<?php 
     echo $peruse_users['user_id']; ?>">

    <label>Nome do Usuario:</label>
    <input type="text" name="name" required maxlength="50" placeholder="Nome do livro..." value="<?php 
     echo $peruse_users['users_name']; ?>">
    <br>
    <label>Email:</label>
    <input type="text" name="email" required maxlength="50" placeholder="Gênero do livro..." value="<?php 
     echo $peruse_users['user_email']; ?>">
    <br>
    <label>Senha:</label>
    <input type="text" name="password" placeholder="Preço do livro..." value="<?php 
    echo $peruse_users['user_password']; ?>">
    <br>
    <label>Avatar:</label>
    <input type="text" name="avatar" required maxlength="50" placeholder="Nome do autor do livro..." value=" <?php 
    echo $peruse_users['user_avatar']; ?>">
    <label>Aniversario:</label>
    <input type="text" name="birthday" required maxlength="50" placeholder="Nome do autor do livro..." value=" <?php 
    echo $peruse_users['user_birth']; ?>">
    <br>
    <label>Biografia:</label>
    <input type="text" name="birthday" required maxlength="50" placeholder="Nome do autor do livro..." value=" <?php 
    echo $peruse_users['user_birth']; ?>">
    <br>
    <label>Tipo:</label>
    <input type="text" name="birthday" required maxlength="50" placeholder="Nome do autor do livro..." value=" <?php 
    echo $peruse_users['user_birth']; ?>">
    <button type="submit">Editar</button>

  </form>

HTML;

  ?>