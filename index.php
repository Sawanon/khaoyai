<?php
include("connect.php");
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Logo.png" rel="icon">
  <link href="img/Logo.png" rel="apple-touch-icon"> 
  
  <!-- Include Clappr -->
  <script src="node_modules/clappr/dist/clappr.min.js"></script>

  <!-- Include the 360 videoplayer plugin -->
  <script src="node_modules/clappr-video360/dist/clappr-video360.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700|EB+Garamond" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
 <!-- Core theme JS-->
 <script src="js/scripts.js"></script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

 <!-- Template Main Javascript File -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <!-- menu button  Javascript -->
  <script>
    $(document).ready(function(){
      $("#elephant").hide();
      $("#Deer").hide();
      $("#monkey").hide();
      
     });
    </script>

<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #000;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #000;

    }

    .swiper-slide img {
      width: auto;
      height: auto;
      max-width: 100%;
      max-height: 100%;
      -ms-transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      position: absolute;
      left: 50%;
      top: 50%;
    }
  </style>
</head>

<body  data-offset="0" data-target="#theMenu">
  
  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="index.html#home">KHAO YAI NATIONAL PARK THAILAND</a></h1>
      <i class="fa fa-times-circle menu-close"></i>
      <a href="#home" class="smoothscroll">หน้าหลัก</a>
      <a href="#about" class="smoothscroll">สถานที่</a>
      <a href="#portfolio" class="smoothscroll">รูปภาพ</a>
      <a href="#contact" class="smoothscroll">สัตว์ป่า</a>
      <a href="#a" class="smoothscroll">ข้อควรระวัง</a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-envelope"></i></a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <!-- ========== HEADER SECTION ========== -->
  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <div class="logo">
        <img src="img/logo1.png" width="200" height="60">
      </div>
     
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->


<?php
$sql = "SELECT * FROM location WHERE location_name='น้ำตกเหวนรก'";
$query = $conn->query($sql);
$obj = $query->fetch_assoc()
?> 

  
  <!-- ========== ABOUT SECTION ========== -->
  <section id="about" name="about"></section>
  <div id="f">
    <div class="container">
      <div class="row  ">
       
        <!-- INTRO INFORMATIO-->
        <div class="col-lg-6 col-lg-offset-3 bordert">
           <h3> Narok Waterfall  <br> <?php echo $obj["location_name"];  ?> </h3>
        <br>
 
        <br>
        <center>
          <div class="row"> 
              <div class="v" ID="player" ></div>
      
              <script>
              // The URL to the 360 video player 
              var Video360Url = '<?php echo $obj["location_video"]; ?>';
      
              // Configure your Clappr player.
              var PlayerInstance = new Clappr.Player({
              source: Video360Url,
              width:280 ,
              height:180, 
              plugins: {
              container: [Video360],
               },
              parentId: '#player',
              });
      
              // Important to disable the click to pause native plugin of clappr
              // otherwise you won't be able to use correctly the player
              PlayerInstance.getPlugin('click_to_pause').disable();
              </script>
          </div>  
        </center>
        <br>
        
        <br>
          <p><b>
          <?php 
          $location_text = $obj["location_text"];
          $limit = 714;
          if(strlen($location_text) >= $limit){
            $subforsearch = substr($location_text,$limit);
            // echo $subforsearch;
            $inde = strpos($subforsearch," ");
            echo substr($location_text,0,$limit+$inde);
            echo "<br><button class = 'nextread'>อ่านเพิ่มเติม</button>";
            echo "<d>".substr($location_text,$limit+$inde)."</d>";
          }else{
            echo $location_text;
          }
          // echo strlen($location_text);
          // echo $location_text;
          // 714
          ?>
          <script>
          $(document).ready(function(){
            $("d").hide();
            $(".nextread").click(function(){
              $(".nextread").hide();
              $("d").show();
            });
          });
          </script>
          </b></p>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /f -->

  

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      // Enable lazy loading
      lazy: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
  </script>

  <!-- ========== CAROUSEL SECTION ========== -->
  <section id="portfolio" name="portfolio"></section>
  <div id="f">
    <div class="centered">
      <div class="row centered">
        <h2><b></b></h2>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active centered">
                <img class="img-responsive" src="images/1.jpg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="images/2.jpg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="images/3.jpg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="images/4.jpg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="images/5.jpg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="images/6.jpg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="images/7.jpg" alt="">
              </div>
            </div>
            <br>
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              <li data-target="#carousel-example-generic" data-slide-to="5"></li>
              <li data-target="#carousel-example-generic" data-slide-to="6"></li>
             
            </ol>
          </div>
        </div>
        <!-- col-lg-8 -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- f -->

  

  <!-- ========== CONTACT SECTION ========== -->
  <section id="contact" name="contact"></section>
  <div id="f">
    <div class="container">
      <div class="row bordert">
        <h3><b>สัตว์ป่าที่สามารถพบเห็น</b></h3>

    <!-- การกำหนดปุ่ม Button -->
          <script>
            $(document).ready(function(){
              $("#E1").click(function(){
                $("#elephant").show();
                $("#Deer").hide();
              });
              $("#D1").click(function(){
                $("#elephant").hide();
                $("#Deer").show();
              });
            });
          </script>
         
 
        <button type="button" class="btn btn-large btn-success" id="E1" role="button">ช้าง </button>

        <button type="button" class="btn btn-large btn-success" id="D1" role="button" >กวาง </button> 
           <br><br>
            <div id="elephant" >
              <center><p>
                <img src="img/E1.jpg" alt="slide"  class="img-responsive">
               <br>

               
                
                
                <br /></p></center>
            </div>

            <div id="Deer" >
              <p> <img src="img/D1.jpg" alt="slide"  class="img-responsive"> <br /></p>
            </div>

            <div id="monkey" >
              <p>ลิง <br /></p>
            </div>

            
            

        </div>  
      </div>
<br>
<br>
<br>
<section id="a" name="a"></section>
<div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3  Tred"> 
         <h1 ><b>ข้อควรระวัง</b></h1>
         <br> 
         <p align="left"><b> นักท่องเที่ยวที่ไป เที่ยวชมน้ำตกเหวนรก โดยเฉพาะ
           ในหน้าน้ำหลากควรระมัดระวัง ไม่ควรเข้าไปใกล้ริมน้ำ ของผาด้านบนน้ำตกจนเกินไป
            เพราะผาหินจะลื่น และกระแสน้ำจะพัดแรง ปะทะหินเป็นระลอก ทำให้
            เกิดคลื่นพัด กวาดขึ้นมาเป็นระยะ ๆ นักท่องเที่ยวที่เข้าไปใกล้บริเวณนี้  
            อาจถูกคลื่นกวาดตกลงไปในสายน้ำที่เชี่ยวกราก และถูก พัดตกลงไปในเหวเบื้องล่าง 
            สายน้ำที่เชี่ยวกรากของธารน้ำตกเหวนรกนั้นอันตรายมาก มีช้างป่าถูกพัดตกลงไปเสีย
            ชีวิตเป็นจำนวนหลายตัว นักท่องเที่ยวต้องระมัดระวังให้ดี
         </b></p>
        </div>
      </div>
    </div>
  </div>
</div>



<!--
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Minimal</strong>. All Rights Reserved
      </p>
      <div class="credits">
        
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/minimal-bootstrap-template/
          Licensing information: https://templatemag.com/license/
        
        Created with Minimal template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>
-->
  

</body>
</html>
