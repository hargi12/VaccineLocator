<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- datatables -->
 <?= link_tag('bootstrap/vendors/css/tables/datatable/datatables.min.css');?>
 <?= link_tag('bootstrap/css/table_style.css');?>

<!-- BEGIN: Content-->
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">ALL Health Facilities</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?=base_url('dashboard/hospitals')?>">Hospitals</a>
                  </li>
                  <li class="breadcrumb-item active">All Health Facilities
                  </li>
                </ol>
              </div>
            </div>
          </div>
</div>

<div class="content-body"><!-- List Of All Patients -->
<section id="patients-list">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Hospitals List</h2>
                    <div class="heading-elements">
                        <a href="<?php echo site_url('dashboard/index') ?>" class="btn btn-danger round btn-sm"><i class="la la-plus font-small-2"></i>
                            Add
                            Hospital</a>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-body card-dashboard">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered patients-list">
                            <thead>
                                <tr>
                                <th>Health Facility Name</th>
                                <th>Division</th>
                                <th>Latitude</th>   
                                <th>Longitude</th>                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                   foreach($hospitals as $hospital) {
                                  ?>
                                    <tr>
                                        <td><?php echo $hospital->health_facility;?></td>
                                        <td><?php echo $hospital->division;?></td>               
                                        <td><?php echo $hospital->lat;?></td>
                                        <td><?php echo $hospital->lng;?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>Health Facility Name</th>
                                <th>Division</th>
                                <th>Latitude</th>   
                                <th>Longitude</th> 
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>
<script src="<?php echo base_url('bootstrap/js/scripts/pages/hospital-patients-list.min.js')?>"></script>
<script src="<?php echo base_url('bootstrap/vendors/js/tables/datatable/datatables.min.js')?>"></script>
</script>