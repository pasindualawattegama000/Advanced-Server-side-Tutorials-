<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Search for Books</h2>
    <br>
    <form action="index.php" method="POST">

        <label for="title">Title</label> 
        <br>
        <input type="text" id="title" name="title">
        <br>

        <label for="author">Title</label> 
        <br>
        <input type="text" id="author" name="author">
        <br>

        <label for="year">Title</label> 
        <br>
        <input type="number" id="year" name="year">
        <br>
        <button type="submit">Check</button>
        <br>
    </form>

    <?php 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
        // Database connection parameters
        $servername = "localhost";
        $username = "root"; // default username for XAMPP
        $password = ""; // default password for XAMPP
        $dbname = "my_database"; // the name of your database
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Construct SQL query based on form input
        $sql = "SELECT * FROM books WHERE 1=1";
        if (!empty($_POST["title"])) {
            $sql .= " AND title LIKE '%" . $_POST["title"] . "%'";
        }
        if (!empty($_POST["author"])) {
            $sql .= " AND author LIKE '%" . $_POST["author"] . "%'";
        }
        if (!empty($_POST["year"])) {
            $sql .= " AND year_of_publication = " . $_POST["year"];
        }
    
        echo "{$sql}";
        // Execute the query
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Output data of each row
            echo "<h3>Matching Books:</h3>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["title"] . " by " . $row["author"] . " (" . $row["year_of_publication"] . ") - $" . $row["price"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No matching books found.";
        }
    
        // Close connection
        $conn->close();
    }
    
    ?>
</body>
</html>