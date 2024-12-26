<?php
// Include your database configuration file
require_once "../config.php"; 

// Prepare and execute the query
$query = "SELECT id, name, email FROM users";
$stmt = $pdo->prepare($query);
$stmt->execute();

// Fetch the results
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.html">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forgot_password.html">Forgot Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_users.php">Display Users</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container my-5">
        <h1 class="text-center mb-4">User List</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display data from the query result
                foreach ($users as $row) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['id']) . "</td>
                            <td>" . htmlspecialchars($row['name']) . "</td>
                            <td>" . htmlspecialchars($row['email']) . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
