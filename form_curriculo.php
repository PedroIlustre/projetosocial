<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Versed | Versátil</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
                                         <link rel="shortcut icon" href="versed.png" >
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
	

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <script>
       
                var v_obj;
                var v_fun;
                     
                /* Máscaras ER */
                function mascara(object,func){
                
                    v_obj = object;
                    v_fun=func;
                    setTimeout(function(){
                        execmascara();
                    },100);
                }
                
                function execmascara(){
                
                    v_obj.value=v_fun(v_obj.value);
                }
                
                function mtel(v){   
                    v=v.toString().replace(/\D/g,"");             //Remove tudo o que não é dígito
                    v=v.toString().replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                    v=v.toString().replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
                    return v;
                }
                function id( el ){
                    return document.getElementById( el );
                }
                window.onload = function(){
                    id('phone').onkeypress = function(){
                        mascara( this, mtel );
                    }
                }
                   /*
        $('#phone').on('keypress',function(){
         /*
        v = v.toString();
                v=v.replace(/\D/g,"");            
                  v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); 
                  v=v.replace(/(\d)(\d{4})$/,"$1-$2");   
                  return v;
            }); 
            */
      
                    
            

        </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
        <script type="text/javascript" src="https://raw.githubusercontent.com/digitalBush/jquery.maskedinput/master/dist/jquery.maskedinput.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">OOLAAA</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


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
            <div class="row">
                <div class="col-lg-12">
                                    Nome Completo: <input class="form-control" type="text" name="">
                </div>
                <div class="col-lg-12">
                                    Nome Completo: <input class="form-control" type="text" name="">
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
    <form action="form_curriculo.php" method="post" target="_blank">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Faça seu currículo</h2>
                    <h3 class="section-subheading text-muted">Currículo rápido e prático</h3>
                    <p class="help-block text-danger">
                    <input type="text" class="form-control text-center" id="name" name="name" style="width:500px; margin-left:310px" placeholder="Seu nome *" required data-validation-required-message="Please enter your name.">
                     </p>
                     <br> 
                     <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Curriculo Rápido</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </form>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Versed 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
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
