
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php
  
?>
<nav>
      <div class="logo">
        <img src="https://i.postimg.cc/9M3fNbXV/redmonlogo.png" </img>
      </div>
      <div class="dropdown">
        <button class="dropbtn">MENU</button>
        <div class="dropdown-content">
          <a href="../index.html">Home</a>
          <a href="../extrapages/about.html">About</a>
          <a href="../extrapages/location.html">Location</a>
          <a href="../extrapages/contact.html"class="active">Contact Us</a>
          <a href="../extrapages/faq.html">FAQ</a>
          <a href="../extrapages/events.html">Events</a>
        </div>
      </div>
      <ul>
        <li> <a href="../index.html">Home</a></li>
        <li> <a href="../extrapages/about.html">About</a></li>
        <li> <a href="../extrapages/location.html">Location</a></li>
        <li> <a href="../extrapages/contact.html"class="active">Contact Us</a></li>
        <li> <a href="../extrapages/faq.html">FAQ</a></li>
        <li> <a href="../extrapages/events.html">Events</a></li>
      </ul>
    </nav>
  <img class="background" src="https://wallpapercave.com/wp/wp2872748.jpg" />
  <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name">
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="example@email.com">
    
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="(123) 456-7890">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write us something..." style="height:100px;"></textarea>

    <input type="submit" value="Send">

  </form>
</div>
</body>
</html>
