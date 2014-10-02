<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Persuratan -> Tambah Surat Masuk">
    <meta name="author" content="Agus Wibowo">
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
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Tambah Surat Masuk</h4>
            <div class="widget-body">
              <div class="center-align">
                <?php echo form_open_multipart('','id="#formgue" class="form-horizontal" ');?>
                  <div class="form-group">
                      <div class="step">
                        <label class="control-label" for="input02">No Surat</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                        <input type="text" name="no_surat" class="input" />
                        </p>
                        </div>
                        <label class="control-label" for="input02">Judul Surat</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                        <input type="text" name="judul" class="input" />
                        </p>
                        </div>
                        </div>
                      <div class="step">
                        <label class="control-label" for="input02">Pengirim</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                        <input type="text" name="pengirim" class="input" />
                        </p>
                        </div>
                        <label class="control-label" for="input02">ISI Surat</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                            <textarea name="isi"></textarea>
                        </p>
                        </div>
                        </div>
                      <div class="step">
                        <label class="control-label" for="input02">Tanggal Surat</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                            <input type="text" name="tanggal" class="input" id="datepicker"/>
                        </p>
                        </div>
                        
                        
                        <label class="control-label" for="input02">Pilih file</label>
                        <div class="controls">  
                        <!--<input type="file" name="userfile" multiple="false"/>-->
                        <?php echo form_upload('userfile','','class="uploader"');?>

                            
                        </p>
                        </div>
                        <div class="form-actions">
                            

                            <input class="btn btn-primary" type="submit" value="upload" onclick="$('#muathalaman').show();" />
                        </div>
                    </div>
                  </div>
                      
                <?php echo form_close();?>
                  <div ><?php echo validation_errors();?></div>
                
                
              </div>
            </div>
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
          &copy; 2012-3000 ICT CENTER, Inc. All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/boot-business.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/siakad.js"></script>
    
    
  </body>
</html>