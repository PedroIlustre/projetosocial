<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
@media print
{
   input { display: none; }
}

@page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
        padding:5px;
    }


@media screen
{
   input { display: block; }
}
    </style>
    <script type="text/javascript">
    function imprimir() {
        window.print();
    }
    </script>
</head>

<body id="page-top" class="index" style="font-family: Arial">
<!-- nome,
fone,email,
idade,cidade,
objetivo,escolaridade,
aptdoes,passatempo
 -->
 <?php 
 
 print_r($_FILES);die;
 $destino = '../'.$_POST['nome'].'/img/' . $_FILES['arquivo']['"userfile"'];
 $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
 move_uploaded_file( $arquivo_tmp, $destino  );
 
 
 $quebra_nome = explode(' ',$_POST['nome']);

 $nome_formatado = '';
 foreach($quebra_nome as $nome){
     $primeira_letra = substr($nome,0,1);
     $resto_nome = substr($nome,1);
     $nome_formatado .= '<span style="font-size:1.4em">'.$primeira_letra.'</span>'.$resto_nome. ' ';
 }
 ?>
 
<form>
<div id="divSuprema" style="padding:50px">
 <div style="text-align:center"> 
 	<h2><?= strtoupper($nome_formatado)?></h2>
 </div>
<hr/>
 <div style="text-align:center">
    <?= $_POST['fone']?$_POST['fone'].' | ':''?> 
    <?= $_POST['email']?$_POST['email'].' | ':''?> 
    <?= $_POST['idade']?$_POST['idade'].' Anos | ':''?> 
    <?= $_POST['cidade']?ucfirst($_POST['cidade']).' | ':''?> 
    <br><br>
    OBJETIVO: 
    <?= strtoupper($_POST['objetivo'])?> 
    <br> <br>
    
    <b style="font-size:1.3em"> E</b><b>XPERI&Ecirc;NCIA</b> <b style="font-size:1.3em">P</b><b>ROFISSIONAL</b>
    <hr/>
    <br>
    
<!--     [qtde_empresas] => 1 -->
<!--     [nome_empresa0] => CWI -->
<!--     [tempo_empresa0] => 5 anos -->
<!--     [desc_empresa0] -->

<?php for($i=0; $i < $_POST['qtde_empresas'];$i++){ ?>
<div style="text-align:left">
    <b> <?= $_POST["nome_empresa$i"]?></b>
    <b style="float: right"> <?= $_POST["tempo_empresa$i"]?></b>
    <br> <p> <?= $_POST["desc_empresa$i"]?> </p>
    </div>
<?php }?>
    <br>
    <b style="font-size:1.3em"> F</b><b>ORMA&Ccedil;&Atilde;O</b> 
    <b style="font-size:1.3em">A</b><b>CAD&Ecirc;MICA / </b>
    <b style="font-size:1.3em">O</b><b>BSERVA&Ccedil;&Otilde;ES </b>
    <hr/>
</div>
    
<div style="text-align:left">
    <b>Escolaridade:</b> <?= ucfirst($_POST['escolaridade']) ?>
    <br>
    <b>Aptid&otilde;es: </b><?= $_POST['aptidoes'] ?>
    <br>
    <b>Passatempo: </b><?= $_POST['passatempo'] ?>
</div>
<br> <br> 
Foto de Perfil: <?php $_POST["pasta"];?>
$nome_pasta = $_POST["pasta"];
mkdir("pastas/$nome_pasta/");
<center><input type="button" value=" Imprimir " onClick="imprimir()"/></center>
</form>
</div>

</body>
</html>
