<!Doctype html>
<? php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,"samplelogindb");
?>

<html>
 <head>
    <title>www.allNGO's.com</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <script type="text/javascript">
var i=0;
var images=[];
var time=1000;
images[0]='images/first.jpg';
images[1]='images/second.jpg';
images[2]='images/1.jpg';
images[3]='images/2.jpg';
function changeImg(){
document.slide.src=images[i];
    if(i<images.length-1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()",time);
}
window.onload=changeImg;



</script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
    
<body>
    
  <div class="header">
      
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="About.html">About</a>
           <ul>
              <li><a href="About.html">Our Work</a></li>
             
             </ul>
         
         </li>
         <li><a href="index.php">Organisations</a>
             <ul>
               <li><a href="index.php">Government</a></li>
               <li><a href="index.php">Non-Government</a></li>

             </ul>
         </li>
        

      <li><a href="index.php">Contact Us</a>
          </li>
      <li><a href="login.php">Donate Now</a>
<!--
             <ul>
               <li><a>+91 8291391041</a></li>
               <li><a>More</a></li> 
             </ul>
-->
         </li>
     </ul>
    

    
  </div>   
    <br><br><br>
    
 <div id="slider">  

<img name="slide" width="1350" height="400">
     </div>

<div class="big">    
<h1 id="how" align="center" style="font-family: sans-serif">Our Services</h1>    
    <hr>
<!--
    <div class="mine">
    <p>
        <img align="left" src="images/1.jpg" width="300" height="250" class="size-medium wp-image-760 pickup-img aligncenter">
        </p><br>
        <h4 style=text-align:"left">Government Organisation</h4>
        
        <p>They are organisation which are build by Government trusted sources</p>
    </div>
-->

<section id="System">
<div class="container">
<!-- <h1> our services</h1> -->
<div class="row">
<div class="column3 text-cent>
<div class="icon">
<a href="http://tarangfoundation.com" ><img width="250px" height="250px" src="logo.png"><br>Tarang foundation</a>
</div><br>

<h3>Goals
Our goal is to be the leading organization 
<br>for the welfare of the society and the needy,
<br> known for its credibility and the lasting impact 
<br>it creates in the lives of vulnerable and excluded blind and disabled.
</h3>
<br>
<br>
</div>




<div class="row">
<div class="column3 text-cent>
<div class="icon">
<a href="http://www.biggerthanlife.in" " ><img width="250px" height="250px" src="big.png"><br>Biggerthanlife</a>
</div><br>
<h3>BIGGER THAN LIFE (A registered NGO) is a movement started by a group of enthusiasts, <br>a set of ordinary people who believe they can create extra ordinary possibilities in the lives of the underprivileged children of Mumbai.</h3>


<br>
<br>
</div>

<div class="row">
<div class="column3 text-cent>
<div class="icon">
<a href="http://www.aaicaretaker.in"  ><img width="250px" height="250px" src="aail.jpg"><br>Aaicaretaker</a>
</div><br>
<h3>BIGGER THAN LIFE (A registered NGO) is a movement started by a group of enthusiasts, <br>a set of ordinary people who believe they can create extra ordinary possibilities in the lives of the underprivileged children of Mumbai.</h3>


<br>
<br>
</div>


<div class="row">
<div class="column3 text-cent>
<div class="icon">
<a href="http://www.motherfoundationmumbai.org"  ><img width="250px" height="250px" src="logomother3.png"><br>motherfoundation</a>
</div><br>
<h3>"Mother Foundation for Homeless and needy person and most vulnerable people."<br>We are working with Street children and youth for their rights,<br> like Survival, Protection, development Participation with the help of Govt systems & networking with other NGO.</h3>

<br>
<br>
</div>


<div class="row">
<div class="column3 text-cent>
<div class="icon">
<a href="https://www.ngocacr.com/aboutcacr.html"  ><img width="250px" height="250px" src="dead.png"><br>ngocacr</a>
</div><br>
<h3>"The best way to find yourself is to lose yourself in the service of others.<br>Citizens Association for Child Rights-CACR , is a network of like minded citizens concerned <br>about ensuring child rights with specific focus on ensuring good quality of education and health for all children.</h3>

<br>
<br>
</div>

<div class="row">
<div class="column3 text-cent>
<div class="icon">
<a href="https://www.trishul-ngo.org/"  ><img width="250px" height="250px" src="Trishul.jpg"><br>Trishul</a>
</div><br>
<h3>"A registered charitable organization working towards building self-sustainable communities through skill development,<br> education and livelihood programs in urban slums and economically weak rural villages in India. </h3>
  "</h3>

<br>
<br>
</div>



</div>
</div>
</section>









<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" https://www.childvisionfoundation.org/  " target="_blank"><img src="images/child.png"><br>child vision foundation</a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div>
<hr>


<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" https://www.amtmindia.org/  " target="_blank><img src="images/animal.png><br>Animal matter to me NGO</a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>


<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" https://snehamumbai.org/  " target="_blank><img src="images/sneha.png><br>Sneha Mumbai NGO</a>
</div><br>

<h3>Goals :
Our goal is to break the intergenerational cycle of poor health among women and children living in vulnerable settlements. Our interventions are centered around 3 principles.<h3>
<br>
<br>
</div><hr>

<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" http://www.aksharacentre.org/  " target="_blank><img src="images/animal.png><br>Akshara Centre</a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>

<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" https://www.arpan.org.in/  " target="_blank><img src="images/arpan.png><br>Arpan </a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>

<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" https://www.mescotrust.org/  " target="_blank><img src="images/mesco.png><br>Mesco trust </a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>

<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href="https://vidya-india.org/ " target="_blank><img src="images/vidya.png><br>vidya india  </a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>

<div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href="http://ampindia.org/" target="_blank><img src="images/amp.png><br>AMP india</a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>


div class="row" style="padding-left: 20px;">
<div class="column3 text-cent>
<div class="icon">
<a href=" http://www.ccdtrust.org/" target="_blank><img src="images/ccdt.png><br>commited communities.</a>
</div><br>

<h3>Goals :
Our vision is to be a strategic leadership organisation influencing social transformation through developmental programmers. To work towards creating a better India which provides basic health, education and empowerment to every citizen.<h3>
<br>
<br>
</div><hr>

    </div>
    
    <br><br>
<ul>
<a href="index.php">Government Organisation</a></li><br>
    <a href="index.php">Non-government Organisation</a></li><br>
 Contact us<br>+91 8291391041</li><br>
 E-mail  <br>  earthh17@gmail.com</li>
</ul>
</div >
<div class="modify">
   <p>Created<br>
       On:&nbsp  21 Sep 2019<br>
        By:&nbsp CODING MASTER<br><br>
 <i class="fa fa-twitter-square" style="font-size:16px color:Blue"> Twitter </i>&nbsp;&nbsp;&nbsp;
<i class="fa fa-instagram" aria-hidden="true"style="font-size:16px; color:Red ">   
Instagram</i>


</p>
</div>
           
<style>
.edit{
background-color: Green;
}
</style>
<style>
.modify{
background-color:LightGray ;
align-items: center;
front-size: 40px;
box-shadow:0 0 0 0 #2196f3;
 margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
}
</style>


                
    
</body>
</html>