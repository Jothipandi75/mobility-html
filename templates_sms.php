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
                  <div class="col-lg-6 col-sm-6 col-12">
                     <h1>
                        SMS Templates
                        <small>Create new and edit templates</small>
                     </h1>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                           <div class="row">
                              <div class="col-lg-3">
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
                              <div class="col-lg-3">
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
                              <div class="col-lg-3">
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
                     <div class="templates_tab tab-content ">
                        <div class="col-lg-9 col-sm-9 col-12">
                           <!--<h4 class="mt_5 mb_5">SMS</h4>
                           <h5 class="font_18 mb_3">Message details</h5>-->
                           <div class="form-group">
                              <label class="font_12" for="cam_name">Template name</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. Happy customers day message">
                           </div>
                           <!--<div class="form-group">
                              <label for="cam_name">Title</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. Title">
                              </div>-->
                           <div class="form-group">
                              <label class="font_12" for="cam_description">Message </label>
                              <div class="box-body pad">
                                 <textarea class="textarea" name="cam_description" id="the-textarea" maxlength="50" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text" 
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
                                 <div id="the-count">
                                    <span id="current">0</span>
                                    <span id="maximum">/ 50</span>
                                 </div>
                              </div>
                           </div>
                           <!--<div class="form-group">
                              <h4>Message:</h4>
                              <textarea name="mes" placeholder="type message here..." class="form-control"></textarea>
                              </div>-->
                           <!--<div class="form-group">
                              <label for="cam_name">Message description</label>
                              <textarea name="the-textarea" id="the-textarea" maxlength="300" placeholder="Start Typin..." autofocus></textarea>
                              <div id="the-count">
                                 <span id="current">0</span>
                                 <span id="maximum">/ 300</span>
                              </div>
                              </div>-->
                           <button class="btn btn-info mt_3 text_caps" data-toggle="modal" data-target="#sendpreview">View / send preview</button>
                           <ul class="list-inline fot_btn">
                              <!--<li><button type="button" class="btn btn-default next-step">Save draft</button></li>-->
                              <li><button type="button" class="btn btn-info next-step">Save</button></li>
                              <!--<li><a href="templates.php" class="btn btn-danger next-step">Cancel</a></li>-->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <!-- Modal -->
         <div class="modal fade" id="sendpreview" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Send preview as sms</h4>
                  </div>
                  <div class="modal-body templates_tab tab-content">
                     <form>
                        <div class="form-group">
                           <label for="mob">Mobile number (preview)</label>
                           <input type="text" class="form-control" id="mob" placeholder="Eg. 9988998899">
                        </div>
                        <button class="btn btn-info mt_3" data-toggle="modal" data-target="#sendpreview">Send preview</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <?php //include 'common/footer.php';?>
         <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 3 -->
      <?php include 'common/script.php';?>
      <!--<script>
         $(function () {
           // Replace the <textarea id="editor1"> with a CKEditor
           // instance, using default configuration.
           CKEDITOR.replace('templates_sms.php')
           //bootstrap WYSIHTML5 - text editor
           $('.textarea').wysihtml5()
         })
         </script>-->
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
         $('textarea').keyup(function() {
          
         var characterCount = $(this).val().length,
            current = $('#current'),
            maximum = $('#maximum'),
            theCount = $('#the-count');
          
         current.text(characterCount);
         
         
         /*This isn't entirely necessary, just playin around*/
         if (characterCount < 70) {
          current.css('color', '#666');
         }
         if (characterCount > 70 && characterCount < 90) {
          current.css('color', '#6d5555');
         }
         if (characterCount > 90 && characterCount < 100) {
          current.css('color', '#793535');
         }
         if (characterCount > 100 && characterCount < 120) {
          current.css('color', '#841c1c');
         }
         if (characterCount > 120 && characterCount < 139) {
          current.css('color', '#8f0001');
         }
         
         if (characterCount >= 140) {
          maximum.css('color', '#8f0001');
          current.css('color', '#8f0001');
          theCount.css('font-weight','bold');
         } else {
          maximum.css('color','#666');
          theCount.css('font-weight','normal');
         }
         
            // $('.textarea').wysihtml5();
         });
      </script>
      <script>
         $('.textarea').wysihtml5();
      </script>
      <!--<script src='inputEmoji.js'></script>
         <script>
         $(function () {
         $('textarea').emoji({place: 'after'});
         })
         </script>-->
   </body>
</html>