
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    
    <script src="index.js"></script>
</head>
<body  style="background-color: #fff;" onload="loader()">

    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color: skyblue; opacity:1;"> 
            <img  height="90"src="./images/1.webp">
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:white;font-family: 'Times New Roman';font-size:2.5em;">
                &nbsp; WILTON BANK
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:red; "> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:white;font-size: 20px;font-weight:1em;font-family: 'Nunito';">
                            <div style="padding-left:20px;" >
                            </div>
                            View Customers
                        </a> 
                    </li> 
                </ul> 
            </div>
        </nav> 
    <marquee style="font-family: 'Nunito';">Welcome  To  Wilton  Bank  , Wilton  Bank  is  One  Of  The  Leading  Online  Banks,We  Offer    You  A  Simpler , Faster  and  Safer Way  To  Transfer  Your  Money </marquee>
    <div>
        <div class="row" style="margin:0px; padding:0px;">
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:15px;color:black;font-size:2.2em;text-align:center;justify-content: center;">
             <p class="zoomIn animated" style="margin:10% auto;font-family: 'Nunito';"> <span style="color:skyblue;font-family: 'Nunito';"></span><span class="halfcolour"></span> Best & Secured  Way For Your Transactions<p>
 <p class="zoomIn animated" style="margin:10% auto;font-family: 'Nunito';"> <span style="color:grey;font-family: 'Nunito';"></span><span class="halfcolour"></span>
<ul style="list-style-type:disc;">
  <li>Security</li>
  <li>Easy Accesibility</li>
  <li>24 Hours Customer Care</li>
</ul>  </p>
        
                 </div>
            <div class="col-sm">
                <img id="square" class="slideInRight animated " height="500"src="./images/2.jpeg" alt="" style="align-self: flex-end;">
            </div>
        </div>
       
    </div>
</div><br><br><br><br><br>


<div class="footer">
        <a href="#">© 2021 Wilton Bank</a><br></div>
<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>

</html>