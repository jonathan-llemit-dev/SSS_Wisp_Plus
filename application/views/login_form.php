<?php
defined('BASEPATH') or exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script defer src="assets/js/bootstrap.bundle.min.js"></script>
  <title>Login</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">

      <div class="container mt-5 mb-5 d-flex justify-content-center">
        <img src="assets/logo/ussc_logo.png" class="" alt="ussc_logo" style="max-width: 250px;">
      </div>

      <div class="card bg-light border-dark-subtle" style="max-width: 25rem;">
        <h5 class="card-header bg-light text-center">
          Wisp Plus Login
        </h5>
        <div class="card-body">
          <form class="row g-3">
            <div class="col-md-12">
              <label for="employee_number" class="form-label">Employee Number *</label>
              <input type="number" class="form-control" id="employee_number">
            </div>
            <div class="col-md-12">
              <label for="otp_number" class="form-label">OTP *</label>
              <input type="number" class="form-control" id="otp_number">
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary" style="width: 150px;">Login</button>
            </div>
          </form>
        </div>
      </div>

      <footer class="pt-2 mt-4 fixed-bottom" style="background-color: #483285;">
        <ul class="nav justify-content-center border-bottom pb-1 mb-1">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">NPC Seal of Registration</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Terms & Conditions</a></li>
        </ul>
        <p class="text-center text-white">Copyright &copy; 2024 USSC. All rights reserved.</p>
      </footer>

    </div>
  </div>
</body>

</html>