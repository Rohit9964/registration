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
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($_POST['mobile']); ?></p>
    <p><strong>State:</strong> <?php echo htmlspecialchars($_POST['state']); ?></p>
    <p><strong>City:</strong> <?php echo htmlspecialchars($_POST['city']); ?></p>
    <p><strong>Previous College Marks:</strong> <?php echo htmlspecialchars($_POST['previousMarks']); ?>%</p>
    <p><strong>JEE Rank:</strong> <?php echo htmlspecialchars($_POST['jeeRank']); ?></p>
    <p><strong>Preferred Branch:</strong> <?php echo htmlspecialchars($_POST['branch']); ?></p>
    <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($_POST['address']); ?></p>
  </div>
</body>
</html>



