<?php
  if(isset($_POST['submitlogin'])){
   $usuariologin  = $_POST['usuariologin'];
   $senhalogin = $_POST['senhalogin'];

  if($usuariologin == '' || $senhalogin == ''){
    $msg = "Atenção! Todos os campos devem ser preenchidos corretamente!";
  } else {
    header("Location: index.php?msg=Logado efetuado com sucesso!");
  }
 }
?>
<div class="top">
  <nav class="menu flex">
    <a class="logo" href="index.php"><img src="img/logo.png"></a>
    <a class="toggle" href="#">&#9776;</a>
    <ul id="links">
      <li><a href="index.php">HOME</a></li>
      <li><a href="sobre.php">SOBRE</a></li>
      <li><a href="galeria.php">GALERIA</a></li>
      <li><a href="biologia.php">BIOLOGIA</a></li>
      <li><a href="cadastrar.php">INCREVA-SE</a></li>
      <li><a href="#janela" rel="modal">LOGIN</a></li>
    </ul>
  </nav>
</div>

<!-- Janela modal -->
<div class="window" id="janela">
  <h1>Logar</h1>
  <a href="#" id="fechar" class="fechar">
    <img src="img/fechar.png">
  </a>

  <form class="loginform" action="index.php" method="POST">
    <input type="text" name="usuariologin" placeholder="Digite seu usuario">
    <input type="password" name="senhalogin" placeholder="Digite sua senha">
    <input type="submit" class="botao" name="submitlogin" value="Logar">
  </form>
  <h6>Ainda não cadastrado?<a href="cadastrar.php">Cadastre-se</a></h6>
</div>
<!-- Fim da Janela modal -->

<!-- Mascara que escurece a tela -->
<div id="mascara">

</div>

<?php
  if (isset($msg)) {
    echo "<div id='msg'>$msg</div>";
  }
?>
