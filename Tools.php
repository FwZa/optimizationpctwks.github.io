<!-- Fawaz Farooq Ahmed - 2045884 -->
<!-- Ibrahim Basher Hamid - 2045910 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tools</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="global/css/main.css">
</head>

<body>
  <?php
  // Database configuration
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pcopt";

  try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to fetch tool names and links
    $sql = "SELECT tools.tool_name, tool_links.tool_link 
            FROM tools 
            JOIN tool_links ON tools.tool_id = tool_links.tool_id";

    // Execute query
    $stmt = $conn->query($sql);

    // Initialize an array to store tool data
    $tools = [];

    // Fetch the data and populate the array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $tools[] = [
        'name' => $row['tool_name'],
        'link' => $row['tool_link']
      ];
    }
    
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // Close connection
  $conn = null;
  ?>

  <!-- include navbar -->
  <?php include 'header.php'; ?>


  <div id="main">
    <header class="major container medium">
      <h2>
        PC optimization Tools help monitor
        <br>
        the system’s condition and improve
        <br>
        upon what is bad in the computer
      </h2>
    </header>
    <div class="box alt container">
      <section class="feature left">
        <a href="<?php echo $tools[0]['link']; ?>" class="image icon solid fa-signal"><img src="images/pic01.jpg" alt=""></a>
        <div class="content">
          <h3><?php echo $tools[0]['name']; ?></h3>
          <p>
            Using a very simple interface, you decide how Windows 10 and
            Windows 11 should respect your privacy by deciding which unwanted
            functions should be deactivated.
          </p>
        </div>
      </section>
      <section class="feature right">
        <a href="<?php echo $tools[1]['link']; ?>" class="image icon solid fa-code">
          <img src="images/pic02.jpg" alt="">
        </a>
        <div class="content">
          <h3><?php echo $tools[1]['name']; ?></h3>
          <p>
            This is a tool that has evolved over several years and achieves
            much more than just debloating a Windows install. You install the
            programs you select, which is a bigger selection than ninite. The
            classic debloat is there, but also includes a tweaks section with
            quality of life features.
          </p>
        </div>
      </section>
      <section class="feature left">
        <a href="<?php echo $tools[2]['link']; ?>" class="image icon solid fa-mobile-alt"><img src="images/pic03.jpg" alt=""></a>
        <div class="content">
          <h3><?php echo $tools[2]['name']; ?></h3>
          <p>
            The best option for thoroughly removing stubborn programmes,
            temporary files, and other unnecessary programme data that is left
            behind after the standard uninstall process. It does this by first
            running the program's built-in uninstaller and then scanning for
            leftover data. This replaces and enhances Windows' built-in
            functionality.
          </p>
        </div>
      </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>