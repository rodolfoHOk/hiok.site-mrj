<?php
 
$nome=$_POST[nome];
$email=$_POST[email];
$assunto=$_POST[assunto];
$mensagem=$_POST[mensagem];
 
mail("hioktec@gmail.com","$assunto","
Nome: $nome
Email: $email
Assunto: $assunto
Mensagem: $mensagem","FROM:$nome<$email>");
 
echo 'Sua Mensagem foi Enviada com Sucesso!  <a href="http://xyz.com.br/contato.htm">Voltar para Site MRJ.</a>' 

?>