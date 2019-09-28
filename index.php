<?php require_once 'config.php'; ?>

<?php include(HEADER_TEMPLATE); ?>

    <h1>Projetos</h1>
    <hr />
    <div class="row">
     <?php                   
      $path = "projetos/";
      $diretorio = dir($path);
      while($arquivo = $diretorio -> read()){
              
      if(preg_match('/.../',$arquivo)){
          echo "<div class='col-xs-6 col-sm-3 col-md-2'>      
                    <a href='".$path.$arquivo."' class='btn btn-default' target='_blank'>
                      <div class='row'>
                          <div class='col-xs-12 text-center'>
                              <i class='fa  fa-5x'>
                                  <img src='".$path.$arquivo."/img/".$arquivo.".png"."' style='max-width:200px;max-height:100px;width: auto;height: auto;border-radius: 15px;'>
                              </i>
                          </div>
                          <div class='col-xs-12 text-center'>
                              <p><b>".$arquivo."</b></p>
                          </div>
                      </div>
                    </a>
                </div>";
         }  
      }
      $diretorio -> close();
      ?>
    </div>              


<?php include(FOOTER_TEMPLATE); ?>