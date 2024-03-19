<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script defer src="assets/js/bootstrap.bundle.min.js"></script>
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div class="container">

  <div class="container">
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>
  </div>

</div>

<footer class="pt-2 mt-2 fixed-bottom">
  <ul class="nav justify-content-center border-bottom pb-1 mb-1">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Privacy Policy</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">NPC Seal of Registration</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Terms & Conditions</a></li>
  </ul>
  <p class="text-center text-body-secondary">Copyright &copy; 2024 USSC. All rights reserved.</p>
</footer>

</body>
</html>
