<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head><body class="bg-light">
<div class="container mt-5">
  <div class="card p-4 mx-auto" style="max-width:400px;">
    <h3 class="mb-3">Login</h3>
    <form method="post">
      <input name="email" type="email" class="form-control mb-2" placeholder="Email" required>
      <input name="password" type="password" class="form-control mb-2" placeholder="Password" required>
      <button class="btn btn-success w-100">Login</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
      $stmt->execute([$_POST['email']]);
      $u = $stmt->fetch();
      if ($u && password_verify($_POST['password'], $u['password'])) {
        $_SESSION['user_id'] = $u['id'];
        $_SESSION['user_name'] = $u['name'];
        header("Location: dashboard.php");
        exit;
      } else {
        echo "<div class='alert alert-danger mt-2'>Invalid credentials.</div>";
      }
    }
    ?>
  </div>
</div>
</body></html>
