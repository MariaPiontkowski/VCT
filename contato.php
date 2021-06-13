<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="conservação,alimentos,viviano cabrera trigo">
  <meta name="description" content="Manual Prático de Higiene e Sanidade nas Unidades de Alimentação e Nutrição | Lições de um Pioneiro"/>
  <title>Instituto Alimentos - Contato</title>
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Shadows+Into+Light+Two|Merienda" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animat/animate.min.css" />
  <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />
  <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css" />
  <link rel="stylesheet" href="css/themes/default/default.css" />
  <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl-carousel/owl.theme.css" />
  <link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">
  
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <link rel="shortcut icon" href="logo/favicon.png" />
</head>
<body>

  <div class='preloader'><div class='loaded'>&nbsp;</div></div>

  <header id="inicial" class="header">
    <div class="main_menu_bg navbar-fixed-top wow slideInDown" data-wow-duration="1s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="single_banner_text wow zoomIn" data-wow-duration="1s">
              <img src="logo/logo.png"/>
            </div>
          </div>
          <div class="nave_menu col-md-9">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">INICIAL</a></li>
              <li><a href="index.html#empresa">EMPRESA</a></li>
              <li>
                <div class="dropdown">
                  SERVIÇOS
                  <div class="dropdown-content main_menu_bg navbar-fixed-top wow">
                    <a href="consultoria.html">CONSULTORIA</a>
                    <br/>
                    <a href="vivianizacao.html">VIVIANIZAÇÃO</a>
                  </div>
                </div>
              </li>
              <li><a href="livros.html">LIVROS</a></li>
              <!-- <li class="hidden"><a href="informacoes.html">INFORMAÇÕES</a></li> -->
              <li class="hidden"><a href="noticias.html">NOTÍCIAS</a></li>
              <li class="active"><a href="contato.php">CONTATO</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          </div>  
        </div><!--End of row -->
        
      </div><!--End of container -->
    </div>
  </header> <!--End of header -->
  
  <section id="banner" class="banner contato">
    <section id="contato" style="top: 20rem;position: relative;height: calc(100vh - 20rem);">
      <div class="container ">
        <div class="row">
          <div class="col-sm-7 col-sm-offset-5 col-xs-12">
            <div class="contact_area wow slideInLeft" data-wow-duration="2s">
              <div class="contact_form_area">
                <div class="alert alert-success alert-dismissable" id="emailok">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    E-mail enviado com sucesso!
                </div>
                <div class="alert alert-danger alert-dismissable" id="emailnok">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Erro ao enviar e-mail! Tente novamente
                </div>

                <form action="" id="formid" method="POST">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                      </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>
                    </div>
                  </div>
                  <br/> 
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
                      </div>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea class="form-control" name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
                      </div>
                    </div>
                    <div class="form_btn_area text-center">
                      <input type="submit" class="btn"/>
                    </div>
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <div id="emailok" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" style="color: green">E-mail enviado com sucesso!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="emailnok" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" style="color: green">Erro ao enviar e-mail! Tente novamente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    
  <section class="rodape" style="position:absolute; bottom:0">
    <p>2019 &copy; Desenvolvido por <a href="http://piontkowski.heliohost.org/" target="_blank">Maria Cecília Piontkowski Alves </a></p>
  </section>
  </section><!-- End of Banner Section -->
  
  
  <!-- STRAT SCROLL TO TOP -->
  
  <div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>
  

  <script type="text/javascript" src="js/jquery/jquery.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/bootstrap/alert.min.js"></script>
  <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/jquery-easing/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/wow/wow.min.js"></script>

</body>
</html>

<?php

if($_POST){

$email		=	$_POST["email"];
$nome		  =	$_POST["nome"];
$cidade		=	$_POST["cidade"];
$telefone	=	$_POST["telefone"];
$mensagem	=	nl2br($_POST["mensagem"]);

$to = "carutorypa@gmail.com";


$data = date('d/m/Y');

$hora = date('H:i');


$mensagem = nl2br($mensagem);


$header_email = "From: <site@instituto.com.br>\nContent-type: text/html\n".
                "Reply-To: $email";

$subjetc = "[VCT] Contato Pelo Site";

$corpo="<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
          <HTML><HEAD>
          <META http-equiv='Content-Type' content='text/html; charset=utf-8'>
          <STYLE>TD {FONT-SIZE: 10pt; FONT-FAMILY: Arial,Verdana; PADDING: 11PX;}</STYLE>
          <BODY bgColor=#ffffff>
            <TABLE cellSpacing='0' cellPadding='3' width=600 border=0 align=center>
              <TBODY>
                <TR>
                  <TD align=middle style='background:#31A68B' colSpan=2>
                  <FONT color=#fff><B>Formulário de Contato</B></FONT>
                  </TD>
                </TR>
              <TR>
                <TD vAlign=top align=right width=150 bgColor=#fff><B>Nome</B></TD>
                <TD width=450 bgColor=#fff>$nome</TD>
              </TR>
          	  <TR>
                <TD vAlign=top align=right width=150 bgColor=#fff><B>Telefone</B></TD>
                <TD width=450 bgColor=#fff>$telefone</TD>
              </TR>
              <TR>
                <TD vAlign=top align=right width=150 bgColor=#fff><B>Email</B></TD>
                <TD width=450 bgColor=#fff><A href='mailto:$email' target=_blank>$email</A></TD>
              </TR>
          	  <TR>
                <TD vAlign=top align=right width=150 bgColor=#fff><B>Cidade</B></TD>
                <TD width=450 bgColor=#fff>$cidade</TD>
              </TR>
          	  <TR>
                <TD vAlign=top align=right width=150 bgColor=#fff><B>Mensagem</B></TD>
                <TD width=450 bgColor=#fff>$mensagem</TD>
              </TR>
              <TR>
               <TD align=middle style='background:#31A68B' colSpan=2>
                  <FONT color=#fff>Mensagem enviada em <B>$data</B> às <B>$hora</B></FONT>
                </TD>
              </TR>
          </TABLE>
        </BODY>
      </HTML>";

  if(mail($to, $subjetc, $corpo, $header_email)){
    ?><script>$(function(){ $("#emailok").show();$("#emailnok").hide();});</script><?php
  }else{
    ?><script>$(function(){ $("#emailnok").show();$("#emailok").hide();});</script><?php
  }

}else{
  ?><script>
    $(function(){
       $("#emailok").hide();
       $("#emailnok").hide();
    });
  </script><?php
}
