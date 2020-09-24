<?php $first_part="audience_group_list"; ?>
<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <head>
      <?php include 'common/style.php';?>
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
      <?php include 'common/menu.php';?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header common_h1">
            <div class="row">
               <div class="col-lg-12 col-sm-12 col-12">
                  <h1>
                     Audience group
                     <small>Create new and edit audience group</small>
                  </h1>
               </div>
            </div>
            <!-- <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li class="active">Dashboard</li>
               </ol> -->
         </section>
         <!-- Main content -->
         <section class="content p_0">
            <!-- Main row -->
            <div class="row">
               <div class="col-lg-12 col-sm-12 col-12">
                  <section class="campaign_wizard">
                     <div class="wizard">
                        <div class="grid_campaign_audience_group tab-content">
                           <div class="tab-pane d_block">
                              <!-- <h4>1.Create audience group</h4> -->
                              <form>
                                 <div class="row">
                                    <!--<div class="col-lg-8 col-sm-8 col-xs-12">
                                       <div class="form-group common_select">
                                          <label>Audience group names</label>
                                          <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                             <option selected="selected">Audience group names</option>
                                             <option>Single-line item</option>
                                             <option>Single-line item</option>
                                             <option>Single-line item</option>
                                             <option>Single-line item</option>
                                          </select>
                                          <small>Select existing or create new one</small>
                                       </div>
                                       </div>-->
                                    <div class="mb_3 grid_w_100">
                                       <div class="col-lg-8 col-sm-12 col-xs-12">
                                          <h4>Group details</h4>
                                          <!--<div class="row">
                                             <div class="col-lg-8 col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                   <label for="cam_name">Audience group name</label>
                                                   <input type="text" class="form-control" id="cam_name" placeholder="Audience group name">
                                                </div>
                                             </div>
                                             <div class="col-lg-4 col-sm-4 col-xs-12">
                                                <h4 class="grey">AUDIENCE SIZE</h4>
                                                <h2 class="audience_size"><img alt="audience" class="audience" src="dist/img/create_campaign_list/audience_size.png"> 28,076</h2>
                                             </div>
                                          </div>-->
									  <div class="row">
                                       <div class='col-md-8 col-sm-8 col-xs-12'>
                                          <div class="form-group common_select">
                                             <label>Audience group names</label>
                                             <select class="form-control select2" style="width: 100%;" placeholder="Search" onchange="showDiv('hidden_div', this)">
                                                <option selected="selected">Audience group names</option>
                                                <option value="Single-line item">Single-line item</option>
                                                <option value="Single-line item">Single-line item</option>
                                                <option value="Single-line item">Single-line item</option>
                                                <option value="Single-line item">Single-line item</option>
                                             </select>
                                             <small>Select an existing audience group</small>
                                          </div>
                                          <!-- /.form-group -->
                                       </div>
                                       <div class='col-md-4 col-sm-4 col-xs-12'>
                                          <div class="form-group common_select">
                                             <div id="hidden_div">
                                                <h5 class="grey">AUDIENCE SIZE</h5>
                                                <h2><img alt="audience" class="audience" src="dist/img/create_campaign_list/audience_size.png"> 28,078</h2>
                                             </div>
                                          </div>
                                          <!-- /.form-group -->
                                       </div>
                                    </div>
                                          <div class="row">
                                             <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <h4 class="grey">HOW DO YOU WANT TO CREATE THIS GROUP?</h4>
                                                <div class="d_block_div" data-toggle="buttons">
                                                   <div class="hide-show btn-group" data-toggle="buttons">
                                                      <!-- radio - hide/show -->
                                                      <label class="btn btn-primary active mr_0" >
                                                      <input type="radio" name="radio1" value="yes" checked /><i class="fa fa-check-circle" aria-hidden="true"></i> Apply filter condition</label>
                                                      <label class="btn btn-primary">
                                                      <input type="radio" name="radio1" value="no" /><i class="fa fa-check-circle" aria-hidden="true"></i> Upload a file</label>
                                                   </div>
                                                   <!-- #radio - hide/show -->
                                                   <div class="tab-content hide-show-yes">
                                                      <h4 class="grey">COLLECT VISITORS FROM</h4>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="row">
                                                            <div class="btn-group mr_0" data-toggle="buttons">
                                                               <label class="btn btn-primary active">
                                                               <input type="radio" name="options" id="option1" autocomplete="off"> <i class="fa fa-check-circle" aria-hidden="true"></i> All Brands
                                                               </label>
                                                               <label class="btn btn-primary">
                                                               <input type="radio" name="options" id="option2" autocomplete="off"> <i class="fa fa-check-circle" aria-hidden="true"></i> This Brands
                                                               </label>
                                                               <label class="btn btn-primary" id="show-hidden-menu">
                                                               <input type="radio" name="options" id="option3" autocomplete="off"> <i class="fa fa-check-circle" aria-hidden="true"></i> Specific Brands
                                                               </label>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--<div class="col-md-8 col-sm-8 col-xs-12">
                                                         <div class="row">
                                                            <div class="form-group common_select mt_3">
                                                               <label for="cam_name">Brand name</label>
                                                               <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                                                  <option selected="selected">Brand details</option>
                                                                  <option>Single-line item</option>
                                                                  <option>Single-line item</option>
                                                                  <option>Single-line item</option>
                                                                  <option>Single-line item</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>-->
													  <div class="col-md-8 col-sm-8 col-xs-12">
                                                         <div class="row">
														<div class="form-group multi_select hidden-menu" style="display: none;">
														<label>Select Brands </label>
														<select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
														style="width: 100%;">
														<option>Alabama</option>
														<option>Alaska</option>
														<option>California</option>
														<option>Delaware</option>
														<option>Tennessee</option>
														<option>Texas</option>
														<option>Washington</option>
														</select>
														</div>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="row">
                                                            <h4 class="grey">GENDER</h4>
                                                            <div class="btn-group mr_0 mb_3" data-toggle="buttons">
                                                               <label class="btn btn-primary active">
                                                               <input type="radio" name="options" id="option1" autocomplete="off" checked> <i class="fa fa-check-circle" aria-hidden="true"></i> Male
                                                               </label>
                                                               <label class="btn btn-primary">
                                                               <input type="radio" name="options" id="option2" autocomplete="off"> <i class="fa fa-check-circle" aria-hidden="true"></i> Female
                                                               </label>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="row">
                                                            <h4 class="grey">AGE</h4>
                                                            <div class="input-group col-md-4">
                                                               <span class="button-checkbox input-group-btn">
                                                               <button type="button" class="btn check_box" data-color="primary">All</button>
                                                               <input type="checkbox" class="hidden" checked />
                                                               </span>
                                                               <!--<span class="button-checkbox input-group-btn">
                                                               <button type="button" class="btn check_box diabled" disabled data-color="primary">13-17</button>
                                                               <input type="checkbox" class="hidden" />
                                                               </span>-->
															   <span class="button-checkbox input-group-btn">
                                                               <button type="button" class="btn check_box" data-color="primary">13-17</button>
                                                               <input type="checkbox" class="hidden" />
                                                               </span>
                                                               <span class="button-checkbox input-group-btn">
                                                               <input type="checkbox" class="hidden" checked />
                                                               <button type="button" class="btn check_box" data-color="primary">18-25</button>
                                                               </span>
                                                               <span class="button-checkbox input-group-btn">
                                                               <input type="checkbox" class="hidden" />
                                                               <button type="button" class="btn check_box" data-color="primary">26-35</button>
                                                               </span>
                                                               <span class="button-checkbox input-group-btn">
                                                               <input type="checkbox" class="hidden" />
                                                               <button type="button" class="btn check_box" data-color="primary">36-45</button>
                                                               </span>
                                                               <span class="button-checkbox input-group-btn">
                                                               <input type="checkbox" class="hidden" />
                                                               <button type="button" class="btn check_box" data-color="primary">46-55</button>
                                                               </span>
                                                               <span class="button-checkbox input-group-btn">
                                                               <input type="checkbox" class="hidden" />
                                                               <button type="button" class="btn check_box" data-color="primary">56-65</button>
                                                               </span>
                                                               <span class="button-checkbox input-group-btn">
                                                               <input type="checkbox" class="hidden" />
                                                               <button type="button" class="btn check_box" data-color="primary">65+</button>
                                                               </span>
                                                            </div>
                                                            <div class="checkbox">
                                                               <label>
                                                               <input type="checkbox" > Regulated content *</label> <small class="left_12"> Age restriction required</small>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="row">
                                                            <h4 class="grey">DEVICES</h4>
                                                            <div class="btn-group mr_0 mb_3 text_caps" data-toggle="buttons">
                                                               <label class="btn btn-primary active">
                                                               <input type="radio" name="options" id="option1" autocomplete="off" checked> <i class="fa fa-check-circle" aria-hidden="true"></i> Android
                                                               </label>
                                                               <label class="btn btn-primary">
                                                               <input type="radio" name="options" id="option2" autocomplete="off"> <i class="fa fa-check-circle" aria-hidden="true"></i> iOS
                                                               </label>
                                                               <label class="btn btn-primary">
                                                               <input type="radio" name="options" id="option2" autocomplete="off"> <i class="fa fa-check-circle" aria-hidden="true"></i> Both
                                                               </label>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
													<div class="row">
													<h4 class="grey">ABSENT / FREQUENT VISITORS</h4>
													<div class="radio col-md-3 col-sm-3 col-xs-6">
													<label>
													<input type="radio" name="optionsRadios" checked="checked" value="2"  />Absent
													</label>
													</div>
													<div class="radio mt_10 col-md-3 col-sm-3 col-xs-6">
													<label>
													<input type="radio" name="optionsRadios" value="3" />Frequent
													</label>
													</div>
													<div class="col-md-8 col-sm-8 col-xs-12">
													<div id="absent_frequent2" class="absent_frequent">
													<div class="form-group common_select mt_3" >
													<label for="cam_name">Timeline</label>
													<select class="form-control select2" style="width: 100%;" placeholder="Search">
													<option selected="selected">Time line of audience</option>
													<option>15 days</option>
													<option>30 days</option>
													<option>60 days</option>
													<option>90 days</option>
													<option>180 days</option>
													</select>
													</div>
													</div>
													<div id="absent_frequent3" class="absent_frequent" style="display: none;">
													<div class="form-group common_select mt_3" >
													<div class="row">
													<div class="col-lg-12 col-sm-12 col-xs-12">
													<div class="form-group common_select mt_3" >
													<label for="cam_name">Timeline</label>
													<select class="form-control select2" style="width: 100%;" placeholder="Search">
													<option selected="selected">Time line of audience</option>
													<option>15 days</option>
													<option>30 days</option>
													<option>60 days</option>
													<option>90 days</option>
													<option>180 days</option>
													</select>
													</div>
													</div>
													<div class="col-lg-6 col-sm-6 col-xs-6">
													<!-- Date -->
													<div class="form-group">
													<div class="input-group date">
													<div class="input-group-addon">
													<img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
													</div>
													<input type="text" class="form-control pull-right datepicker" placeholder="Start date">
													</div>
													<!-- /.input group -->
													</div>
													</div>
													<div class="col-lg-6 col-sm-6 col-xs-6">
													<!-- Date -->
													<div class="form-group">
													<div class="input-group date">
													<div class="input-group-addon">
													<img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
													</div>
													<input type="text" class="form-control pull-right datepicker" placeholder="End date">
													</div>
													<!-- /.input group -->
													</div>
													</div>
													</div>
													</div>
													</div>
													</div>
													</div>
                                                      </div>
                                                   </div>
                                                   <!-- #yes -->
                                                   <div class="tab-content hide-show-no">
                                                      <h4 class="grey">COLLECT VISITORS FROM</h4>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="row">
                                                            <div class="col-md-12 uploader" id="file-upload-form" >
                              <form id="file-upload-form" class="uploader">
                              <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                              <label for="file-upload" id="file-drag">
                              <img id="file-image" src="#" alt="Preview" class="hidden">
                              <div id="start">
                              <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                              <div>Upload your profile</div>
                              <div id="notimage" class="hidden">Please select an image</div>
                              <span id="file-upload-btn" class="btn btn-success" data-toggle="modal" data-target=".upload_modal">Upload</span>
                              </div>
                              <div id="response" class="hidden">
                              <div id="messages"></div>
                              <progress class="progress" id="file-progress" value="0">
                              <span>0</span>%
                              </progress>
                              </div>
                              </label>
                              </form>
                              </div>
                              </div>
                              </div>
                              </div>
                              </div>
                              </div>
							  <div class="col-lg-12 col-sm-12 col-xs-12">
							  <ul class="list-inline fot_btn">
                              <!--<li><button type="button" class="btn btn-default next-step">Save draft</button></li>-->
                              <li><input type="submit" class="btn btn-info next-step" value="SAVE"></li>
                              <!--<li><a href="#" class="btn btn-danger next-step no_border">Cancel</a></li>-->
                           </ul>
							  </div>
                              </div>
                              </div>
                              </div>
                              </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <!-- /.row (main row) -->
         </section>
         <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php //include 'common/footer.php';?>
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- Modal -->
      <div class="modal fade upload_modal" id="" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">How do you want to save this group?</h4>
               </div>
               <div class="modal-body templates_tab tab-content">
                  <button class="btn btn-info mt_3">CREATE NOW</button>
                  <button class="btn btn-warning mt_3">UPDATE EXISTING</button>
                  <button class="btn btn-default mt_3">CANCEL</button>
               </div>
            </div>
         </div>
      </div>
      <?php include 'common/script.php';?>
      <script>
         //Date range picker
             $('#reservation').daterangepicker()
      </script>
      <script>
         function changeLanguage(language) {
             var element = document.getElementById("url");
             element.value = language;
             element.innerHTML = language;
         }
         
         function showDropdown() {
             document.getElementById("myDropdown").classList.toggle("show");
         }
         
         // Close the dropdown if the user clicks outside of it
         window.onclick = function(event) {
             if (!event.target.matches('.dropbtn')) {
                 var dropdowns = document.getElementsByClassName("dropdown-content");
                 var i;
                 for (i = 0; i < dropdowns.length; i++) {
                     var openDropdown = dropdowns[i];
                     if (openDropdown.classList.contains('show')) {
                         openDropdown.classList.remove('show');
                     }
                 }
             }
         }
      </script>
      <script>
         $(document).ready(function () {
          //Initialize tooltips
          $('.nav-tabs > li a[title]').tooltip();
          
          //Wizard
          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
         
              var $target = $(e.target);
          
              if ($target.parent().hasClass('disabled')) {
                  return false;
              }
          });
         
          $(".next-step").click(function (e) {
         
              var $active = $('.wizard .nav-tabs li.active');
              $active.next().removeClass('disabled');
              nextTab($active);
         
          });
          $(".prev-step").click(function (e) {
         
              var $active = $('.wizard .nav-tabs li.active');
              prevTab($active);
         
          });
         });
         
         function nextTab(elem) {
          $(elem).next().find('a[data-toggle="tab"]').click();
         }
         function prevTab(elem) {
          $(elem).prev().find('a[data-toggle="tab"]').click();
         }
      </script>
      <script>
         $(function () {
         $('.select2').select2()
         });
      </script>
      <script>
         $('#my-btns .btn').on('click', function(event) {
           console.log($(this).find('input').val());
           var val = $(this).find('input').val();
           $('#output').html(val);
         });
      </script>
      <script>
         // File Upload
         // 
         function ekUpload(){
           function Init() {
         
             //console.log("Upload Initialised");
         
             var fileSelect    = document.getElementById('file-upload'),
                 fileDrag      = document.getElementById('file-drag'),
                 submitButton  = document.getElementById('submit-button');
         
             fileSelect.addEventListener('change', fileSelectHandler, false);
         
             // Is XHR2 available?
             var xhr = new XMLHttpRequest();
             if (xhr.upload) {
               // File Drop
               fileDrag.addEventListener('dragover', fileDragHover, false);
               fileDrag.addEventListener('dragleave', fileDragHover, false);
               fileDrag.addEventListener('drop', fileSelectHandler, false);
             }
           }
         
           function fileDragHover(e) {
             var fileDrag = document.getElementById('file-drag');
         
             e.stopPropagation();
             e.preventDefault();
         
             fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
           }
         
           function fileSelectHandler(e) {
             // Fetch FileList object
             var files = e.target.files || e.dataTransfer.files;
         
             // Cancel event and hover styling
             fileDragHover(e);
         
             // Process all File objects
             for (var i = 0, f; f = files[i]; i++) {
               parseFile(f);
               uploadFile(f);
             }
           }
         
           // Output
           function output(msg) {
             // Response
             var m = document.getElementById('messages');
             m.innerHTML = msg;
           }
         
           function parseFile(file) {
         
             console.log(file.name);
             output(
               '<strong>' + encodeURI(file.name) + '</strong>'
             );
             
             // var fileType = file.type;
             // console.log(fileType);
             var imageName = file.name;
         
             var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
             if (isGood) {
               document.getElementById('start').classList.add("hidden");
               document.getElementById('response').classList.remove("hidden");
               document.getElementById('notimage').classList.add("hidden");
               // Thumbnail Preview
               document.getElementById('file-image').classList.remove("hidden");
               document.getElementById('file-image').src = URL.createObjectURL(file);
             }
             else {
               document.getElementById('file-image').classList.add("hidden");
               document.getElementById('notimage').classList.remove("hidden");
               document.getElementById('start').classList.remove("hidden");
               document.getElementById('response').classList.add("hidden");
               document.getElementById("file-upload-form").reset();
             }
           }
         
           function setProgressMaxValue(e) {
             var pBar = document.getElementById('file-progress');
         
             if (e.lengthComputable) {
               pBar.max = e.total;
             }
           }
         
           function updateFileProgress(e) {
             var pBar = document.getElementById('file-progress');
         
             if (e.lengthComputable) {
               pBar.value = e.loaded;
             }
           }
         
           function uploadFile(file) {
         
             var xhr = new XMLHttpRequest(),
               fileInput = document.getElementById('class-roster-file'),
               pBar = document.getElementById('file-progress'),
               fileSizeLimit = 1024; // In MB
             if (xhr.upload) {
               // Check if file is less than x MB
               if (file.size <= fileSizeLimit * 1024 * 1024) {
                 // Progress bar
                 pBar.style.display = 'inline';
                 xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                 xhr.upload.addEventListener('progress', updateFileProgress, false);
         
                 // File received / failed
                 xhr.onreadystatechange = function(e) {
                   if (xhr.readyState == 4) {
                     // Everything is good!
         
                     // progress.className = (xhr.status == 200 ? "success" : "failure");
                     // document.location.reload(true);
                   }
                 };
         
                 // Start upload
                 xhr.open('POST', document.getElementById('file-upload-form').action, true);
                 xhr.setRequestHeader('X-File-Name', file.name);
                 xhr.setRequestHeader('X-File-Size', file.size);
                 xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                 xhr.send(file);
               } else {
                 output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
               }
             }
           }
         
           // Check for the various File API support.
           if (window.File && window.FileList && window.FileReader) {
             Init();
           } else {
             document.getElementById('file-drag').style.display = 'none';
           }
         }
         ekUpload();
      </script>
      <script>
         $(function () {
         $('.button-checkbox').each(function () {
         
          // Settings
          var $widget = $(this),
              $button = $widget.find('button'),
              $checkbox = $widget.find('input:checkbox'),
              color = $button.data('color'),
              settings = {
                on: {
                  icon: ''//'glyphicon glyphicon-check'
                },
                off: {
                  icon: ''//'glyphicon glyphicon-unchecked'
                }
              };
         
          // Event Handlers
          $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
          });
          $checkbox.on('change', function () {
            updateDisplay();
          });
         
          // Actions
          function updateDisplay() {
            var isChecked = $checkbox.is(':checked');
         
            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");
         
            // Set the button's icon
            $button.find('.state-icon')
              .removeClass()
              .addClass('state-icon ' + settings[$button.data('state')].icon);
         
            // Update the button's color
            if (isChecked) {
              $button
                .removeClass('btn-default')
                .addClass('btn-' + color + ' active');
            }
            else {
              $button
                .removeClass('btn-' + color + ' active')
                .addClass('btn-default');
            }
          }
         
          // Initialization
          function init() {
         
            updateDisplay();
         
            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
              $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
          }
          init();
         });
         });
      </script>
      <script>
         $(document).ready(function(){
              /*$("input[type='button']").click(function(){
              	var radioValue = $("input[name='gender']:checked").val();
                  if(radioValue){
                      alert("Your are a - " + radioValue);
                  }
              });*/
              
         $('.absent, .frequent').hide();
              $("input[type='radio']").click(function(){
              	var radioValue = $("input[name='optionsRadios']:checked").val();
                //alert(radioValue);
                $('.'+ radioValue).slideDown().siblings().slideUp();
                
              });
         
         $('.brand_name, .profile_upload').hide();
              $("input[type='radio']").click(function(){
              	var radioValue = $("input[name='optionsRadios']:checked").val();
                //alert(radioValue);
                $('.'+ radioValue).slideDown().siblings().slideUp();
                
              });
         
         /*$('.content div').click(function(){
          alert($(this).attr('class'));
         })
         */     
          });
      </script>
      <script>
         $('.hide-show input').change(function () {
             $(this).closest('.hide-show').next('.hide-show-yes').toggle(this.value == 'yes').next('.hide-show-no').toggle(this.value == 'no');
         }).filter(':checked').change();
         	  
      </script>
<script>
$(document).ready(function() {
$("input[name$='optionsRadios']").click(function() {
var test = $(this).val();

$(".absent_frequent").hide();
$("#absent_frequent" + test).show();
});
});
</script>
	   <script>
         $(function () {
         $('.select2').select2()
           //Date picker
           $('.datepicker').datepicker({
         format: 'M/dd/yyyy',
             autoclose: true
           })//.datepicker("setDate", new Date);  
         $('#datepicker_to').datepicker({
             autoclose: true
           })
           //Timepicker
           $('.timepicker').timepicker({
             showInputs: false
           })
         })
      </script>
	  <script>
         function showDiv(divId, element)
         {
         document.getElementById(divId).style.display = element.value == 'Single-line item' ? 'block' : 'none';
         }
      </script>
	  <script>
	  $(document).ready(function() {
  $('#show-hidden-menu').click(function() {
    $('.hidden-menu').slideToggle("slow");
    // Alternative animation for example
    // slideToggle("fast");
  });
});
	  </script>
   </body>
</html>