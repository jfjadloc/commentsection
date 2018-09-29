<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="RequestAppointment.css">
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h1>Request Appointment</h1>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="adr" name="address" placeholder="09*****">
            <label for="genders"><i class="fa fa-sex"></i> Gender</label>
            <input type="checkbox" name="Girl" value="Person">Female
            <input type="checkbox" name="Boy" value="Person">Male

            <div class="row">
              <div class="col-50">
                <label for="state"><br>Date of Birth</label>
                  <input type="datetime-local" name="bdaytime">
                
              </div>
              
            </div>
          </div>

          <div class="col-50">
            <h1>Date of Appointment</h1>
           
           
            <label for="cname"><i class="fa fa-calendar"></i> Meet in: </label>
            <input type="datetime-local" name="bdaytime">
            <label for="ccnum">Time</label>
              <input type="time" name="usr_time">
          
            <div class="row">
              <div class="col-50">
                 <label for="cname">Reason for your Visit</label>

                  <select name = "dropdown">
                                <option value = "Exams" selected>Exam & Cleaning</option>
                     <option value = "consultation">Consultation</option>
                     <option value = "Previously">Previously Discussed Treatment</option>
                     <option value = "other">Other</option>
                   </select>
              </div>
            


            </div>
          </div>
          
        </div>

      
        <input type="submit" value="Request Appointment" class="btn">
        <div class="home">
          


        </div>
      </form>
    </div>
  </div>

</div>

</body>
</html>
