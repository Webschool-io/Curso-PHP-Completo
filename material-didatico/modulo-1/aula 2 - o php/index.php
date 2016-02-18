<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curso PHP - AULA 2</title>
</head>
<body>
  Vamos contar até 10?<BR>
  <?php
  //aqui o interpretador do PHP vai começar trabalhar! ;)

  //laço de repetição de 1 até 10
  for($x=1; $x<11; ++$x){
    //imprime o valor da variavel $x
    echo $x."<BR>";
  }
  
  //echo "Ola MUNDO! ;D";
  /*
  Essa parte está comentada! O interpretador não irá fazer nada que esteja aqui dentro
  
  ;D Show né?

  */
  ?>
  <BR>
  Mais código HTML!
  <BR><BR><BR>
  <?php
    print 'Tudo funcionando perfeitamente!';
  ?>
</body>
</html>