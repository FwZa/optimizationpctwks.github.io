<!-- Fawaz Farooq Ahmed - 2045884 -->
<!-- Ibrahim Basher Hamid - 2045910 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="global/css/main.css">
</head>

<body>
  <script src="validation.js"></script>
  <!-- include navbar -->
  <?php include './header'; ?>
  <div id="footer">
    <div class="container medium">
      <header class="major last">
        <h2>Questions or comments?</h2>
      </header>

      <!-- Form  -->
      <form id="feedbackForm" action="./submit" method="post" onsubmit="return validateFormAndShowMessage()">
        <fieldset>
          <legend>Personal Information</legend>

          <label for="name">Name</label>
          <input type="text" name="name" id="name">

          <label for="email">Email</label>
          <input type="email" name="email" id="email">

          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" id="phone">

          <div class="autowidth">
            <p style="text-align: center">Please select your age:</p>
            <input type="radio" id="age1" name="age" value="5-20">
            <label for="age1">5 - 20</label><br>
            <input type="radio" id="age2" name="age" value="21-30">
            <label for="age2">21 - 30</label><br>
            <input type="radio" id="age3" name="age" value="31-50">
            <label for="age3">31 - 50</label><br><br>
          </div>
          <br>
        </fieldset>

        <fieldset>
          <legend>Feedback</legend>

          <label for="satisfaction">Overall Satisfaction</label>
          <select name="satisfaction" id="satisfaction">
            <option value="">-- Please select --</option>
            <option value="very_satisfied">Very Satisfied</option>
            <option value="satisfied">Satisfied</option>
            <option value="neutral">Neutral</option>
            <option value="dissatisfied">Dissatisfied</option>
            <option value="very_dissatisfied">Very Dissatisfied</option>
          </select>

          <label for="liked_most">What did you like most about your experience?</label>
          <textarea name="liked_most" id="liked_most" rows="5"></textarea>

          <label for="could_improve">What could we have improved?</label>
          <textarea name="could_improve" id="could_improve" rows="5"></textarea>

          <label for="additional_feedback">Please share any additional feedback or suggestions.</label>
          <textarea name="additional_feedback" id="additional_feedback" rows="5"></textarea>

          <div class="raidoandcheck">
            <p style="text-align: center">Please select your favorite tool:</p>
            <input type="radio" id="SHUTUP10" name="fav_tool" value="SHUTUP10">
            <label for="SHUTUP10">O&O SHUTUP10++</label><br>
            <input type="radio" id="CTT" name="fav_tool" value="CTT">
            <label for="CTT">THE ULTIMATE WINDOWS UTILITY</label><br>
            <input type="radio" id="REVO" name="fav_tool" value="REVO">
            <label style="margin-bottom: 20px" for="REVO">REVO UNINSTALLER</label>

            <br>

            <p style="text-align: center; margin-top: 45px">Please check your games:</p>
            <input type="checkbox" name="games[]" id="cb1" value="Call of duty"><label for="cb1">Call of duty</label><br>
            <input type="checkbox" name="games[]" id="cb2" value="Fortnite"><label for="cb2">Fortnite</label><br>
            <input type="checkbox" name="games[]" id="cb3" value="Overwatch"><label for="cb3">Overwatch</label><br>
            <input type="checkbox" name="games[]" id="cb4" value="GTA5"><label for="cb4">GTA5</label><br>

          </div>
          <input style="width: 100%; margin-top: 13%" type="submit" value="Submit Feedback" class="submit-button">
        </fieldset>
      </form>
      <div id="submissionMessage" style="display: none;"></div>
      <?php include './footer'; ?>
    </div>
  </div>
</body>

</html>