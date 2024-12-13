<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Submitted Information</h2>
        <?php
        $servername = "sql304.infinityfree.com";
        $username = "if0_37897057";
        $password = "H1Z0wFAMRrqzx0T";
        $dbname = "if0_37897057_Student_database";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, email, mobile, state, city, previousMarks, jeeRank, branch, dob, address FROM admissions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<p><strong>Name:</strong> " . htmlspecialchars($row["name"]) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";
                echo "<p><strong>Mobile Number:</strong> " . htmlspecialchars($row["mobile"]) . "</p>";
                echo "<p><strong>State:</strong> " . htmlspecialchars($row["state"]) . "</p>";
                echo "<p><strong>City:</strong> " . htmlspecialchars($row["city"]) . "</p>";
                echo "<p><strong>Previous College Marks:</strong> " . htmlspecialchars($row["previousMarks"]) . "%</p>";
                echo "<p><strong>JEE Rank:</strong> " . htmlspecialchars($row["jeeRank"]) . "</p>";
                echo "<p><strong>Preferred Branch:</strong> " . htmlspecialchars($row["branch"]) . "</p>";
                echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($row["dob"]) . "</p>";
                echo "<p><strong>Address:</strong> " . htmlspecialchars($row["address"]) . "</p>";
                echo "<hr>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
