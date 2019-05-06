<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fernando Mottin Maschmann">
    <meta name="description" content="Site feito para trabalho do senac">
    <meta name="keywords" content="HTML, CSS, JAVASCRIPT">
    <title>Esponjas</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      include_once 'menu.php';
    ?>
    <div class="container">
      <header>
        <img class="img" src="img/header.png">
      </header>
      <h2 class="meio">&#8600; Por que esponjas são proveitosas &#8601;</h2>
      <section class="flex">
        <article class="f1">
          <p>São demais!!</p>
        </article>
        <article class="f1">
          <p>Bob esponja!!</p>
        </article>
        <article class="f1">
          <p>Utilidades diversas!!</p>
        </article>
      </section>
      <h2 class="meio2">&#8600; As esponjas tradicionais e que tanto usamos &#8601;</h2>
      <section class="flex2">
        <img src="img/esponja1.png">
        <img class="none" src="img/esponja2.png">
      </section>
    </div>
    <?php
      include_once 'footer.php';
    ?>

    <?php
      if (isset($_GET['msg'])) {
        echo "<div id='msg'>".$_GET['msg']."</div>";
      }
    ?>

  </body>
</html>
