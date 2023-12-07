
function validateFormAndShowMessage() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var ageSelected = document.querySelector('input[name="age"]:checked');
  var satisfaction = document.getElementById("satisfaction").value;
  var likedMost = document.getElementById("liked_most").value;
  var couldImprove = document.getElementById("could_improve").value;
  var additionalFeedback = document.getElementById("additional_feedback").value;
  var favToolSelected = document.querySelector('input[name="fav_tool"]:checked');

  // Name validation
  if (name.trim() === "") {
    alert("Please enter your name.");
    return false;
  }

  // Email validation
  if (email.trim() === "" || !email.includes('@')) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Phone validation
  if (phone.trim() === "") {
    alert("Please enter your phone number.");
    return false;
  }

  // Phone validation
  var phone = document.getElementById("phone").value;

  // Check if phone number starts with 966 and is 12 digits in total
  if (!/^[1-9]\d{0,3}\d{9,}$/.test(phone)) {
    alert("Phone number must start with Country Code (966,...) and contains only numbers.");
    return false;
  }



  // Age selection validation
  if (!ageSelected) {
    alert("Please select your age range.");
    return false;
  }

  // Satisfaction selection validation
  if (satisfaction === "") {
    alert("Please select your overall satisfaction.");
    return false;
  }

  // Liked most validation
  if (likedMost.trim() === "") {
    alert("Please tell us what you liked most about your experience.");
    return false;
  }

  // Could improve validation
  if (couldImprove.trim() === "") {
    alert("Please provide suggestions for improvement.");
    return false;
  }

  // Additional feedback validation
  if (additionalFeedback.trim() === "") {
    alert("Please share any additional feedback or suggestions.");
    return false;
  }

  // Favorite tool validation
  if (!favToolSelected) {
    alert("Please select your favorite tool.");
    return false;
  }
   // If validation passes, show a success message
   var submissionMessage = document.getElementById("submissionMessage");
   submissionMessage.innerHTML = "<p style='color: yellow; font-size: 18px;'>Thank you for your feedback!</p>";
   submissionMessage.style.display = "block";
  // If all validations pass
  
  return true;
}
