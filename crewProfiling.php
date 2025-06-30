<?php
include("header.html");
include("sidebar.html");
?>

<style>
    body {
        background: #f9f9f9;
        font-family: 'Segoe UI', sans-serif;
    }

    .section {
        background-color: gray;
        padding: 30px 0;
        width: 100%;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .form-wrapper {
        background-color: white;
        border: 1px solid #ddd;
        padding: 30px;
        border-radius: 10px;
        width: 100%;
    }

    .form-wrapper h5,
    .form-wrapper h6 {
        border-bottom: 1px solid orange;
        padding-bottom: 8px;
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
        color: #333;
        font-size: 16px;
    }

    .form-control:hover {
        border-color: orange;
        box-shadow: 0 0 5pxrgb(180, 180, 180)(255, 145, 0, 0.4);
        transition: all 0.3s ease-in-out;
    }

    select.form-control {
        appearance: none;
        background-color: white;
        color: black;
        padding: 0.5rem;
        border: 1px solid #ced4da;
        border-radius: 4px;
        background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23444' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.5 5.5l6 6 6-6H1.5z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 12px 12px;
        padding-right: 2rem;
    }

    select.form-control:hover,
    select.form-control:focus {
        border-color: orange !important;
        box-shadow: 0 0 5px #f97316(27, 91.10%, 39.80%, 0.60) !important;
        outline: none;
    }

  .btn-warning {
    background-color: #f97316; /* Match table header */
    border: none;
    color: white;
    border-radius: 8px;
    padding: 10px 30px;
    font-weight: bold;
    box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
    transition: none; /* Remove animations */
}

/* Keep the same color on hover, focus, and active */
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active {
    background-color: #f97316 !important;
    color: white;
    outline: none;
    box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
}



    /* Updated custom table styling */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
    }

    .custom-table thead {
        background-color: #f97316; /* Bright orange */
        color: white;
        text-align: left;
    }

    .custom-table th, .custom-table td {
        padding: 12px 16px;
        font-size: 14px;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .custom-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .remove-license-btn {
        background-color: #ef4444;
        color: white;
        border: none;
        padding: 6px 10px;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .section {
            padding: 20px;
        }

        .form-wrapper {
            padding: 20px;
        }
    }
</style>


<main id="main" class="main">
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form-wrapper">
                        <h5>CREW PROFILING</h5>
                        <form id="crewProfilingForm">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter full name" name="crewName">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Call Sign</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="E.g. CHI" name="callSign">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="gender">
                                        <option selected disabled>Choose...</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="dob">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="E.g. Nigeria" name="nationality">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="E.g. someone@example.com" name="email">
                                </div>
                            </div>

                            <!-- Updated Occupation to dropdown -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Occupation</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="occupation">
                                        <option selected disabled></option>
                                        <option value="Cabin Crew">Cabin Crew</option>
                                        <option value="Pilot">Pilot</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Moved this directly below Occupation -->
                            <hr class="my-4">
                            <h6>Licences</h6>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">License Name</label>
                                    <select class="form-control" id="licenseNameInput">
                                        <option selected disabled>Select license</option>
                                        <option value="Evacuation">Evacuation</option>
                                        <option value="Medical">Medical</option>
                                        <option value="Drilling">Fire Drilling</option>
                                        <option value="Cabin Crew License">Ditching</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">License Number</label>
                                    <input type="text" class="form-control" placeholder="Input here" id="licenseNumberInput">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">License Start Date</label>
                                    <input type="date" class="form-control" id="licenseStartDateInput">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">License Expiry Date</label>
                                    <input type="date" class="form-control" id="licenseExpiryDateInput">
                                </div>

                                <div class="col-12 text-center mt-2">
                                    <button type="button" class="btn btn-warning px-5" id="addLicenseBtn">Add</button>
                                </div>
                            </div>

                            <div id="licensesTableContainer" style="display:none;">
  <table id="licensesTable" class="custom-table">
    <thead>
      <tr>
        <th>S/N</th>
        <th>License Name</th>
        <th>License Number</th>
        <th>Start Date</th>
        <th>Expiry Date</th>
      </tr>
    </thead>
    <tbody id="licensesTableBody">
      <!-- JS adds rows here -->
    </tbody>
  </table>
</div>


                            </div>

                        <div class="col-12 text-center mt-4">
  <button type="submit" id="submitBtn" class="btn btn-warning px-5" style="display: none;">Submit</button>
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include("footer.html"); ?>

<link rel="stylesheet" href="style.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="crew.js"></script>
