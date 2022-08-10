<?php

/**
 * about.php
 * Página 'Sobre' carregada pelo link '/?p=about'.
 **/

// Inicializa variáveis:
$page_title = 'Sobre';
$page_content = <<<HTML

<h2>Sobre...</h2>

<div class="atention">
<h4>ATENÇÃO!</h4>
<blockquote><em>Este é um aplicativo experimental, para fins didáticos. nunca deve ser usado da forma em que está, em produção, mas pode servir de base para outros aplicativos mais complexos.</em></blockquote>
</div>

<h3>CRUD</h3>
<p>CRUD são as quatro operações básicas utilizadas em bases de dados relacionais fornecidas aos usuários do sistema:
<ul>
    <li>C → Create → Criação / inserção de dados;</li>
    <li>R → Read → Leitura / Recuperação dos dados;</li>
    <li>U → Update → Atualização dos dados;</li>
    <li>D → Delete → Eliminação dos dados.</li>
</ul>
<p>Outros acrônimos podem ser usados para definir as mesmas operações:</p>
<ul>
    <li>ABCD: Add, Browse, Change and Delete;</li>
    <li>BREAD: Browse, Read, Edit, Add and Delete;</li>
    <li>VADE: View, Add, Delete, Edit.</li>
</ul>
<p><a href="https://pt.wikipedia.org/wiki/CRUD" target="_blank">Clique aqui</a> para saber mais...</p>

<br>
<h3>CRUD Usuários</h3>
<div class="big-logo">&#128128;<small>CRUD Usuários</small></div>
<p>Este é um aplicativo experimental e didático que simula algumas operações de gestão administrativa de usuários em um aplicativo Web tradicional.</p>
<p>As operações básicas para um administrador cadastrar, listar, editar e apagar um usuário pode ser vistas aqui.</p>

<br>
<h3>Plataformas</h3>
<h4>Front-end</h4>
<dd>HTML5, CSS3 e um pouquinho de JavaScript.</dd>
<h4>Back-end</h4>
<dd>PHP7+ e MySQL/MariaDB.</dd>
<h4>Outros recursos</h4>
<dd>Font Awesome (Biblioteca de glyphicons) → <a href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a>.</dd>

<br>
<h3>Autor</h3>
<p>André Luferat</p>
<ul>
    <li><a href="https://github.com/Luferat" target="_blank">GitHub</a></li>
</ul>

<br>
<h3>Colabore</h3>
<p>"Clone", "forke", envie suas "ishues" e contribua pelo repositório original no GitHub:</p>
<ul>
    <li><a href="https://github.com/Luferat/Atividade_PHP_include">Repositório oficial</a></li>
</ul>

<br>
<h3>Licenciamento, permissões e políticas de uso</h3>

<h4>MIT License (original)</h4>
<p><em>Copyright (c) 2022 André Luferat</em></p>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
<blockquote>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</blockquote>
<blockquote>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</blockquote>

<h4>Licença MIT (pt-BR)</h4>
<blockquote><em>Esta é uma tradução livre, apenas para consulta e não substitui a versão original acima, em inglês.</em></blockquote>
<p><em>Copyright (c) 2022 André Luferat</em></p>
<p>É concedida permissão, gratuitamente, a qualquer pessoa que obtenha uma cópia deste software e arquivos de documentação associados (o "Software"), para lidar com o Software sem restrição, incluindo, sem limitação, os direitos de usar, copiar, modificar, mesclar, publicar, distribuir, sublicenciar e/ou vender cópias do Software, e para permitir que as pessoas a quem o Software é equipado para tal, nas seguintes condições:</p>
<blockquote>O aviso de direitos autorais acima e este aviso de permissão devem ser incluídos em todas os cópias ou partes substanciais do Software.</blockquote>
<blockquote>O SOFTWARE É FORNECIDO "COMO ESTÁ", SEM GARANTIA DE QUALQUER TIPO, EXPRESSA OU IMPLÍCITA, INCLUINDO, MAS NÃO SE LIMITANDO ÀS GARANTIAS DE COMERCIALIZAÇÃO, ADEQUAÇÃO A UM DETERMINADO FIM E NÃO VIOLAÇÃO. EM NENHUM CASO OS AUTORES OU DETENTORES DE DIREITOS AUTORAIS SERÃO RESPONSÁVEIS POR QUALQUER REIVINDICAÇÃO, DANOS OU OUTRAS RESPONSABILIDADES, SEJA EM UMA AÇÃO DE CONTRATO, ATO ILÍCITO OU DE OUTRA FORMA, DECORRENTE DE, FORA OU EM CONEXÃO COM O SOFTWARE OU O USO OU OUTRAS NEGOCIAÇÕES NOS PROGRAMAS.</blockquote>

<h4>Resumindo</h4>
<p>Você pode fazer o que quiser com este software, mas deve assumir todos os os riscos inerentes, todos mesmo!</p>

HTML;
