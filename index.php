<?php
require('db.php');

if (isset($_GET['p'])) $page = trim(strtolower($_GET['p']));
else $page = 'home';

$site_name = "Castrando";
$site_slogan = "pesonalize seu perfil";

$page_title = $site_slogan;
$page_article = '';

switch ($page):
 
    case 'create':
        require('page/create.php');
        break;
      
    case 'home':
        require('page/home.php');
        break;

    case 'edit':
        require('page/edit.php');
        break;

    case 'delete':
        require('page/delete.php');
        break;

endswitch;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name . ' .:. ' . $page_title; ?></title>
</head>

<body>

    <div class="wrap">

        <header>
            <h1><?php echo $site_name ?><small><?php echo $site_slogan ?></small></h1>
        </header>

        <nav>

            <a href="/">Início</a>
            <a href="/?p=home">Listar</a>
            <a href="/?p=create">Cadastrar</a>
            <a href="/?p=edit">Editar</a>

        </nav>

        <main>

            <article><?php echo $page_article; ?></article>


        </main>

        <footer> &copy; 2022 Atividade 11 </footer>

    </div>

</body>

</html>
