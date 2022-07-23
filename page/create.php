<?php

require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") :

  $sql = "INSERT INTO users (user_name, user_email,
user_password, user_avatar, user_birth, user_bio) 
VALUES ('{$_POST['name']}','{$_POST['email']}', 
'{$_POST['password']}', '{$_POST['birthday']}', '{$_POST['bio']}', '{$_POST['type']}');
";

$conn->query($sql);

endif;

$page_article = <<<HTML

<h1>Insira as suas informações do seu perfil:</h1>

  <form action="?=create.php" method="post">

    <label>Nome de suario:</label>
    <input type="text" name="name" required maxlength="50" placeholder="Leandro de Vinicius">
    <br>
    <label>Email:</label>
    <input type="email" name="email" required maxlength="50" placeholder="carol.tetec@gmail.com">
    <br>
    <label>Senha:</label>
    <input type="password" name="password">
    <br>
    <label>Aniversario:</label>
    <input Type="date" name="birhtday" required maxlength="50" placeholder="28/11/2001...">
    <br>
    <label>Biografia:</label>
    <input Type="text" name="bio" required maxlength="50" placeholder="Fale um pouco sobre você...">
    <br>
    <label>Tipo</label>
    <select name="type">
  <option value="admin">Admin</option>
  <option value="moderator">Moderador</option>
  <option value="Usuario">Usuário</option>
</select>
    <br>
    <button type="submit">enviar</button>

HTML;

$page_title = 'cadastro...';
?>