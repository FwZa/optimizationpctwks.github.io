<!-- Fawaz Farooq Ahmed - 2045884 -->
<!-- Ibrahim Basher Hamid - 2045910 -->
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