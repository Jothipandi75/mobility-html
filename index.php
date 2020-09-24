<?php $first_part="index"; ?>
<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <?php include 'common/style.php';?>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <?php include 'common/menu.php';?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header common_h1">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-12">
                     <h1>
                        Campaign list
                        <small>Start a new campaign or track your started campaign</small>
                     </h1>
                  </div>
                  <div class="col-lg-3 col-sm-12 col-12 pl_0 pr_0">
                     <div class="container_radio">
                        <ul>
                           <li>
                              <input type="radio" id="f-option" name="selector">
                              <label for="f-option">SMS</label>
                              <div class="check"></div>
                           </li>
                           <li>
                              <input type="radio" id="s-option" name="selector">
                              <label for="s-option">Mail</label>
                              <div class="check">
                                 <div class="inside"></div>
                              </div>
                           </li>
                           <li>
                              <form action="#" method="get" class="sidebar-form">
                                 <div class="input-group">
                                    <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                    <input type="text" name="q" class="form-control" placeholder="Find campaigns">
                                 </div>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5 col-sm-12 col-12 pl_0">
                     <div class="row">
                        <div class="col-lg-6 col-sm-5 col-12">
                           <div class="form-group">
                              <!-- <label>Date range:</label> -->
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <!--<i class="fa fa-calendar"></i>-->
                                    <img alt="" class="icon_size" src="dist/img/icons/calendar.png">
                                 </div>
                                 <input type="text" class="form-control pull-right" id="reservation">
                              </div>
                              <!-- /.input group -->
                           </div>
                        </div>
                        <div class="col-lg-1 col-sm-2 col-xs-6">
                           <div class="container_radio">
                              <!--<i class="fa fa-filter" aria-hidden="true" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></i>-->
                              <img alt="" class="icon_size" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" src="dist/img/icons/filter.png">
                           </div>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-6">
                           <a href="create_campaign.php" class="btn btn-info">CREATE CAMPAIGN </a> <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                           <div class="row">
                              <div class="col-lg-3">
                                 <div class="form-group common_select">
                                    <!--<label>Brand</label>-->
                                    <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                       <option selected="selected">All Brand</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group common_select">
                                    <!--<label>Marketing objectives</label>-->
                                    <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                       <option selected="selected">All Marketing objectives</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group common_select">
                                    <!--<label>Status</label>-->
                                    <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                       <option selected="selected">All Status</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
                     <div class="box">
                        <!-- <div class="box-header">
                           <h3 class="box-title">Hover Data Table</h3>
                           </div> -->
                        <!-- /.box-header -->
                        <div class="box-body p_0 common_table">
                           <div class="table-responsive">
                              <table id="example2" class="table table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <!--<th>
                                          <div class="form-group">
                                             <input type="checkbox" class="selectall" id="">
                                             <label for="selectall"></label>
                                          </div>
                                       </th>-->
                                       <th>Type</th>
                                       <th>Campaign name</th>
                                       <th>Start date</th>
                                       <th>End date</th>
                                       <th>Audience size</th>
                                       <th>Delivery rate</th>
                                       <th>Clicks</th>
                                       <th>CTR %</th>
                                       <th>Opt-out rate</th>
                                       <th>Status</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <!--<td>
                                          <div class="form-group">
                                             <input type="checkbox" class="individual" id="">
                                             <label for=""></label>
                                          </div>
                                       </td>-->
                                       <td>
                                          <!--<i class="fa fa-users" aria-hidden="true"></i>--> <img alt="" class="icon_size" src="dist/img/icons/voucher.png">
                                       </td>
                                       <td>Voucher campaign<br> <span>Acquires customers</span></td>
                                       <td>Aug 23, 2018<br> <span>8.33 AM</span></td>
                                       <td>Aug 28, 2018<br> <span>9.33 PM</span></td>
                                       <td>500000</td>
                                       <td> 122,145,198</td>
                                       <td> 122,145,198</td>
                                       <td>20.54</td>
                                       <td>---</td>
                                       <td>
                                          <button class="btn btn-success">Delivering</button> 
                                       </td>
									   <td>
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Pause</a></li>
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									</td>
                                    </tr>
                                    <tr>
                                       <!--<td>
                                          <div class="form-group">
                                             <input type="checkbox" class="individual" >
                                             <label for="individual"></label>
                                          </div>
                                       </td>-->
                                       <td>
                                          <!--<i class="fa fa-volume-up" aria-hidden="true"></i>--> <img alt="" class="icon_size" src="dist/img/icons/sales.png">
                                       </td>
                                       <td>Sales campaign<br> <span>Winback lapsed customers</span></td>
                                       <td>Aug 23, 2018<br> <span>8.33 AM</span></td>
                                       <td>Aug 28, 2018<br> <span>9.33 PM</span></td>
                                       <td>500000</td>
                                       <td> 122,145,198</td>
                                       <td> 122,145,198</td>
                                       <td>20.54</td>
                                       <td>---</td>
                                       <td>
                                          <button class="btn btn-danger">In Danger</button> 
                                       </td>
                                       <td>
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Pause</a></li>
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									</td>
                                    </tr>
                                    <tr>
                                       <!--<td>
                                          <div class="form-group">
                                             <input type="checkbox" class="individual">
                                             <label for="individual"></label>
                                          </div>
                                       </td>-->
                                       <td>
                                          <!--<i class="fa fa-download" aria-hidden="true"></i>--> <img alt="" class="icon_size" src="dist/img/icons/team.png">
                                       </td>
                                       <td>Team campaign<br> <span>Capture customers information</span></td>
                                       <td>Aug 23, 2018<br> <span>8.33 AM</span></td>
                                       <td>Aug 28, 2018<br> <span>9.33 PM</span></td>
                                       <td>500000</td>
                                       <td> 122,145,198</td>
                                       <td> 122,145,198</td>
                                       <td>20.54</td>
                                       <td>---</td>
                                       <td>
                                          <button class="btn btn-warning warning">Danger</button> 
                                       </td>
                                       <td>
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Pause</a></li>
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									</td>
                                    </tr>
                                    <tr>
                                       <!--<td>
                                          <div class="form-group">
                                             <input type="checkbox" class="individual">
                                             <label for="individual"></label>
                                          </div>
                                       </td>-->
                                       <td>
                                          <!--<i class="fa fa-users" aria-hidden="true"></i>--> <img alt="" class="icon_size" src="dist/img/icons/retail.png">
                                       </td>
                                       <td>Retail campaign<br> <span>Acquires customers</span></td>
                                       <td>Aug 23, 2018<br> <span>8.33 AM</span></td>
                                       <td>Aug 28, 2018<br> <span>9.33 PM</span></td>
                                       <td>500000</td>
                                       <td> 122,145,198</td>
                                       <td> 122,145,198</td>
                                       <td>20.54</td>
                                       <td>---</td>
                                       <td>
                                          <button class="btn btn-default">Disabled</button> 
                                       </td>
                                       <td>
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Pause</a></li>
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									</td>
                                    </tr>
                                    </tfoot>
                              </table>
                           </div>
                        </div>
                        <!-- /.box-body -->
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
      <!-- jQuery 3 -->
      <?php include 'common/script.php';?>
      <script>
         $(function () {
           $('#example1').DataTable()
           $('#example2').DataTable({
             'paging'      : true,
             'lengthChange': false,
             'searching'   : false,
             'ordering'    : true,
             'info'        : true,
             'autoWidth'   : false
           })
         })
      </script>
      <script>
         //Date range picker
			/*
			$('#reservation').daterangepicker({
			format: 'M/dd/yyyy',
			});
			*/
			$(function() {
    $("#reservation").daterangepicker({
        locale: {
            //format: 'M/dd/yyyy',
        }
    });
});
      </script>
      <script>
         function changeLanguage(language) {
             var element = document.getElementById("url");
             element.value = language;
             element.innerHTML = language;
         }
         
         function showDropdown() {
             document.getElementById("myDropdown").classList.toggle("show");
             document.getElementById("myDropdown2").classList.toggle("show");
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