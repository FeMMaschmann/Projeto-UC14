<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fernando Mottin Maschmann">
    <meta name="description" content="Site feito para trabalho do senac">
    <meta name="keywords" content="HTML, CSS, JAVASCRIPT">
    <title>Esponjas - Galeria</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="lytebox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <?php
      include_once 'menu.php';
    ?>
    <div class="container">
      <h2 class="meio">Galeria</h2>
			<section class="fotos flex">
				<div class="imagem">
					<a href="img/e1.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponjas parecidas com teia de aranha"><img class="img" src="img/e1.jpg" /></a>
				</div>
				<div class="imagem">
					<a href="img/e2.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponja parecido com rosto"><img class="img" src="img/e2.jpg" /></a>
				</div>
				<div class="imagem">
					<a href="img/e3.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponja cérebro"><img class="img" src="img/e3.jpg" /></a>
				</div>
			</section>
			<section class="fotos flex">
				<div class="imagem">
					<a href="img/e4.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Colônia de esponjas"><img class="img" src="img/e4.jpg" /></a>
				</div>
				<div class="imagem">
					<a href="img/e5.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponjas amarelas"><img class="img" src="img/e5.jpg" /></a>
				</div>
				<div class="imagem">
					<a href="img/e6.png" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponjas vistas de cima"><img class="img" src="img/e6.png" /></a>
				</div>
			</section>
			<section class="fotos flex">
				<div class="imagem">
					<a href="img/e7.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponjas e corais"><img class="img" src="img/e7.jpg" /></a>
				</div>
				<div class="imagem">
					<a href="img/e8.jpg" class="lytebox" data-lyte-options="group:esponjas" data-title="Grupo de esponjas"><img class="img" src="img/e8.jpg" /></a>
				</div>
				<div class="imagem">
					<a href="img/e9.png" class="lytebox" data-lyte-options="group:esponjas" data-title="Esponjas laranjas"><img class="img" src="img/e9.png" /></a>
				</div>
			</section>
    </div>
    <?php
      include_once 'footer.php';
    ?>
  </body>
</html>
