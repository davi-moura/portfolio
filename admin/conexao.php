<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'bd_estudos');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD)  or die ('Não foi possível conectar ao bd');