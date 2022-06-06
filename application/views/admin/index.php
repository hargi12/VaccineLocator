<style>
  form {
    max-width: 800px;
    display: block;
    margin: 0 auto;
  }
</style>

<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Add Health Facility</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#show daily clients here">Health Facility</a>
              </li>
              <li class="breadcrumb-item active">Add Health Facility
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Add Patient Form Wizard -->
      <section id="add-patient">
        <div class="card">
          <form class="p-3 col-8" id="form">
            <div class="form-group">
              <label for="name">Health Facility Name</label>
              <input type="text" class="form-control" id="fullname" placeholder="Health Facility Name"/>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-4">
                  <label for="otherField1">Latitude</label>
                  <input type="text" class="form-control w-100"  id="latitude" placeholder="Latitude"/>
                </div>
                <div class="col-4">
                  <label for="otherField1">Longitude</label>
                  <input type="decimal" class="form-control w-100"  id="longitude" placeholder="Longitude"/>
                </div>
                <div class="col-4">
                  <label for="otherField1">Division</label>
                  <input type="text" class="form-control w-100" id="division" placeholder="Division"/>
                </div>
              </div>
            </div>
            <button type="submit" id="addFacility" class="btn btn-outline-success btn-block"><i class="ft-save"></i> SAVE Facility to Database</button>
            </div>
        </form>
    </section>
  </div>
  </div>

  <script src="<?php echo base_url("bootstrap/js/jquery-3.6.0.min.js") ?>"></script>
  <script src="<?php echo base_url("bootstrap/js/toastr.min.js") ?>"></script>

  </section>
</div>

<script>

  // This script handles the form validation and insertion to db
  $(document).on("click", "#addFacility", function(e) {
    e.preventDefault();
    //alert("test");
    var fullname = $('#fullname').val();
    var latitude = $('#latitude').val();
    var longitude = $('#longitude').val();
    var division = $('#division').val();

    $.ajax({
      url: "<?php echo base_url(); ?>insert",
      type: "post",
      dataType: "json",
      data: {
        health_facility: fullname,
        lat: latitude,
        lng: longitude,
        division: division

      },
      success: function(data) {
        console.log(data);
        // use toastr to notify the data save and error
        if (data.response == "success") {
          toastr["success"](data.message);
          toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        } else {
          toastr["error"](data.message);
          toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }

        }
      }
    });
    // reset form data after submission
    $("#form")[0].reset();

  });
</script>