<?php include('partials-front/menu.php'); ?>
</body>
</html>
<div class="contact-form">
    <h2>Book a Table</h2>
    <form action="#" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
  
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
  
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
  
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
  
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>
  
      <label for="guests">Number of Guests:</label>
      <input type="number" id="guests" name="guests" min="1" max="10" required>
  
      <label for="message">Additional Requests:</label>
      <textarea id="message" name="message"></textarea>
  
      <button type="submit">Book Now</button>
    </form>
  </div>
  <section class = "social">
    <div class= "container text-center"> 
<ul> 
    <li> 
         <a href="#"><img src="https://img.icons8.com/color/48/null/facebook-new.png"/></a>
         </li>
         <li>
         <a href="#"><img src="https://img.icons8.com/color/48/null/instagram-new--v1.png"/></a>
         </li>
         <li>
           <a href="#" ><img src="https://img.icons8.com/fluency/48/null/apple-mail.png"/></a>
        </li>
</ul>
</div>
</section>
    <!--social section ends here -->
    <!--footer section starts here -->
<section class = "footer">
<div class= "container text-center"> 
<p>
    All Rights Reserved. Designed By Zalika and Maia.
</p>
</div>
</section>
    <!--footer section ends here -->


</html>