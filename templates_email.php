<?php $first_part="templates"; ?>
<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <?php include 'common/style.php';?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.css" >
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
                        Email Templates
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
                           <h4 class="mt_5 mb_5">Email</h4>
                           <div class="form-group">
                              <label class="font_14" for="cam_name">Template name</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. Teenage mens group">
                           </div>
                           <div class="form-group">
                              <label class="font_14" for="cam_name">Subject</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. My first email">
                           </div>
                           <div class="form-group">
                              <label class="font_14" for="cam_name">Headline</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. See the my first email">
                           </div>
                           <div class="form-group">
                              <label class="font_14" for="cam_name">Message</label>
                              <div class="box-body pad">
                                 <!--<div class="input-group"> </div>-->
                                 <textarea class="textarea" name="cam_description" id="the-textarea" maxlength="50" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text" 
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" aria-describedby="basic-addon"> </textarea>
                                 <!--<div class="input-group-append">
                                    <span class="input-group-text btn btn-outline " id="basic-addon">😀️</span>
                                    </div>-->
                                 <div id="the-count">
                                    <span id="current">0</span>
                                    <span id="maximum">/ 50</span>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="cam_name">Button Text</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. Visit my website">
                           </div>
                           <div class="form-group">
                              <label for="cam_name">Button URL</label>
                              <input type="text" class="form-control" id="cam_name" placeholder="Eg. Website URL">
                           </div>
                           <div class="form-group mt_3">
                              <div class="row">
                                 <div class="col-md-12 uploader" id="file-upload-form" >
                                    <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                                    <label for="file-upload" id="file-drag">
                                       <img id="file-image" src="#" alt="Preview" class="hidden">
                                       <div id="start">
                                          <!--<i class="fa fa-cloud-upload" aria-hidden="true"></i>-->
										  <img alt="upload" src="dist/img/upload.png">
                                          <div>Upload your picture</div>
                                          <div id="notimage" class="hidden">Please select an image</div>
                                          <span id="file-upload-btn" class="btn btn-success">Upload</span>
                                       </div>
                                       <div id="response" class="hidden">
                                          <div id="messages"></div>
                                          <progress class="progress" id="file-progress" value="0">
                                          <span>0</span>%
                                          </progress>
                                       </div>
                                    </label>
                                    <span class="max_size">Maximum size in 10 mb</span>
                                 </div>
                              </div>
                           </div>
                           <button class="btn btn-info mt_5 text_caps" data-toggle="modal" data-target="#sendpreview">View / send preview</button>
						   <h4 class="grey_clr">LAYOUT</h4>
						   <div class="row mt_5">
						   <div class="col-md-2 col-sm-3 col-6">
						   <img alt="layout" class="img_layout" src="dist/img/template_type1.png"> 
						   </div>
						   <div class="col-md-2 col-sm-3 col-6">
						   <img alt="layout" class="img_layout active" src="dist/img/template_type2.png"> 
						   </div>
						   <div class="col-md-2 col-sm-3 col-6">
						   <img alt="layout" class="img_layout" src="dist/img/template_type1.png"> 
						   </div>
						   <div class="col-md-2 col-sm-3 col-6">
						   <img alt="layout" class="img_layout" src="dist/img/template_type1.png"> 
						   </div>
						   </div>
                           <ul class="list-inline fot_btn m_medium">
                              <!--<li><button type="button" class="btn btn-default next-step">Save draft</button></li>-->
                              <li><button type="button" class="btn btn-info next-step">Save</button></li>
                             <!-- <li><a href="templates.php" class="btn btn-danger next-step">Cancel</a></li>-->
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
                     <h4 class="modal-title">Send Preview as email</h4>
                  </div>
                  <div class="modal-body templates_tab tab-content">
                     <form>
                        <div class="form-group">
                           <label for="cam_name">Email id (preview)</label>
                           <input type="text" class="form-control" id="cam_name" placeholder="Test ">
                        </div>
                        <button class="btn btn-info mt_3">Send preview</button>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.js"></script>
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
      <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.0/dist/index.min.js"></script>
      <script>
         // const button = document.querySelector('#basic-addon');
         // const picker = new EmojiButton();
         
         // picker.on('emoji', emoji => {
         //   document.querySelector('textarea[name="cam_description"]').value += emoji;
         //  });
         // listen to click on emoji button
         button.addEventListener('click', () => {
         console.log("button", button)
         picker.togglePicker(button);
         });
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
         $( document ).ready(function() {
         $('textarea').emojiarea({
          buttonLabel: 'Add Emoji',
          buttonPosition: 'before'
         });
         });
      </script>
      <script>
         $(function () {
           // Replace the <textarea id="editor1"> with a CKEditor
           // instance, using default configuration.
           CKEDITOR.replace('editor1.html')
           //bootstrap WYSIHTML5 - text editor
           $('.textarea').wysihtml5()
         })
      </script>
	    <script>
document.addEventListener("DOMContentLoaded", function(event) { // <-- add this wrapper
  var element = document.querySelectorAll('.img_layout');
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