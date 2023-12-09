<?php require_once("assets/config/config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]> 		<html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]> 		<html class="ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9]> 		<html class="ie9 no-js" lang="es"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta name="author" content="Luis Óscar Bueno Sánchez">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Tarea 30 del 11">
     <title>Analytics — Landing Page</title>
     <link rel="stylesheet" href="assets/css/main.css" type="text/css" />

</head>

<body>
     <?php include("assets/templates/header.php"); ?>
     <main>
          <section class="section-1">
               <div>
                    <h1>Monitor your business on real-time dashboard</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. </p>
                    <button class="pink">Try for free</button>
               </div>
               <img src="assets\images\main-screenDoble.svg" alt="">
          </section>
          <section class="section-1">
               <h2>Main Features</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet. Id vel in nam malesuada.</p>
               <div class="cards">
                    <div>
                         <img src="assets\images\planning.svg" alt="">
                         <h3>Monitoring 24/7</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.</p>
                    </div>
                    <div>
                         <img src="assets\images\computer.svg" alt="">
                         <h3>Widget System</h3>
                         <p>Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar.</p>
                    </div>
                    <div>
                         <img src="assets\images\speed.svg" alt="">
                         <h3>Best Performance</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.</p>
                    </div>
               </div>
          </section>
          <section class="section-3">
               <div class="texto">
                    <h2>Automated Reports & Widget Alerts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
               <img src="assets\images\screen-01.svg" alt="" srcset="">
          </section>
          <section class="section-3">
               <img src="assets\images\screen-02.svg" alt="" srcset="">
               <div class="texto">
                    <h2>Fully customizable to address your needs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
          </section>
          <section class="section-3">
               <div class="texto">
                    <h2>Pre-built Dashboard Templates</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
               <img src="assets\images\screen-03.svg" alt="" srcset="">
          </section>
          <section>
               <h2>Pricing Plans</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. </p>
               <div class="prices">
                    <div>
                         <h3>Starter</h3>
                         <span>up to 3 users</span>
                         <div class="precio">
                              $29<span>per month</span>
                         </div>
                         <button>Order</button>
                    </div>
                    <div >
                         <h3>Standard</h3>
                         <span>up to 20 users</span>
                         <div class="precio">
                              $99<span>per month</span>
                         </div>
                         <button class="pink">Order</button>
                    </div>
                    <div>
                         <h3>Premium</h3>
                         <span>up to 200 users</span>
                         <div class="precio">
                              $299<span>per month</span>
                         </div>
                         <button>Order</button>
                    </div>
               </div>
          </section>
     </main>
     <?php include("assets/templates/footer.php"); ?>
     <script src="assets/js/custom.js"></script>
</body>
</html>