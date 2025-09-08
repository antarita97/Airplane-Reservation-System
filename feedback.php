<!DOCTYPE html>
<html>
<head>
  <title>Airplane Reservation - About Us</title>
  <link rel="stylesheet" href="feedbackcust.css">
  <script type="text/javascript">
    function validateForm() {
      var email = document.getElementById("email").value;
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      
      if (email === "") {
        alert("Email field is required.");
        return false;
      } else if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }
      
      return true;
    }
  </script>
</head>
<body>
   <h1>About Us</h1>


<p>Welcome to our Firstfly Airplane Reservation System! We are dedicated to providing you with a seamless and hassle-free experience when it comes to booking flights and managing your travel plans.</p>

<p>At Firstfly airplane reservation system, we understand that every journey is unique, and we strive to cater to your specific needs and preferences. Whether you're traveling for business or leisure, our user-friendly platform offers a wide range of services and features to enhance your travel experience.</p>
<p>
<br>
*Our Commitment*
<br>
<br>
1. *Effeciency:* We prioritize reliability and efficiency in our operations. Our system is designed to handle a large volume of reservations, ensuring that you can book your flights with ease and confidence. We work closely with our partner airlines to provide accurate and up-to-date flight information, minimizing disruptions and keeping you informed at all times.
<br>
<br>
2. *Convenience:* We believe that booking flights should be simple and convenient. Our intuitive interface allows you to search for flights, and choose the best options that fit your schedule and budget. With just a few clicks, you can complete your reservation and receive instant confirmation.
<br>
<br>
3. *Secure Infrastructure:* We maintain a highly secure infrastructure to protect your data from unauthorized access, ensuring that your personal information remains confidential. 
<br>
<br>
4.*Our Partnerships:* Firstfly reservation system partners with leading airlines worldwide to offer you a wide range of options and destinations. We carefully select our partners based on their safety records, service quality, and reputation within the industry. By collaborating with trusted airlines, we ensure that you receive the highest standards of service and comfort during your travels.
<br>
<br>
</p>
<p>
<br>
*Feedback Us*
<br>
We would love to hear from you! If you have any questions, feedback, or suggestions, please don't hesitate to reach out to us.
<br>
<br>
Thank you for choosing Firstfly reservation system. We look forward to serving you and helping you create unforgettable travel experiences. </p>
<center>
  <h2>Feedback</h2>
  <form action="process_feedback.php" method="post" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="feedback">Feedback:</label>
    <textarea id="feedback" name="feedback" required></textarea><br><br>
    <div>
    <input type="submit" value="Submit">
	</div>
	</center>
  </form>
  <br>
   <center><a href="home.html"><input type="submit" name="" value="BACK"></a></center>
</body>
</html>

