<!DOCTYPE html>
<html lang="pt">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Espaço Verde Itaperuna</title>
   <meta name="keywords" content="espaco,verde,lazer,festa,aniversarios,casamentos,eventos">
   <meta name="description" content="Espaço Verde Itaperuna">
   <!-- Favicon  -->
   <link rel="icon" href="images/favicon.png">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="#">Início</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#contact">Contato</a>
                           </li>
                        </ul>
                        <div class="sign_btn"><a target="_blank" href="https://api.whatsapp.com/send?phone=5522992523049&text=Ol%C3%A1%2C+gostaria+de+mais+informa%C3%A7%C3%B5es+sobre+o+Espa%C3%A7o+Verde.">Agendar
                              uma visita</a></div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="text-bg">
                  <div class="padding_lert">
                     <div class="logo" style="display: contents;">
                        <img style="width: 180px;" src="images/espacoverde.png" />
                        <br><br>
                     </div>
                     <h1>CONHEÇA O ESPAÇO VERDE</h1>
                     <h2 class="text-white">Todo grande acontecimento merece ser celebrado em lugar especial.</h2>
                     <p>Locação para eventos, confraternizações, festas, casamentos…</p>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- form_lebal -->
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="form_book">
                  <div class="row">
                     <div class="col-md-3">
                        <label class="date">Data</label>
                        <input class="book_n" type="date" id="data">
                     </div>
                     <div class="col-md-3">
                        <label class="date">Hora de início</label>
                        <input class="book_n" placeholder="Ex. 12:00" type="type" id="hora">
                     </div>
                     <div class="col-md-3">
                        <label class="date">Evento</label>
                        <input class="book_n" placeholder="Ex. Aniversário, casamento..." type="type" id="evento">
                     </div>
                     <div class="col-md-3 text-center">
                        <button onclick="verdisponibilidade();" class="book_btn">Ver disponibilidade</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end form_lebal -->
   <!-- choose  section -->
   <div class="choose" style="margin-bottom: 100px;">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="choose_box">
                  <div class="titlepage">
                     <h2>Confira todas as áreas do nosso espaço!</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-md-4">
               <div class="choose_box" style="background: #fff; padding: 15px; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%); border-radius: 15px; margin-top:40px;">
                  <div class="img_box">
                     <figure><img src="images/piscina.jpg" style="border-radius: 10px;"></figure>
                  </div>
                  <div class="titlepage" style="padding-bottom: 0;">
                     <h2 style="font-size:25px; margin-top: 15px;"><span class="text_norlam">Área com piscina</span>
                     </h2>
                     <p>Contamos com uma área com uma enorme piscina, para atender o seu evento.</p>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="choose_box" style="background: #fff; padding: 15px; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%); border-radius: 15px; margin-top:40px;">
                  <div class="img_box">
                     <figure><img src="images/churrasqueira.jpg" style="border-radius: 10px;"></figure>
                  </div>
                  <div class="titlepage" style="padding-bottom: 0;">
                     <h2 style="font-size:25px; margin-top: 15px;"><span class="text_norlam">Churrasqueira</span>
                     </h2>
                     <p>Nada melhor que reunir a família e os amigos para um churrasco, venha aproveitar.</p>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="choose_box" style="background: #fff; padding: 15px; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%); border-radius: 15px; margin-top:40px;">
                  <div class="img_box">
                     <figure><img src="images/salaodefestas.jpg" style="border-radius: 10px;"></figure>
                  </div>
                  <div class="titlepage" style="padding-bottom: 0;">
                     <h2 style="font-size:25px; margin-top: 15px;"><span class="text_norlam">Salão de festas</span>
                     </h2>
                     <p>Um salão totalmente fechado com vista para a piscina, contando com três aparelhos de ar condicionado.</p>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="choose_box" style="background: #fff; padding: 15px; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%); border-radius: 15px; margin-top:40px;">
                  <div class="img_box">
                     <figure><img src="images/campo.jpg" style="border-radius: 10px;"></figure>
                  </div>
                  <div class="titlepage" style="padding-bottom: 0;">
                     <h2 style="font-size:25px; margin-top: 15px;"><span class="text_norlam">Campo de futebol</span>
                     </h2>
                     <p>Divirta-se com seus amigos em nosso campinho.</p>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="choose_box" style="background: #fff; padding: 15px; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%); border-radius: 15px; margin-top:40px;">
                  <div class="img_box">
                     <figure><img src="images/areaverde.jpg" style="border-radius: 10px;"></figure>
                  </div>
                  <div class="titlepage" style="padding-bottom: 0;">
                     <h2 style="font-size:25px; margin-top: 15px;"><span class="text_norlam">Área verde</span>
                     </h2>
                     <p>Ter um refúgio cercado pelo verde diminui o estresse do dia a dia.</p>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- end choose  section -->

   <!-- choose  section -->
   <div class="choose" style="margin-bottom: 100px;">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="choose_box">
                  <div class="titlepage">
                     <h2>Veja todas as fotos</h2>
                  </div>
               </div>
            </div>
         </div>
         <center>
            <div>
               <div class="choose_box" style="box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%); border-radius: 15px; margin-top:40px;">




                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <?php $e = -1;
                        while (++$e < 50) { ?>
                           <li data-target="#myCarousel" data-slide-to="<?php echo $e; ?>" class="<?php if ($e == 0) {
                                                                                                      echo "active";
                                                                                                   } ?>"></li>
                        <?php } ?>
                     </ol>
                     <div class="carousel-inner">
                        <?php $i = -1;
                        while (++$i < 50) { ?>
                           <div class="carousel-item <?php if ($i == 0) {
                                                         echo "active";
                                                      } ?>">
                              <div class="container">
                                 <div class="carousel-caption">
                                    <div class="row">
                                       <div class="img_box">
                                          <figure><img src="images/slide/<?php echo $i; ?>.jpg" style="border-radius: 10px;"></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="justify-content: left;">
                        <span style="color: #000; font-size: 50px; margin-left: 15px; font-weight: bold;">
                           < </span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="justify-content: right;">
                        <span style="color: #000; font-size: 50px; margin-right: 15px; font-weight: bold;"> > </span>
                     </a>
                  </div>







               </div>
            </div>
         </center>
      </div>
   </div>
   <!-- end choose  section -->

   <!-- map -->
   <div style="margin-bottom: -15px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3719.593908518906!2d-41.868408553975684!3d-21.208285125821206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7339f3cc89464942!2sEspa%C3%A7o%20Verde%20Itaperuna%2FRJ!5e0!3m2!1spt-BR!2sbr!4v1645626467135!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>
   <!-- end map -->

   <!--  footer -->
   <footer id="contact">
      <div class="footer">
         <div class="container">
            <div class="row" style="justify-content: center;">
               <div class="col-md-6">
                  <img style="width: 100%;max-width: 315px;margin-bottom: 25px;" src="images/espacoverde.png">
               </div>
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Contato</h2>
                  </div>
                  <div class="cont">
                     <p>Celular: (22) 9925-23049</p>
                     <p>Email: espacoverdeitaperuna@gmail.com</p>
                     <p>Endereço: R. Moacir Soares de Farias, 875 - Mal. Castelo Branco, Itaperuna - RJ, 28300-000</p>
                     <div class="sign_btn">
                     <a href="tel:+5522992523049" style="width: 100%; text-align: center; margin-bottom: 15px; margin-top: 40px;">
                           Ligar
                        </a>
                     </div>
                     <div class="sign_btn" style="width: 100%;">
                        <a target="_blank" style="width: 100%; text-align: center; margin-bottom: 15px;" href="https://api.whatsapp.com/send?phone=5522992523049">
                           WhatsApp
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>Espaço Verde Itaperuna. Todos os direitos reservados.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <script>
      function verdisponibilidade() {
         var $dataInput = $("#data").val();
         var $hora = $("#hora").val();
         var $evento = $("#evento").val();

         if ($dataInput == "") {
            alert("preencha o campo data");
         } else if ($evento == "") {
            alert("preencha o campo evento");
         } else if ($evento == "") {
            alert("preencha o campo hora");
         } else {
            data = new Date($dataInput);
            dataFormatada = data.toLocaleDateString('pt-BR', {
               timeZone: 'UTC'
            });

            window.location.replace("https://api.whatsapp.com/send?phone=5522992523049&text=Olá, gostaria de saber a disponibilidade no dia *" + dataFormatada + " às " + $hora + "* para um(a) *" + $evento + "*.");
         }
      }
   </script>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>