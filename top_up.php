
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 22px;
  font-weight: 300;
  border: none;
  outline: none;
  background-color:  #9fc4c6;
  border: 2px solid #ccc;
  border-radius: 50%;
  color: black;
  cursor: pointer;
/* transition: all 3s; */
  /* border-radius: 4px; */
}

#myBtn:hover {
  transform: translateY(-4px);
}
#myBtn img{
  width: 50px;
  height: 50px;
  border-radius: 50px;
}
</style>


<button onclick="topFunction()" id="myBtn" title="Go to top">
<img src="images/top-button.png" alt="" srcset=""></button>



<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


