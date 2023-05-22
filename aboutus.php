<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us page html</title>
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
        
        div img {
            width: 150px;
            filter: drop-shadow(0 10px 5px black);
        }
        
        p {
            text-align: justify;
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
</head>

<body>
    
    

    <div class="container">

        <div class="wrapper">
            <div class="hr">
                <hr>
                <h2>Our Mission</h2>
                <hr>
            </div>


            <p class="mission-txt">"  To Make Notes Sharing Easier And Increase Collaboration Among Colleagues.  "</p>

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
                    <img src=images/slider/mala.jpg" alt="">
                    <p>DR.T.MALA, ASSOCIATE PROFESSORS</p>
                    <p>IST (Dept),Anna University</p>

                </div>
                <div class="unit">
                    <img src="images/slider/narashiman.jpg" alt="">
                    <p>DR.D.NARASHIMAN, TEACHING FELLOWS</p>
                    <p>IST (Dept),Anna University</p>

                </div>
                
            </div>
        </div>

    </div>
</body>

</html>