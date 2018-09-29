<?php
  date_default_timezone_set('Asia/Manila');
  include 'dbh.inc.php';
  include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>
<header>
  <link rel="stylesheet" href="new.css">
     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet">
  <title>Testimonials  </title>
</header>


<body>

  <div class="background">


  </div>
  

  <header>
      <ul>
   <li><a href="http://localhost/commentsection/sampleslider.php">Home</a></li>
          <li><a href="http://localhost/commentsection/AboutUs.php">About </a></li>
           <li><a href="http://localhost/commentsection/Service.php">Services </a></li>
           <li><a href="http://localhost/commentsection/Office.php">Office</a></li>
          
                  
                  <li><a href="http://localhost/commentsection/index.php">Testimonial</a></li>
                  <li><a href="http://localhost/commentsection/Contact.php">Contact</a></li>
                   
                    <li><a href="http://localhost/commentsection/admin/index.php">Admin</a></li>
                     <li><a href="http://localhost/commentsection/dentist/index.php">Dentist Login</a></li>


</li>

      </ul> 



    </header>


 <div class="logoH">

          <h1>Sanchez<font color="#b666d2">Dental</font>Care</h1>
          
        </div>
<div class="logoH2">
          <img src="201.png" height="10" width="310">
        </div>


        <div class="logos">
          <img src="111.png" height="35" width="35">

        </div>
<div class="review">

  <div class="pic">
    <img src="test.jpeg" width="850" height="450">
  </div>
  <div class="reviews">
    <font color="#b666d2">Testimonials</font>    
  </div>
  
</div>
<div class="commentbox">
<?php
echo"<form method='POST' action='".setComments($conn)."'>
  <input type='hidden' name='uid' value='Anonymous'>
  <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
  
  <textarea name='message'></textarea><br>
  <button type='submit' name='commentSubmit'>Comment</button>
</form>";

getComments($conn);

?>

</div>

<div class="space">
  <div class="twitter">
  <img src="t.png" >
</div>

<div class="f">
  <img src="f.png" >
</div>
<div class="insta">
  <img src="insta.png" >
 </div>
   <div class="copyright">
      &#169; Copyright 2019-2020 All Rights Reserved

   </div>
     <div class="logoH3">

          <h1>Sanchez<font color="#b666d2">Dental</font>Care</h1>
          
        </div>
<div class="logoH4">
          <img src="201.png" height="10" width="310">
        </div>
         <div class="logos2">
          <img src="111.png" height="35" width="35">
        </div>
</div>

</body>
</html>




