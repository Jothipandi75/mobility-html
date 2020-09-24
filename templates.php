<?php $first_part="templates"; ?>
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
                  <div class="col-lg-6 col-sm-12 col-xs-12">
                     <h1>
                        Templates
                        <small>Create new and edit templates</small>
                     </h1>
                  </div>
                  <div class="col-lg-3 col-sm-12 col-xs-5">
                     <div class="container_radio">
                        <ul>
                           <li class="w_100">
                              <form action="#" method="get" class="sidebar-form">
                                 <div class="input-group">
                                    <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                    <input type="text" name="q" class="form-control" placeholder="Find templates">
                                 </div>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-7 col-xs-7">
                     <div class="row">
                        <!--<div class="col-lg-1 col-sm-2 col-12">
                           <div class="container_radio">
                           <img alt="" class="icon_size" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" src="dist/img/icons/filter.png">
                           </div>
                           </div> -->
                        <div class="col-lg-10 col-sm-12 col-xs-12 float-right">
                           <a href="#" data-toggle="modal" data-target=".sms_modal"  class="btn btn-info">CREATE TEMPLATE </a> <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                           <div class="row">
                              <div class="col-lg-3 col-xs-12">
                                 <div class="form-group common_select">
                                    <label>Group name</label>
                                    <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                       <option selected="selected">All</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-xs-12">
                                 <div class="form-group common_select">
                                    <label>Marketing objectives</label>
                                    <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                       <option selected="selected">All</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                       <option>Single-line item</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-xs-12">
                                 <div class="form-group common_select">
                                    <label>Status</label>
                                    <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                       <option selected="selected">All</option>
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
                     <div class="templates_tab">
                        <div class="tabbable-panel">
                           <div class="tabbable-line">
                              <ul class="nav nav-tabs ">
                                 <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                    SMS </a>
                                 </li>
                                 <li>
                                    <a href="#tab_default_2" data-toggle="tab">
                                    Email </a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab_default_1">
                                    <div class="row">
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									 <h5 class="card-title">Happy customers</h5>
									 <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									 <!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<h5 class="card-title">Happy customers</h5>
									<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<h5 class="card-title">Happy customers</h5>
									<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<h5 class="card-title">Happy customers</h5>
									<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<h5 class="card-title">Happy customers</h5>
									<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<h5 class="card-title">Happy customers</h5>
									<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<!--<a href="#" class="btn btn-primary" ><i class="fa fa-mobile" aria-hidden="true"></i> View in iphone</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<ul class="pagination">
									<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link " href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
									</div>
									</div>
                                 </div>
                                 <div class="tab-pane" id="tab_default_2">
                                    <div class="row">
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card card_box active">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<!--<img alt="" src="dist/img/Elena-Responsive-Email-Template.png">-->
									<h3>Email template</h3>
									<img alt="template" src="dist/img/upload.png" class="layout_img_email">
									<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<!--<a href="#" class="btn btn-primary">View in fullscreen</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 mb_30">
									<div class="card card_box">
									<div class="card-body tab_box">
									<div class="input-group input-group-lg">
									<div class="input-group-btn">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-ellipsis-v"></span></button>
									<ul class="dropdown-menu">
									<li><a href="#">Copy</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									</ul>
									</div>
									</div>
									<!--<img alt="" src="dist/img/Elena-Responsive-Email-Template.png">-->
									<h3>Email template</h3>
									<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<img alt="template" src="dist/img/upload.png" class="layout_img_email">
									<!--<a href="#" class="btn btn-primary">View in fullscreen</a>-->
									</div>
									</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<!--<nav aria-label="...">
									<ul class="pagination">
									<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">PAGINATION 1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active">
									<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									</li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
									<a class="page-link" href="#">Next</a>
									</li>
									</ul>
									</nav>-->
									<ul class="pagination">
									<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link " href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
									</ul>
									</div>
									</div>
                                 </div>
                              </div>
                           </div>
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
		<div class="modal fade sms_modal" id="" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">What template you want to create</h4>
		</div>
		<div class="modal-body templates_tab tab-content">
		<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-6">
		 <div class="element active">
		 <img alt="" src="dist/img/img_modal_01.png">
		 </div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
		 <div class="element">
		  <img alt="" src="dist/img/img_modal_02.png">
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
	  <script>
document.addEventListener("DOMContentLoaded", function(event) { // <-- add this wrapper
  var element = document.querySelectorAll('.element');
    if (element) {
      element.forEach(function(el, key){
         el.addEventListener('click', function () {
            console.log(key);
            el.classList.toggle("active");
             element.forEach(function(ell, els){
                 if(key !== els) {
                     ell.classList.remove('active');
                 }
                  console.log(els);
             });
         });
      });
    }
});
document.addEventListener("DOMContentLoaded", function(event) { // <-- add this wrapper
  var element = document.querySelectorAll('.card_box');
    if (element) {
      element.forEach(function(el, key){
         el.addEventListener('click', function () {
            console.log(key);
            el.classList.toggle("active");
             element.forEach(function(ell, els){
                 if(key !== els) {
                     ell.classList.remove('active');
                 }
                  console.log(els);
             });
         });
      });
    }
});

	  </script>
   </body>
</html>