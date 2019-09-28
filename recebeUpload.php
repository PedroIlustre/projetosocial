<?php 
$_POST['nome'] = 'joao_carlos_ferreira_f';
print_r($_FILES);die;
$destino = 'projetos/'.$_POST['nome'].'/img/' . $_FILES['arquivo']['name'];

mkdir('projetos/'.$_POST['nome']);
mkdir('projetos/'.$_POST['nome'].'/img');

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);