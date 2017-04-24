<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>GvHelper</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Gv Helper</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Usuario" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Senha" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" id="contFirst">
        <h1>BC Rescue Team</h1>
        <p>O grupo foi criado no final da temporada 2016/2017 com o intúito de divulgar treinamentos, prevenções e incentivar atletas de outras áreas a praticar salvamento esportivo.</p>
        <p><a target="_blank" href="https://www.instagram.com/bcrescueteam/" class="btn btn-primary btn-lg" href="#" role="button">Veja mais &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>Treine seus conhecimentos</h2>
          <p>Um simulador de prova de reanimação de afogados. Essa ferramenta foi desenvolvida para auxiliar no processo de aprendizagem dos alunos do curso de guarda-vidas de Balneario Camboriu - SC. Porém, além de uma ferramenta para estudos, é um meio de estar sempre treinando.</p>
          <p><a class="btn btn-default" href="" role="button">Iniciar Simulação &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Conteúdos</h2>
          <p>Aqui você encontra instruções para aprimorar seus conhecimentos. Estão listadas algumas das teorias mais importantes que um guarda-vidas deve saber, como: Reanimação cardiopulmonar, técnicas de resgate com lifebelt e nadadeira, resgate com pranchão, manobras para condução da vitima, instruções com o DEA, etc...</p>
          <p><a class="btn btn-default" href="conteudos" role="button">Leia Agora &raquo;</a></p>
       </div>
      </div>

      <hr>

      <footer>
          <p>&copy; 2017 Gv Helper.     <a target="_blank" href="https://www.instagram.com/bcrescueteam/">Siga no Instagram @BcRescueTeam</a></p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
