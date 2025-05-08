<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php include 'navbar.php' ?>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <form action="act_room.php" method="post" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-header">
                    <h4>Customer Details</h4>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label>Room Type</label>
                      <select name="room_type" class="form-control" required>
                        <option value="" selected disabled >--SELECT ROOM--</option>
                        <option>Delux room</option>
                        <option>Delux cottage</option>
                        <option>Luxary cottage</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Hotel Name</label>
                      <input type="text" class="form-control" name="hotel_name" placeholder="Enter hotel Name" required>
                    </div>

                    <div class="form-group">
                      <label>Hotel username</label>
                      <input type="email" class="form-control" name="hotel_username" placeholder="Enter hotel Username" required>
                    </div>
                    <div class="form-group">
                      <label>Hotel Phone Number</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control phone-number" placeholder="Enter Mobile Number" name="contact_details" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" name="address" required></textarea>
                    </div>

                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="price" class="form-control" placeholder="e.g. 1500">
                    </div>
                    
                    <div class="form-group">
                      <label>Number of Guest</label>
                      <input type="text" name="allowed_people" class="form-control" placeholder="e.g. 2">
                    </div>
                    
                    <div class="form-group">
                      <label>Hotel Photo</label>
                      <input type="file" name="hotel_photo" class="form-control" >
                    
                    </div>
                    
                    <div class="form-group">
                      <label>Hotel Photo 1</label>
                      <input type="file" name="hotel_photo1" class="form-control" >
                    
                    </div>

                    <div class="form-group">
                      <label>Hotel Photo 2</label>
                      <input type="file" name="hotel_photo2" class="form-control" >
                    
                    </div>

                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                      <label>Star</label>
                      <input type="number" class="form-control" name="star" required >
                    </div>

                    <div class="form-group">
                      <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                    
                    
                  </div>
                </div>

              </form>
              </div>
            </div>         
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>