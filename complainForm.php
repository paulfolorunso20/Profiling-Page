<?php
include("header.html");
include("sidebar.html");
?>

<main id="main" class="main">
  <section class="section">
    <div class="row">
      <div class="card w-100 custom-card">
        <div class="card-body">

          <div class="text-center">
            <h4>Log your Complains</h4>
          </div>

          <form id="complaintForm">
            <div class="form-group">
              <label for="from" class="form-label">Ticket From</label>
              <input type="text" class="form-control" id="from" placeholder="Enter here">
            </div>

            <div class="form-group">
              <label for="to" class="form-label">Ticket To</label>
              <select class="form-select" id="to" name="to" required>
                <option value="" disabled selected hidden>Select department</option>
                <option value="good">Good</option>
              </select>
            </div>

            <div class="form-group">
              <label for="types" class="form-label">Ticket Types</label>
              <select class="form-select" id="types" name="types" required>
                <option value="" disabled selected hidden>Select types</option>
                <option value="good">Good</option>
              </select>
            </div>

            <div class="form-group">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" style="height: 200px" placeholder="Enter complains"></textarea>
            </div>

            <div class="button-container text-center">
              <button type="button" class="btn btn-primary" onclick="submitcomplain()">
                Submit
              </button>
            </div>
          </form>

          <!-- Modal for Success Message -->

          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float: right;"></button>
        <div class="iconslist">
          <div class="icon">
            <i class="bi bi-patch-check-fill"></i>
            <div class="label">Ticket successfully sent</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>                                                                                                                                                                                                                                                                          


          <!-- <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body text-center">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float: right;"></button>
                  <div class="iconslist">
                    <div class="icon">
                      <i class="bi bi-patch-check-fill"></i>
                      <div class="label" style="font-size: 20px; color: #000000;">
                        Ticket successfully sent
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div> <!-- End of card-body -->
      </div> <!-- End of card -->
    </div> <!-- End of row -->
  </section>
</main>

<?php include("footer.html"); ?>

<!-- Stylesheets -->
<link rel="stylesheet" href="style.css" />

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="act.js"></script>
