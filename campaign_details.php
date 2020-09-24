<?php $first_part="dashboard"; ?>
<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <?php include 'common/style.php';?>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <?php include 'common/menu.php';?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper pr__0">
            <!-- Content Header (Page header) -->
            <section class="content-header common_h1">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-12">
                     <h1>
                        <i class="fa fa-angle-left cursor" onClick="document.location.href='dashboard.php'" aria-hidden="true"></i> Campaign details
                        <small>Campaign details and statistics</small>
                     </h1>
                  </div>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <!-- Main row -->
               <div class="row">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                     <div class="row">
                        <div class="col-lg-5 col-sm-5 col-xs-12 pr__0">
                           <div class="top_card padd_20">
                              <h4 class="title_blue">Basic details</h4>
                              <div class="grid_10px">
                                 <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                       <h5 class="h5_name">Campaign name</h5>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                 </div>
                                 <div class="row grid_schedule">
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                       <div class="row">
                                          <div class="col-lg-12 col-sm-12 col-xs-12">
                                             <p><strong>Schedule</strong></p>
                                          </div>
                                          <div class="col-lg-6 col-sm-6 col-xs-12">
                                             <p><strong>From</strong></p>
                                             <p>Aug, 23 2020</p>
                                             <small>8.33 AM</small>
                                          </div>
                                          <div class="col-lg-6 col-sm-6 col-xs-12">
                                             <p><strong>To</strong></p>
                                             <p>Aug, 28 2020</p>
                                             <small>9.33 PM</small>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-xs-12 tab-content">
                                       <p><strong>Marketing objectives</strong></p>
                                       <div class="btn-group" data-toggle="buttons" style="display:block;">
                                          <label class="btn btn-primary w_100">
                                          <input type="radio" name="options" id="option1" autocomplete="off" checked=""> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/boost_sales.png"> Boost sales
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-7 col-sm-7 col-xs-12">
                           <div class="top_card padd_20">
                              <h4 class="title_blue">Audience and templates</h4>
                              <div class="grid_10px grid_padd">
                                 <div class="row grid_schedule">
                                    <div class="col-lg-5 col-sm-5 col-xs-12">
                                       <h5 class="h5_name">Audience Group name</h5>
                                       <h5 class="grey">AUDIENCE SIZE</h5>
                                       <h2 class="m_0"><img alt="audience" class="audience" src="dist/img/create_campaign_list/audience_size.png"> 28,078</h2>
                                    </div>
                                    <div class="col-lg-7 col-sm-7 col-xs-12">
                                       <div class="row">
                                          <div class="col-lg-6 col-sm-6 col-xs-12">
                                             <img alt="sms" class="w_100px" src="dist/img/phone.png">
                                             <p><strong>SMS Template name</strong></p>
                                             <a href="#SMS" data-toggle="modal" data-target="#SMS">Preview</a>
                                          </div>
                                          <div class="col-lg-6 col-sm-6 col-xs-12">
                                             <img alt="sms" class="w_100px" src="dist/img/laptop.png">
                                             <p><strong>Email template name</strong></p>
                                             <a href="#email" data-toggle="modal" data-target="#email">Preview</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row padd_top">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                     <div class="top_card pt_pb">
                        <div class="grid_10px">
                           <h5 class="h5_name">Statistics</h5>
                           <div class="skills">
                              <ul class="lines">
                                 <li class="line l--0">
                                    <span class="line__label title">
                                    1000
                                    </span>
                                 </li>
                                 <li class="line l--25">
                                    <span class="line__label">
                                    2000
                                    </span>
                                 </li>
                                 <li class="line l--50">
                                    <span class="line__label">
                                    3000
                                    </span>
                                 </li>
                                 <li class="line l--75">
                                    <span class="line__label">
                                    4000
                                    </span>
                                 </li>
                                 <li class="line l--100">
                                    <span class="line__label">
                                    5000
                                    </span>
                                 </li>
                              </ul>
                              <div class="charts">
                                 <div class="chart chart--dev">
                                    <!--<span class="chart__title">Development</span>-->
                                    <ul class="chart--horiz">
                                       <li class="chart__bar chart_clr_1" style="width: 98%;">
                                          <span class="chart__label">
                                          People reached 98%  
                                          </span>
                                       </li>
                                       <li class="chart__bar chart_clr_2" style="width: 98%;">
                                          <span class="chart__label">
                                          SMS Sent 98% 
                                          </span> 
                                       </li>
                                       <li class="chart__bar chart_clr_3" style="width: 70%;">
                                          <span class="chart__label">
                                          Email sent 70% 
                                          </span>
                                       </li>
                                       <li class="chart__bar chart_clr_4" style="width: 60%;">
                                          <span class="chart__label">
                                          Delivery rate 60% 
                                          </span>
                                       </li>
                                       <li class="chart__bar chart_clr_5" style="width: 25%;">
                                          <span class="chart__label">
                                          Opt out rate 25% 
                                          </span>
                                       </li>
                                       <li class="chart__bar chart_clr_6" style="width: 60%;">
                                          <span class="chart__label">
                                          Click rate 60% 
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   <div class="row pt-3">
			    <div class="col-lg-12 col-sm-12 col-xs-12">
			     <div class="box top_card">
			      <div class="box-body common_table dataTable_bx">
				    <h5 class="h5_name">People reached</h5>
                           <table id="example2" class="table table-bordered table-striped table-hover dataTable no-footer responsive">
                              <thead>
                                 <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Country </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Pandiyan</td>
                                    <td>test@test.com</td>
                                    <td>0099889900</td>
                                    <td>India</td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Pandiyan</td>
                                    <td>test@test.com</td>
                                    <td>0099889900</td>
                                    <td>India</td>
                                 </tr>
								 <tr>
                                    <td>3</td>
                                    <td>Pandiyan</td>
                                    <td>test@test.com</td>
                                    <td>0099889900</td>
                                    <td>India</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        </div>
			    </div>
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
      <div class="modal fade sms_modal" id="email" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Preview</h4>
               </div>
               <div class="modal-body templates_tab tab-content">
				<div class="row">
				<div class="col-lg-8 col-sm-12 col-xs-12 col-lg-offset-2">
				<div class="templates_tab">
					  <div class="card card_box no_opacity">
						 <div class="card-body">
							<h3>Release Notes</h3>
							<img alt="template" src="dist/img/laptop.png" class="layout_img_email w_smal">
							<p class=" font_14 pl_0">The Homepage New Homepage released with better design and improved performance after beta testing.</p>
							<a href="#" class="btn btn-info">Shop Now</a>
						 </div>
					  </div>
				   </div>
				</div>
				</div>
                  <!--<button class="btn btn-info mt_3">Create</button>-->
               </div>
            </div>
         </div>
      </div>
	  <!-- Modal -->
      <div class="modal fade sms_modal" id="SMS" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Preview</h4>
               </div>
               <div class="modal-body templates_tab tab-content">
			   
                  <div class="row">
                     <div class="col-lg-8 col-sm-12 col-xs-12 col-lg-offset-2">
				<div class="templates_tab">
					  <div class="card">
									<div class="card-body tab_box">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									 <h3>Happy customers</h3>
									 <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									 <!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
				   </div>
				</div>
                  </div>
                  <!--<button class="btn btn-info mt_3">Create</button>-->
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery 3 -->
      <?php include 'common/script.php';?>
      <script>
         $(function () {
           //$('#example1').DataTable()
           $('#example2').DataTable({
             'paging'      : true,
             'lengthChange': false,
             'searching'   : true,
             'ordering'    : true,
             'info'        : true,
             'autoWidth'   : false
           })
         })
      </script>
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
         $(document).ready(function() {
         $('[data-toggle="collapse"]').click(function() {
         $(this).toggleClass( "active" );
         if ($(this).hasClass("active")) {
         $(this).text("");
         } else {
         $(this).text("");
         }
         });
         // document ready  
         });
      </script>
      <script>
         $('.select2').select2()
      </script>
      <script>
         $(".selectall").click(function(){
         $(".individual").prop("checked",$(this).prop("checked"));
         });
      </script>
   </body>
</html>