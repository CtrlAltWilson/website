<?php 
$protect = 0;
$config = 1;
include("includes/header2.php");
require 'config/set_protect.php';
//session_destroy();
 ?>
<!--------------------------------------------------->

<!-- START ABOUT -->
<section>
    <a id="about"></a>
    <div class="about">
        <aside class="profile-card">
            <header>
                <!-- avatar -->
                <!--<a> <img src="assets/images/profile_pics/selfie.jpg" /> </a>-->
                <a><img src="assets/images/profile_pics/selfie.jpg" id="profilepic"/></a>
                <!-- name -->
                <h1>Wilson Ngo</h1>
                <!-- role-->
                <h2>Developer</h2>
                Let's figure it out 
            </header>
            <div class="profile-bio">
                <p>I’m a backend developer currently residing in Houston, TX where I have received company-wide accolades for my work initiatives, such as developing a chatbot for improving client support.<br><br><h11 id="clickProfilead"></h11></p>
                <button data-label="" class="downloadCV" id="profilebtn">----------------------------------</button>
            </div>
            <!-- add or remove social profiles as you see fit -->
        </aside>
    </div>
</section>
<!-- END ABOUT -->

<!--SIGN OUT-->
<a href="/youshallnotpass" id="signout">
	<i class="fas fa-sign-out-alt"></i>
</a>

<!--------------------------------------------------->

<!--LOADER-->

<div class="loader-wrapper">
  <div class="loader-container">
    <h1 class="lt">&lt</h1>
    <h1 class="loader">/</h1>
    <h1 class="lt" id="ltNd">&lt</h1>
  </div>
</div>

<script src="assets/js/animation.js"></script>


</body><!--body[header]-->
</html><!--html[header]-->