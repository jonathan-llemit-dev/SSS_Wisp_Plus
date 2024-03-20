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
              <label for="sss_number" class="form-label">SSS Number *</label>
              <input type="text" class="form-control" id="sss_number">
            </div>
            <div class="col-md-6">
              <label for="membertype" class="form-label">Member Type *</label>
              <select class="form-select" id="membertype" aria-label="Default select example">
                <option value="0">W - Employed</option>
                <option value="1">S - Self Employed</option>
                <option value="2">V - Voluntary Member</option>
                <option value="4">N - Non-Working Spouse</option>
                <option value="5">O - Overseas Filipino Worker</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="month_start" class="form-label">Applicable Month (Start) *</label>
              <input type="month" class="form-control" id="month_start">
            </div>
            <div class="col-md-6">
              <label for="month_end" class="form-label">Applicable Month (End) *</label>
              <input type="month" class="form-control" id="month_end">
            </div>
            <div class="col-md-6">
              <label for="contribution_amount" class="form-label">Contribution Amount *</label>
              <select class="form-select" id="contribution_amount" name="contribution_amount"
                aria-label="Default select example" required>
                <option value="">Select Premium</option>
                <option value="4200">4,200</option>
                <option value="4130">4,130</option>
                <option value="4060">4,060</option>
                <option value="3990">3,990</option>
                <option value="3920">3,920</option>
                <option value="3850">3,850</option>
                <option value="3780">3,780</option>
                <option value="3710">3,710</option>
                <option value="3640">3,640</option>
                <option value="3570">3,570</option>
                <option value="3500">3,500</option>
                <option value="3430">3,430</option>
                <option value="3360">3,360</option>
                <option value="3290">3,290</option>
                <option value="3220">3,220</option>
                <option value="3150">3,150</option>
                <option value="3080">3,080</option>
                <option value="3010">3,010</option>
                <option value="2940">2,940</option>
                <option value="2870">2,870</option>
                <option value="2800">2,800</option>
                <option value="2730">2,730</option>
                <option value="2660">2,660</option>
                <option value="2590">2,590</option>
                <option value="2520">2,520</option>
                <option value="2450">2,450</option>
                <option value="2380">2,380</option>
                <option value="2310">2,310</option>
                <option value="2240">2,240</option>
                <option value="2170">2,170</option>
                <option value="2100">2,100</option>
                <option value="2030">2,030</option>
                <option value="1960">1,960</option>
                <option value="1890">1,890</option>
                <option value="1820">1,820</option>
                <option value="1750">1,750</option>
                <option value="1680">1,680</option>
                <option value="1610">1,610</option>
                <option value="1540">1,540</option>
                <option value="1470">1,470</option>
                <option value="1400">1,400</option>
                <option value="1330">1,330</option>
                <option value="1260">1,260</option>
                <option value="1190">1,190</option>
                <option value="1120">1,120</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="wisp_plus_amount" class="form-label">Wisp Plus Amount</label>
              <input type="number" class="form-control" id="wisp_plus_amount">
            </div>
            <div class="col-md-12">
              <label for="wisppChecked" class="form-label">Wisp Plus Only</label>
              <input class="form-check-input" type="checkbox" value="" id="wisppChecked">
            </div>
            <div class="col-md-12">
              <label for="total_amount" class="form-label">Total Amount</label>
              <input type="number" class="form-control" id="total_amount" disabled readonly>
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