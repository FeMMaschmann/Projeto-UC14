<?php
  if(isset($_POST['submit'])){
   $usuario  = $_POST['usuario'];
   $email  = $_POST['email'];
   $senha = $_POST['senha'];
   $senha2 = $_POST['senha2'];

  if($usuario == '' || $senha == '' || $email == '' || $senha2 == ''){
    $msg = "Atenção! Todos os campos devem ser preenchidos!";
  } else {
    header("Location: index.php?msg=Cadastro efetuado com sucesso!");
  }
 }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fernando Mottin Maschmann">
    <meta name="description" content="Site feito para trabalho do senac">
    <meta name="keywords" content="HTML, CSS, JAVASCRIPT">
    <title>Esponjas - Cadastro</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include_once 'menu.php';
    ?>
    <div class="container">
      <form class="form" action="cadastrar.php" method="POST">
        <input type="text" name="usuario" placeholder="Digite seu usuario">
        <input type="email" name="email" placeholder="Digite seu e-mail">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <input type="password" name="senha2" placeholder="Repita sua senha">
        <input type="submit" class="botao" name="submit" value="Cadastrar">
      </form>
    </div>
    <?php
      include_once 'footer.php';
    ?>

    <?php
      if (isset($msg)) {
        echo "<div id='msg'>$msg</div>";
      }
    ?>
  </body>
</html>
