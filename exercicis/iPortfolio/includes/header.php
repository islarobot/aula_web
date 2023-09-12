 <!-- ======= Header ======= -->
 <?php
    $nombre = "Antoni Aloy";
    $social = array(
        'twitter' => 'https://twitter.com/aaloy',
        //'instagram' => 'https://instagram.com/aaloy',
        'linkedin' => 'https://linkedin.com/aaloy',
        'facebook' => '#'
    )
 ?>

 <header id="header">
     <div class="d-flex flex-column">

         <div class="profile">
             <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
             <h1 class="text-light"><a href="index.php"><?php echo $nombre; ?></a></h1>
             <div class="social-links mt-3 text-center">
                 <?php 
                 foreach($social as $red => $link) {
                    echo '<a href="';
                    echo $link;
                    echo '" class="';
                    echo $red;
                    echo '"><i class="bx bxl-';
                    echo $red;
                    echo '"></i></a>';
                 }
                 ?>

             </div>
         </div>

         <nav id="navbar" class="nav-menu navbar">
             <ul>
                 <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                         <span>Home</span></a></li>
                 <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                 </li>
                 <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                         <span>Resume</span></a></li>
                 <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                         <span>Portfolio</span></a></li>
                 <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                         <span>Services</span></a></li>
                 <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                         <span>Contact</span></a></li>
             </ul>
         </nav><!-- .nav-menu -->
     </div>
 </header><!-- End Header -->