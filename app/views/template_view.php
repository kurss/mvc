<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='noindex,follow'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/template/css/animate.css">
    <link rel="stylesheet" href="/assets/template/css/style.css">
    <style>
    .myPrice {
            height:510px;
        }
    @media screen and (max-width: 768px) {
        .myPrice {
         height:415px;
        }
    }
    </style>
   
</head>
    
<body>
    
<div class="row">
                        <nav id="top-nav" class="navbar navbar-default navbar-fixed-top navbar-scroll-changed">
                              
                          <div class="container">

                            <div class="col-md-2 col-sm-1 col-xs-12">
                                    <div class="branding">
                                      <a href="#" title="Home is where the heart is" rel="home"><img id="logo" src="/assets/template/images/flexible-logo.png" alt="Home is where the heart is"></a>
                                    </div><!--end branding-->
                                
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div><!--end navbar-header-->
                            </div><!--end col-md-2 col-sm-2 col-xs-12-->

                            <div class="col-md-10 col-sm-11 col-xs-12">
                                  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="true" style="height: 1px;" role="navigation">
                                      
                                    <div class="menu-primary-menu-container">
                                        <ul id="menu-main-top-navigation" class="menu nav navbar-nav navbar-right">
                                            <li><a href="/main/">Главная</a></li>
                                            <li><a href="/blog/">Блог</a></li>
                                            <li><a href="/about/">О нашей компании</a></li>
                                            <li><a href="/price/">Цены</a></li>
                                            <li><a href="/contacts/">Контакты</a></li>
                                        </ul>
                                    </div><!--end menu-->
                                </div><!--end navbar-collapse--> 

                             </div><!--end col-md-10 col-sm-10 col-xs-12--> 
                              
                            </div><!--end container-->
                        </nav>
                           
                            </div><!--end row-->

    

<?php include 'app/views/'.$content_view; ?>
                                           

       <div id="footer">                                      
       <div class="container">
            <div class="row">
                    <div class="footer-section col-md-1">
                        <a href="#" title="Home is where the heart is" rel="home"><img src='/assets/template/images/flexible-logo-footer.png' class="logo-footer flex fadeInUp animated" alt="Home is where the heart is"></a>
                    </div><!--end footer-section-->
                    
                    <div class="footer-section col-md-8 col-sm-9 col-xs-12">
                            <p class="copyright flex fadeInUp animated">&#169; Copyright 2016 <strong>Flexible.</strong>&nbsp;All rights reserved.</p>
                    </div><!--end footer-section-->
                        
                        
                    <div class="footer-section col-md-3 col-xs-12">    
                        <div class="social copyright flex fadeInUp animated">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div><!--end social-->
                    </div><!--end col-md-3-->
            </div><!--end row-->
        </div><!--end container-->
        </div><!--end footer-->
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="/assets/template/js/jquery-mobile.js"></script>
<script src="/assets/template/js/wow.min.js"></script>
<script src="/assets/template/js/main.js"></script>
<script src="/assets/template/js/respond.min.js"></script>
<script>
//jQuery transitions init(wow + animated)
wow = new WOW(
    {
        boxClass: 'flex',
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
    }
    )
wow.init();
</script>

</body>