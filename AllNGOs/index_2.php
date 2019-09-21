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
         <li><a href="index_2.php">Home</a></li>
         <li><a>About</a>
           <ul>
              <li><a>Our Work</a></li>
             
             </ul>
         
         </li>
         <li><a>Organisations</a>
             <ul>
               <li><a href="">Government</a></li>
               <li><a>Non-Government</a></li>

             </ul>
         </li>
        

      <li><a href="edit.html">Donate Now</a>
          </li>
      <li><a href="index.php">Log Out</a>
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
    <h3><font color="orangered">Welcome User</font></h3>
    
 <div id="slider">  

<img name="slide" width="1350" height="400">
     </div>

<div class="big">    
<h1 id="how" align="center" style="font-family: sans-serif">How We Work</h1>    
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
    </div>
    
   	
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