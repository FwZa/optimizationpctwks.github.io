<!-- Fawaz Farooq Ahmed - 2045884 -->
<!-- Ibrahim Basher Hamid - 2045910 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcopt";

try {
  // Create PDO connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare SQL statement
  $stmt = $conn->prepare("INSERT INTO form (name, email, phone, age, satisfaction, liked_most, could_improve, additional_feedback, fav_tool, games) 
                          VALUES (:name, :email, :phone, :age, :satisfaction, :liked_most, :could_improve, :additional_feedback, :fav_tool, :games)");
 
 // Check if email already exists
 $stmt = $conn->prepare("SELECT email FROM form WHERE email = :email");
 $stmt->bindParam(':email', $_POST['email']);
 $stmt->execute();

 if ($stmt->rowCount() > 0) {
     // Email already exists
     echo "Error: Email already exists!";
 } else {
     // Insert new feedback
     $stmt = $conn->prepare("INSERT INTO form (name, email, phone, age, satisfaction, liked_most, could_improve, additional_feedback, fav_tool, games) 
                             VALUES (:name, :email, :phone, :age, :satisfaction, :liked_most, :could_improve, :additional_feedback, :fav_tool, :games)");
 }
  // Bind parameters
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':phone', $phone);
  $stmt->bindParam(':age', $age);
  $stmt->bindParam(':satisfaction', $satisfaction);
  $stmt->bindParam(':liked_most', $liked_most);
  $stmt->bindParam(':could_improve', $could_improve);
  $stmt->bindParam(':additional_feedback', $additional_feedback);
  $stmt->bindParam(':fav_tool', $fav_tool);
  $stmt->bindParam(':games', $games);

  // Collect and assign post data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $age = $_POST['age'];
  $satisfaction = $_POST['satisfaction'];
  $liked_most = $_POST['liked_most'];
  $could_improve = $_POST['could_improve'];
  $additional_feedback = $_POST['additional_feedback'];
  $fav_tool = $_POST['fav_tool'];
  // Assuming 'choice' is an array of selected games
  $games = isset($_POST['games']) ? implode(", ", $_POST['games']) : '';

  // Execute the prepared statement
  $stmt->execute();

  echo "Feedback submitted successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>