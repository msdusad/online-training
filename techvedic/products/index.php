<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
      <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   <?php include("../classes/Include_all.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-sm-7 col-md-8 col-lg-9 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <ol class="breadcrumb noBorderRadius noMargin">
                <li><a href="<?php echo WEB_ROOT;?>problems/index.php">Problems</a></li>
              </ol>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" id="imageSelecter">
              <h2 class="h3 padding-bottom-10">Logitech Desktop Keyboard</h2>
              <ul class="nav nav-pills">
                <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab"><i class="icon-cubes"></i> Overview</a></li>
                <li><a href="#tab2" class="btn btn-default" data-toggle="tab"><i class="icon-book-1"></i> Relationships</a></li>
                <li><a href="#tab3" class="btn btn-default" data-toggle="tab"><i class="icon-desktop"></i> Requests</a></li>
              </ul>
              <div class="tab-content margin-top-20">
                <div class="tab-pane active" id="tab1">
                  <h2 class="h3">Hardware</h2>
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <tbody>
                        <tr>
                          <td class=" "><span class="text-grey">Product:</span> <a href="#">Cisco 7301 Router</a></td>
                          <td class=" "><span class="text-grey">Vendor:</span></td>
                        </tr>
                        <tr>
                          <td class=" "><span class="text-grey">Acquisition Date:</span> Fri, 22 Jul at 11:53 am</td>
                          <td class=" "><span class="text-grey">Warranty Expiry Date:</span> Fri, 22 Jul at 12:08 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- end -->
                  <h3 class="h3">Router</h3>
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <tbody>
                        <tr>
                          <td class=" "><span class="text-grey">Product:</span> <a href="#">Cisco 7301 Router</a></td>
                          <td class=" "><span class="text-grey">Vendor:</span></td>
                        </tr>
                        <tr>
                          <td class=" "><span class="text-grey">Acquisition Date:</span> Fri, 22 Jul at 11:53 am</td>
                          <td class=" "><span class="text-grey">Warranty Expiry Date:</span> Fri, 22 Jul at 12:08 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- end --> 
                </div>
                <div class="tab-pane" id="tab2">
                  <p> There are no Relationships available. <a href="<?php echo WEB_ROOT;?>products/addnewrelationship.php" class="green">Add new</a> </p>
                </div>
                <div class="tab-pane" id="tab3">
                  <p> There are no Asset available. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title"> <a href="#" class="btn btn-success noBorderRadius" data-toggle="modal" data-target="#attach">Attach</a> <a href="<?php echo WEB_ROOT;?>assets/new.php" class="btn btn-dark noBorderRadius">Edit</a> <a href="#" class="btn btn-danger noBorderRadius">Delete</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p><a href="#" data-toggle="tooltip" data-placement="top" title="Product">Apple MacBook Air 13</a></p>
              <form action="#" class="checkList">
                <h5 class="weight-600 padding-top-5">Edit Properties</h5>
                <label>Impact</label>
                <select class="form-control margin-bottom-10">
                     <?php
                        $impact_object=Assets::Impact('');
                        foreach ($impact_object as $impact_object_view) {
                        echo   '<option value="'.$impact_object_view["id"].'">'.$impact_object_view["name"].'</option>';
                        }
                        ?>
                </select>
              
                <label>Location</label>
                <div class="form-group">
                  <select class="select2_group form-control margin-bottom-10">
                    <?php
                        $location_object=Assets::Location('');
                        foreach ($location_object as $location_object_view) {
                        echo   '<option value="'.$location_object_view["id"].'">'.$location_object_view["location_name"].'</option>';
                        }
                        ?>
                  </select>
                </div>
                <label>Department</label>
                <select class="form-control margin-bottom-10">
                     <?php
                        $department_object=Assets::Department('');
                        foreach ($department_object as $department_object_view) {
                        echo   '<option value="'.$department_object_view["id"].'">'.$department_object_view["name"].'</option>';
                        }
                        ?>
                </select>
                <label>Used By</label>
                  <select class="form-control margin-bottom-10">
                 <?php
                        $requesters_object=Assets::Requester('');
                        foreach ($requesters_object as $requesters_object_view) {
                        echo   '<option value="'.$requesters_object_view["id"].'">'.$requesters_object_view["first_name"].'</option>';
                        }
                        ?>
                      </select>


                <label>Managed By</label>
                <select class="form-control margin-bottom-10">
                     <?php
                        $agrnts_object=Assets::Agents('');
                        foreach ($agrnts_object as $agrnts_object_view) {
                        echo   '<option value="'.$agrnts_object_view["id"].'">'.$agrnts_object_view["name"].'</option>';
                        }
                        ?>
                </select>
                <p class="text-right">
                  <button type="button" class="btn btn-dark noBorderRadius">Update<i class="icon-angle-double-right"></i></button>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<div class="modal fade" id="attach" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Attach a Relationship</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <p class="h4 padding-bottom-10">Relationship</p>
            <ul class="list-right">
              <li><a href="#" data-toggle="modal" data-target="#depends_on">Depends On</a></li>
              <li><a href="#">Uses</a></li>
            </ul>
          </div>
          <div class="col-sm-6">
            <p class="h4 padding-bottom-10">Inverse Relationship</p>
            <ul class="list-right">
              <li><a href="#">Used By</a></li>
              <li><a href="#">Used By</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>