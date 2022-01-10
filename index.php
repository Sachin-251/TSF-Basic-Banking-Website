    <?php include('header.php'); ?>

    <div class="mySlides w3-display-container w3-center">
    <img src="./images/01.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h1 style="color:white; transform: translate(0,-400%);"><b>Trust, Loyalty, Respect.<b></h1>
    <div><a href="viewcustomers.php" class="front-button">View All Customers</a></div>
      <h2 style="color:white;">Trust</h2>
      <p><b>Over the time we have been the trust of our customers.</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/02.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h1 style="color:white; transform: translate(0,-400%);"><b>Trust, Loyalty, Respect.<b></h1>
    <div><a href="viewcustomers.php" class="front-button">View All Customers</a></div>
      <h2 style="color:white;">Loyalty</h2>
      <p><b>The trust came with the loyalty we have for the customers.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/03.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h1 style="color:white; transform: translate(0,-400%);"><b>Trust, Loyalty, Respect.<b></h1>
    <div><a href="viewcustomers.php" class="front-button">View All Customers</a></div>
      <h2 style="color:white;">Respect</h2>
      <p><b>We respect your privacy and guaranty the security of your hard-earned money.</b></p>    
    </div>
  </div>
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    <?php include('footer.php'); ?>
		

