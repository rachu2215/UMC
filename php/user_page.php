<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:user_page.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>


   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/user_page.css">

</head>
<body>
   
<!--
   <div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Register for Booking your A</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

-->

<h1>Thank you for the registration .</h1>
<p>

You can book your appointment According to your requirement. Please note that you will need to fast for 8 hours prior to your appointment time if you have chosen to take a blood test. You may drink water and take any regular medications as prescribed. If you have any questions or concerns, please do not hesitate to contact us at [9867072170]. We look forward to serving you.

</p>
    
    <section id="schedule">
  <div class="container">
    <h2>Doctor's Time Schedule</h2>



    <table style="border: 1px solid black;">
  <thead style="background-color: lightgray;">
    <tr>
      <th style="padding: 10px;">Doctor</th>
      <th style="padding: 10px;">Specialty</th>
      <th style="padding: 10px;">Monday</th>
      <th style="padding: 10px;">Tuesday</th>
      <th style="padding: 10px;">Wednesday</th>
      <th style="padding: 10px;">Thursday</th>
      <th style="padding: 10px;">Friday</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="padding: 10px;">Dr. Niruta Bhattarai</td>
      <td style="padding: 10px;">Cardiology</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
      <td style="padding: 10px;">Off</td>
    </tr>
    <tr>
      <td style="padding: 10px;">Dr. Pranav Adhikari</td>
      <td style="padding: 10px;">Dermatology</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
      <td style="padding: 10px;">Off</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
    </tr>
    <tr>
      <td style="padding: 10px;">Dr. Ram Shah</td>
      <td style="padding: 10px;">Neurology</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
      <td style="padding: 10px;">Off</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
    </tr>
    <tr>
      <td style="padding: 10px;">Dr. Sarah Subedi</td>
      <td style="padding: 10px;">Orthopedics</td>
      <td style="padding: 10px;">Off</td>
      <td style="padding: 10px;">1:00 PM - 5:00 PM</td>
      <td style="padding: 10px;">9:00 AM - 12:00 PM</td>
      <td style="padding: 10px;">3:00 PM - 8:00 PM</td>
      <td style="padding: 10px;">10:00 AM - 1:00 PM</td>

        </tr>
      </tbody>
    </table>





    <table style="border-collapse: collapse; border: 1px solid black;">


      <thead>
        <tr>
          <th>Doctor</th>
          <th>Specialty</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dr. Niruta Bhattarai</td>
          <td>Cardiology</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>Off</td>
        </tr>
        <tr>
          <td>Dr. Pranav Adhikari</td>
          <td>Dermatology</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>Off</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
        </tr>
        <tr>
          <td>Dr. Ram Shah</td>
          <td>Neurology</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>Off</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
        </tr>
        <tr>
          <td>Dr. Sarah Subedi</td>
          <td>Orthopedics</td>
          <td>Off</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
          <td>1:00 PM - 5:00 PM</td>
          <td>9:00 AM - 12:00 PM</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<br><br>
<section id="registration">
  <div class="container">
    <h2>Book Your Appoinment Here:</h2>
    <form action="submit.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
      
      <label for="doctor">Doctor:</label>
      <select id="doctor" name="doctor" required>
        <option value="" disabled selected>Select a doctor</option>
        <option value="Dr. Niruta Bhattarai">Dr. Niruta Bhattarai (Cardiology)</option>
        <option value="Dr. Pranav Adhikari">Dr. Pranav Adhikari (Dermatology)</option>
        <option value="Dr. Ram Shah">Dr. Ram Shah (Neurology)</option>
        <option value="Dr. Sarah Subedi">Dr. Sarah Subedi (Orthopedics)</option>
      </select>
      
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>
      
      <input type="submit" value="Submit">
    </form>
  </div>
</section>


<br><br>
<a href="logout.php" class="btn">logout</a>
</body>
</html>