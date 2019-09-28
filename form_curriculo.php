<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>CV</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
                                         <link rel="shortcut icon" href="versed.png" >
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <style type="text/css">
    .container input {
      height:50px !important;
      font-size:1.2em !important;
    }
    </style>
	

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <script>
        var anterior = 0;
        var i=0;
        
        function qtdEmpresa(ele){
        	var atual = $(ele).val();
			anterior = anterior == 0 ? 0: anterior;
			if(atual > anterior){
        		$('#empresas').append('<span id="span_'+i+'"> <br>'
        		+ ' Nome Empresa: <input style="width:100px !important; height: 26px !important; font-size:0.7em !important;" type="text" id="nome_empresa'+i+'" name="nome_empresa'+i+'"> <br>'
        		+ ' Periodo: <input style="height: 26px !important; font-size:0.7em !important;" type="text" id="tempo_empresa'+i+'" name="tempo_empresa'+i+'"> <br>'
        		+ ' Descri&ccedil;&atilde;o das Atividades: <textarea rows="" cols="" class="form-control" type="text" name="desc_empresa'+i+'" >'
                + '</textarea > <br>'
        		+ '<br> </span>');
        		i++; 
			}else{
				$('#empresas').find('#span_'+(i-1)).remove();
			console.info(i);
				i--; 
			}
			anterior = atual;
			
        }  
                   

        </script>


</head>

<body id="page-top" class="index" style="font-weight: bolder !important">



    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Bem vindo <?= $_POST['name'];?></h2>
                    <h3 class="section-heading">Preencha os dados abaixo e tenha seu curriculo pronto!</h3>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row" style="width:500px !important; font-size:1.5em !important; margin-left:250px !important">

<form method="post" enctype="multipart/form-data" action="recebeUpload.php">
                   Selecione uma imagem: <input name="arquivo" type="file" />
                   <br />
                   <input type="submit" value="Salvar" />
                </form>
                
            <form action="gera_pdf_cv.php" method="post" target="_blank">
                <!-- MAX_FILE_SIZE deve preceder o campo input -->
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <!-- O Nome do elemento input determina o nome da array $_FILES -->
                Foto de Perfil: <input name="userfile" type="file" />
                
                
                
                
                <div class="col-lg-12">
                                    Nome Completo: <input class="form-control" type="text" name="nome"> <br> 
                                    
                </div>
                <div class="col-lg-12">
                                    Fone contato: <input class="form-control" type="text" name="fone"> <br> 
                </div>
                <div class="col-lg-12">
                                    E-mail: <input class="form-control" type="text" name="email"> <br>
                </div>
                <div class="col-lg-12">
                                   Idade: <input class="form-control" type="text" name="idade"> <br>
                </div>
                <div class="col-lg-12">
                                   Cidade: <input class="form-control" type="text" name="cidade"> <br>
                </div>
                <div class="col-lg-12">
                                   Objetivo: <input class="form-control" type="text" name="objetivo"> <br>
                </div>
                <div class="col-lg-12">
                                   Escolaridade: <input class="form-control" type="text" name="escolaridade"> <br>
                </div>
                <div class="col-lg-12">
                                   Aptid&otilde;es: <textarea rows="" cols="" class="form-control" type="text" name="aptidoes" >
                                    </textarea > <br>
<!--                                     <input class="form-control" type="text" name="aptidoes"> -->
                </div>
                <div class="col-lg-12">
                                   Passatempo: <textarea rows="" cols="" class="form-control" type="text" name="passatempo" >
                                    </textarea >  <br> 
                </div>
                
                <div class="col-lg-12">
                                   J&aacute; trabalhou em quantas empresas? 
                   <input class="l" onchange="qtdEmpresa(this)" type="number" id="qtde_empresas" style="max-length:3 !important" name="qtde_empresas" min="1" max="99" > <br>
                </div>
                <br> <br>
                <div class="col-lg-12" id="empresas" style="font-size:0.9em !important height:25px !important; ">
                </div>
                
                <br> <br>
                <div class="col-lg-12">
                        <div class="row">
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div> <br>  <br>  <br> 
                                <button type="submit" class="btn btn-xl">Gerar</button>
                            </div>
                        </div>
            </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li>Parceiro
                        </li>
                        <li><a target="_blank" href="">Ilustre - Design</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>


</body>

</html>
