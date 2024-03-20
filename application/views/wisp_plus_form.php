<?php
defined('BASEPATH') or exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script defer src="assets/js/bootstrap.bundle.min.js"></script>
  <title>SSS Wisp Plus</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">

      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4" id="mainNav">
        <div class="container px-4">
          <a class="navbar-brand" href="#page-top">SSS Wisp-plus Form</a>
        </div>
      </nav>

      <div class="card bg-light border-dark-subtle" style="max-width: 54rem;">
        <div class="card-header bg-light">
          Generate Payment Reference Number (PRN)*
        </div>
        <div class="card-body">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="sssnumber" class="form-label">SSS Number *</label>
              <input type="text" class="form-control" id="sssnumber">
            </div>
            <div class="col-md-6">
              <label for="membertype" class="form-label">Member Type *</label>
              <select class="form-select" id="membertype" aria-label="Default select example">
                <option value="1">W - Employed</option>
                <option value="1">S - Self Employed</option>
                <option value="1">V - Voluntary Member</option>
                <option value="1">N - Non-Working Spouse</option>
                <option value="1">O - Overseas Filipino Worker</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="monthstart" class="form-label">Applicable Month (Start) *</label>
              <input type="month" class="form-control" id="monthstart">
            </div>
            <div class="col-md-6">
              <label for="monthend" class="form-label">Applicable Month (End) *</label>
              <input type="month" class="form-control" id="monthend">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Applicable Month (Start) *</label>
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

      <footer class="pt-2 mt-4">
        <ul class="nav justify-content-center border-bottom pb-1 mb-1">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">NPC Seal of Registration</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Terms & Conditions</a></li>
        </ul>
        <p class="text-center text-body-secondary">Copyright &copy; 2024 USSC. All rights reserved.</p>
      </footer>

    </div>
  </div>
</body>

</html>