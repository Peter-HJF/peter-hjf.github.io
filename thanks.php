    <?php
    #Get values entered by the user in the form (form.html)
    $nome = $_POST['name'];
    $email= $_POST['email'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['message'];

    #Implementation mail() function
    $para = "peter_hjf@hotmail.com"; 

    # Em alternativa podemos configurar o envio do email no formato de uma mensagem uma em HTML
    $mensagem_html = "<html><body>";
    $mensagem_html .= "<p><b>Nome: </b>$nome</p>";
    $mensagem_html .= "<p><b>Email: </b>$email</p>";
    $mensagem_html .= "<p><b>assunto: </b>$assunto</p>";
    $mensagem_html .= "<p><b>Mensagem: </b>$mensagem</p>";
	$mensagem_html .= "</html></body>";


    $headers = "From: pedro.hjfernandes@gmail.com" . "\r\n"; 
    
    $headers.=  "Reply-To: pedro.hjfernandes@gmail.com" . "\r\n"; # When the user responds to this message, the email will be sent to this address
    $headers.=  "MIME-Version: 1.0" . "\r\n"; # This header is used when you send various e-mail information: https://en.wikipedia.org/wiki/MIME
    $headers.=  "Content-type:text/html; charset=UTF-8" . "\r\n"; # Used to define character encoding: https://www.w3.org/International/articles/http-charset/index

    #Implementation sending emails with SMTP authentication with mail function() e PHPMailer
    # Reference: https://github.com/PHPMailer/PHPMailer

    ?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formula Idilica | Contacte-nos</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Twitter-Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" 
	integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/pf_style_sheet.css">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<style type="text/css">
		html,
		body,
		header,
		.view {
		  height: 100%;
		}
	
		@media (max-width: 740px) {
		  html,
		  body,
		  header,
		  .view {
			height: 1000px;
		  }
		}
	
		@media (min-width: 800px) and (max-width: 850px) {
		  html,
		  body,
		  header,
		  .view {
			height: 650px;
		  }
		}
	</style>
</head>
<body>



	<!-- Top Bar -->
    <div class="top-bar">
	<div class="container">

	    <!-- Grid row-->
	    <div class="row d-flex align-items-center">

		    <!-- Grid column -->
            <div class="col-4 text-left">
			    <!--<a class="envol-ic">
					<i class="fas fa-envelope mr-2"></i>info@formulaidilica.com</a>-->
					<a class="tel-ic">
						<i class="fas fa-phone mr-2"></i><a href="tel:00351234567890">(+351)234 567 890</a>
					</a>
		    </div>
		    <!-- Grid column -->

		    <!-- Grid column -->
		    <div class="col-8 text-right pt-1">
				<!-- Facebook -->
				<a class="fb-ic" href="https://www.facebook.com">
					<i class="fab fa-facebook-f mr-4"></i>
			    </a>
			    <!-- Twitter -->
			    <a class="tw-ic" " href="https://www.twitter.com">
					<i class="fab fa-twitter mr-4"></i>
				</a>
				<!-- Google plus g -->
				<a class="tw-ic" " href="https://youtube.com/">
					<i class="fab fa-youtube mr-4"></i>
			    </a>
			    <!--Linkedin -->
			    <a class="li-ic" " href="https://www.linkedin.com">
					<i class="fab fa-linkedin-in mr-4"></i>
			    </a>
			</div>
			<!-- Grid column -->
		
		</div>
		<!-- Grid column -->
	</div>
    </div>
	<!-- End Top Bar -->


	<!-- Navigation Bar -->
    <nav class="navbar bg-light navbar-light navbar-expand-lg">
	   <div class="container">
		<a href="index.html" class="navbar-brand">
			<img src="img/fi_logo.png" alt="Logo" title="Logo">
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarresponsive">
			<span class="navbar-toggler-icon">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarresponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.html" class="nav-link">Início</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">Sobre Nós</a></li>
				<li class="nav-item"><a href="service.html" class="nav-link">Serviços</a></li>
				<li class="nav-item"><a href="news.html" class="nav-link">Notícias</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link active">Contacte-nos</a></li>
			</ul>
		</div>
	   </div>
    </nav>
    <!-- End Navigation Bar-->
    
    <section class="container">
	  <div class="col-12 text-center my-5">
	     <img src="img/fi_logo_3d.png" class="w-25" alt="Logo Image">
	  <?php
        $enviado = mail ($para, $assunto, $mensagem, $headers);
        if (!$enviado) {
        $errorMessage = error_get_last()['message'];
        echo "<h3><strong>Ocorreu um erro ao enviar o seu pedido: $errorMessage</strong></h3>";
        echo "<p>Se o problema persistir, por favor, envie-nos um email para formulaidilica@gmail.com ou contacte-nos através do <a href='tel:968 480 085'></a></p>";
        } else {
        echo "<h2>$nome<br><br>A sua mensagem foi enviada com sucesso!</h2>";
        }
      ?>
    <h3>A nossa equipa vai contactá-lo o mais breve possível.</h3>
    <p><a href="index.html" class="btn btn-success rounded-pill">Voltar ao início &larr;</a></p>
	</div>
    </section>

	<!-- Footer -->
    <footer class="page-footer font-small pt-4">

	<!-- Footer Links -->
	<div class="container text-center text-md-left">
  
	  <!-- Footer links -->
	  <div class="row text-center text-md-left mt-3 pb-3">
  
		<!-- Grid column -->
		<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
		  <img src="img/fi_logo(y&w).png" target=""/>
		  <p class="text-light">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
			consectetur adipisicing elit.</p>
		</div>
		<!-- Grid column -->
  
		<hr class="new w-100 clearfix d-md-none">
  
		<!-- Grid column -->
		<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
		  <h6 class="text-uppercase mb-4 font-weight-bold text-warning">serviços</h6>
		    <p>
			   <a href="service.html"><small>Regeneração</small></a>
		    </p>
		    <p>
			   <a href="service.html"><small>Manutenção</small></a>
		    </p>
		    <p>
			   <a href="service.html"><small>Diagnóstico</small></a>
		    </p>
		    <p>
			   <a href="service.html"><small>Comercialização</small></a>
		    </p>
		</div>
		<!-- Grid column -->
  
		<hr class="new w-100 clearfix d-md-none">
  
		<!-- Grid column -->
		<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
		  <h6 class="text-uppercase mb-4 font-weight-bold text-warning">links Úteis</h6>
		    <p>
			<a href="index.html"><small>Início</small></a>
		      </p>
		    <p>
			  <a href="about.html"><small>Sobre Nós</small></a>
		    </p>
		    <p>
			  <a href="service.html"><small>Serviços</small></a>
		    </p>
		    <p>
			  <a href="blog.html"><small>Blog</small></a>
		    </p>
		</div>
  
		<!-- Grid column -->
		<hr class="new w-100 clearfix d-md-none">
  
		<!-- Grid column -->
		<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
		  <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Contactos</h6>
		  <p class="text-light">
			<i class="fas fa-home mr-3"></i> Portimão, 8500-000, Portugal</p>
		  <p class="text-light">
			<i class="fas fa-envelope mr-3"></i> info@formulaidilica.com</p>
		  <p class="text-light">
			<i class="fas fa-phone mr-3"></i> +0351 234 567 890</p>
		  <p class="text-light">
			<i class="fas fa-print mr-3"></i> +0351 234 567 891</p>
		</div>
		<!-- Grid column -->
  
	  </div>
	  <!-- Footer links -->
  
	  <hr class="new">
  
	  <!-- Grid row -->
	  <div id="socket" class="row d-flex align-items-center">
  
		<!-- Grid column -->
		<div class="col-md-7 col-lg-8">
  
		  <!--Copyright-->
		  <p class="copyright text-center text-md-left text-light">© 2020 Copyright:
			<a href="https://www.w3schools.com/"> PedroFernandes.com</a>
		  </p>
  
		</div>
		<!-- Grid column -->
  
		<!-- Grid column -->
		<div class="col-md-5 col-lg-4 ml-lg-0">
  
		  <!-- Social buttons -->
		  <div class="social_links text-center text-md-right">
			<ul class="list-unstyled list-inline">
			  <li class="list-inline-item">
				<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
			  </li>
			  <li class="list-inline-item">
				<a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
			  </li>
			  <li class="list-inline-item">
				<a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
				</a>
			  </li>
			  <li class="list-inline-item">
				<a href="https://youtube.com/"><i class="fab fa-youtube"></i></a>
			  </li>
			</ul>
		  </div>
  
		</div>
		<!-- Grid column -->
  
	  </div>
	  <!-- Grid row -->
  
	</div>
	<!-- Footer Links -->
  
    </footer>
    <!-- Footer -->


	<!-- Start Socket -->
	<!-- End Socket -->

	<!-- Script Source Files -->

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="js/all.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	
	<!-- End Script Source Files -->
</body>
</html>