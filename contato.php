<?php
header('Content-Type: text/html; charset=UTF-8');

if($_POST){

$email		=	$_POST["email"];
$nome		  =	$_POST["nome"];
$cidade		=	$_POST["cidade"];
$telefone	=	$_POST["telefone"];
$mensagem	=	nl2br($_POST["mensagem"]);

//$to = "maria.piontkowski@hotmail.com";
$to = "carutorypa@gmail.com";


$data = date('d/m/Y');

$hora = date('H:i');


$mensagem = nl2br($mensagem);


$header_email = "From: <site@instituto.com.br>\nContent-type: text/html\n".
                "Reply-To: $email";

$subjetc = "[VTC] Contato Pelo Site";

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
                <TD vAlign=top align=right width=150 bgColor=#cccccc><B>Mensagem</B></TD>
                <TD width=450 bgColor=#e0e0e0>$mensagem</TD>
              </TR>
              <TR>
               <TD align=middle style='background:#31A68B' colSpan=2>
                  <FONT color=#fff>Mensagem enviada em <B>$data</B> às <B>$hora</B></FONT>
                </TD>
              </TR>
          </TABLE>
        </BODY>
      </HTML>";

  mail($to, $subjetc, $corpo, $header_email);

  header("Location:contato.html");

}
