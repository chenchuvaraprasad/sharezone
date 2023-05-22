<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<br><br>


<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
<body>
	


     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Easy Notes Management</h2><p>Now easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Upload Various Details</h2><p>User can upload various Details like Car-Sharing , Notes-Sharing</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Controled By Admin</h2><p>Everying is managed and controled by administrator</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide5.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Login For Both Admin and User</h2><p>Both Admin and User can login and upload notes </p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>  
</div>
<?php include 'includes/footer.php';?>
<br> <br>

<div class="container">

        <div class="wrapper">
            <div class="hr">
                <hr>
                <h2>Our Mission</h2>
                <hr>
            </div>


            <p class="mission-txt">" To Make Notes Sharing Easier And Increase Collaboration Among Colleagues.  "</p>

        </div>

        <div class="wrapper">
            <h2>About</h2>
            <div class="faculties">
                <div class="unit">
                    <img src="images/slider/mypic.jpg" alt="">
                    <p>GadhirajuChenchuvaraprasad </p>
                    <p>IST (Dept),Anna University </p>

                </div>
                <div class="unit">
                    <img src="images/slider/sasi.jpg" alt="">
                    <p>SasiKumar K </p>
                    <p>IST (Dept),Anna University</p>

                </div>
    </div>
        </div>

        <div class="wrapper">
            <h2>Faculties</h2>
            <div class="faculties">
                <div class="unit">
                    <img src=https://www.annauniv.edu/DIST/assests/images/upload_images/mala.jpg" alt="">
                    <p>DR.T.MALA, ASSOCIATE PROFESSORS</p>
                    <p>IST (Dept),Anna University</p>

                </div>
                <div class="unit">
                    <img src="./Principal.jpg" alt="">
                    <p>DR.D.NARASHIMAN, TEACHING FELLOWS</p>
                    <p>IST (Dept),Anna University</p>

                </div>
                
            </div>
        </div>

    </div>

<style>
	 body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: rgb(170, 169, 169);
            margin: 0;
            padding: 0;
        }
	.wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background: rgb(223, 215, 215);
            margin: 10px auto;
            padding: 5px 30px;
            width: 800px;
            box-shadow: 0 0 5px black;
            
        }
        
        .hr {
            display: flex;
            align-items: center;
        }
        
        hr {
            width: 30px;
            height: 1px;
            background: black;
            margin: 0 15px;
        }
        
        h2 {
            font-size: 25px;
            font-weight: normal;
            text-transform: uppercase;
        }
        
        .mission-txt {
            font-size: 18px;
            font-weight: 500px;
            font-style: italic;
            margin-top: 0;
        }
        
        
        
        
        
        .faculties {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .unit {
            margin: 25px;
            width: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .unit img {
            border-radius: 100px;
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }
        
        .unit p {
            text-align: left;
            margin: 2px;
        }
        
        .unit p:first-of-type {
            font-weight: bolder;
            margin-bottom: 5px;
        }
        
        @media screen and (max-width:820px) {
            .wrapper {
                width: 80%;
                padding: 5px 30px;
            }
        }
    </style>
	</body>














































        