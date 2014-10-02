<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Persuratan -> Tambah Surat Masuk">
    <meta name="author" content="Agus Wibowo">
    
    <link href= "http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="stylesheet">
 
<style>
/* mulai membuat overlay */
.overlay{
width:100%;
height:100%;
position: fixed;
top: 0;
left: 0;
display: none;
z-index: 99999;
background: rgba(0,0,0,0.7);
}
/* akhir dari membuat overlay */
 
/* mulai membuat Resizable Iframe */
.resizable{
   display:block;
   width:500px;
   height:300px;
   background: #f3f3f3;
   padding:10px;
   padding-bottom:60px;
   margin: 100px auto;
   border:2px solid gray;
   border-radius: 5px;
   overflow:hidden;  
   position:relative;
   box-shadow: 0 2px 5px #000;
   z-index: 103;
}
 
.ui-resizable-helper { border: 1px dotted gray; }
iframe{ width:100%; height:100%; display:none;
}
/* akhir membuat Resizable Iframe */
 
 
/* mulai membuat tombol close */
a.boxclose{
    background:transparent url(../images/icons/page_delete.png) no-repeat top left;
    margin-top:0px;
    margin-right:0px;
    padding-bottom:7px;
    cursor:pointer;
    float: right;
    height: 35px;
    width: 34px;
    z-index: 99999;
}
/* akhir dari membuat tombol close */
</style>
    
    
   <title>Aplikasi Persuratan </title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
   
    <link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url();?>css/boot-business.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/normalize.css" rel="stylesheet">
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
              <a href="index.html" class="brand brand-bootbus">e-persuratan</a></p>
            
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products and Services<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="product.html">Product1</a></li>
                    <li><a href="product.html">Product2</a></li>
                    <li><a href="product.html">Product3</a></li>
                    <li><a href="all_products.html">All products</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">SERVICES</li>
                    <li><a href="service.html">Service1</a></li>
                    <li><a href="service.html">Service2</a></li>
                    <li><a href="service.html">Service3</a></li>
                    <li><a href="all_services.html">All services</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="signup.html">Sign up</a></li>
                <li><a href="signin.html" class="active-link">Sign in</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
            <h1></h1>
        </div>
        <div class="row">
          <div class="span10 ">
            <h4 class="widget-header"><i class="icon-lock"></i> Daftar Surat Masuk</h4>
            <div>
              <div class="center-align">
                  <br>
                  <table class="table table-bordered table-hover table-striped" id="t11">
                      
                      <thead>
                          <tr>
                          <th>NO</th>
                          <th>NO Surat</th>
                          <th>Pengirim</th>
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>aksi</th>
                          
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      $atts = array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'no',
              'status'     => 'no',
              'resizable'  => 'no',
              'screenx'    => '20',
              'screeny'    => '600',
              'location'   => '0'
            );

        
                $no =1 ;
                foreach ($isi as $d){
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$d->no_surat."</td>";
                    echo "<td>".$d->pengirim."</td>";
                    echo "<td>".$d->judul."</td>";
                    echo "<td>".$d->tanggal."</td>";
                    echo "<td><a href=".base_url()."doc/suratmasuk/".$d->filename."><i class=icon-download-alt></i></a>
                        <button class=\"btn btn-primary\" id=\"btndemo\"><i class=\"icon-download-alt\"> Detil!</i></button>
<br><br>
<div class=\"overlay\" id=\"overlay\">
<div class=\"resizable\" >
<a class=\"boxclose\" id=\"boxclose\"></a>
<iframe width=\"600\" height=\"400\" src=\"".base_url()."index.php/surat_masuk/detil/".$d->id_suratmasuk."\" frameborder=\"0\" allowfullscreen></iframe>
</div>
</div>


                </td>";
                    echo "</tr>";
                }
                
                ?>
                      </tbody>
                      
                      </table>
               
              </div>
            </div>
          </div>
            <div class="apple_overlay" id="overlay">
  <!-- the external content is loaded inside this tag -->
  <div class="contentWrap"></div>
</div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
            <h4><i class="icon-cogs icon-white"></i> Services</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="service.html">Service1</a></li>
                <li><a href="service.html">Service2</a></li>
                <li><a href="service.html">Service3</a></li>
                <li><a href="all_services.html">All services</a></li>              
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Patnerships</a></li>
                <li><a href="leadership.html">Leadership</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="blog.html">Blog</a></li>
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact_us.html">Contact us</a></li>            
              </ul>
            </nav>
            <h4><i class="icon-legal icon-white"></i> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +919750227877
            </div>
          </div>      
          <div class="span3">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; <?php echo date('Y');?> ICT CENTER KOTA BEKASI.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/boot-business.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/siakad.js"></script>
    <script>
$(function() {
$( ".resizable" ).resizable({
animate: true, animateEasing: 'swing', animateDuration: 500
});
});
</script>
 
<script>
$(document).ready(function(){
  $("#btndemo").click(function(){
    $("#overlay, .resizable, iframe").fadeIn(1000);
  });
 
    $("#boxclose").click(function(){
            $("#overlay, .resizable, iframe").fadeOut(1000);
            $( "iframe" ).attr( 'src', function ( i, val ) { return val; });
            $( "iframe" ).hide();
        });
});
</script>
    
    
    
  </body>
</html>