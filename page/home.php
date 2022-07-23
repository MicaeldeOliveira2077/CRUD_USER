<?php

$page_article = "<h2>Usuários do Aplicativo</h2>";

// Obtém a lista de ususários não apagados:
$sql = "SELECT id, name, email FROM users WHERE status != 'deleted' ORDER BY date DESC;";
$res = $conn->query($sql);

// Conta usuários obtidos:
//$total = $res->num_rows;

// Não tem registros?
if ($total > 0) {

    // Cabeçalho da tabela:
    $page_article .= <<<HTML

<table class="user-list">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Opções</th>
    </tr>

HTML;

    // Loop dos registros:
    while ($user = $res->fetch_assoc()) :

        $page_article .= <<<HTML

<tr>
    <td>{$user['id']}</td>
    <td>{$user['name']}</td>
    <td>{$user['email']}</td>
    <td>
        <a href="/p=view&id={$user['id']}">Ver</a> |
        <a href="/p=edit&id={$user['id']}">Editar</a> |
        <a href="/p=delete&id={$user['id']}">Apagar</a>
    </td>
</tr>

HTML;

    endwhile;

    // Fechamento da tabela;
    $page_article .= <<<HTML
    
</table>
<p>Total de ${total} usuários cadastrados.</p>

HTML;

} else {

    $page_article .= "<p>Nenhum usuário foi encontrado.</p>";
}
