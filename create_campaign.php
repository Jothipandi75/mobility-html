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
                  <div class="col-lg-12 col-sm-12 col-12">
                     <h1>
                        Create campaign
                        <small>Create your campaign with campaign details and audience details</small>
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
                  <div class="col-lg-12 col-sm-12 col-12 pr_0">
                     <section class="campaign_wizard pr_0">
                        <div class="wizard">
                           <div class="wizard-inner">
                              <div class="connecting-line"></div>
                              <ul class="nav nav-tabs nav_tabs" id="nav-tab" role="tablist">
                                 <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Campaign Details">
                                    <span class="round-tab">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </span>
                                    </a>
                                    <span class="grid_content"><span class="sub">Details</span><br> <small>Campaign Details</small></span>
                                 </li>
                                 <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Create a scheduler for your campaign">
                                    <span class="round-tab">
                                    2
                                    </span>
                                    </a>
                                    <span class="grid_content"><span class="sub">Scheduler</span><br> <small>Create a scheduler for your<br> campaign</small></span>
                                 </li>
                                 <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Select respective audience group">
                                    <span class="round-tab">
                                    3
                                    </span>
                                    </a>
                                    <span class="grid_content"><span class="sub">Audience</span><br> <small>Select respective audience<br> group</small></span>
                                 </li>
                                 <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Select Templates for your campaign">
                                    <span class="round-tab">
                                    4
                                    </span>
                                    </a>
                                    <span class="grid_content"><span class="sub">SMS / Email / Push notification</span><br> <small>Select Templates for your <br>campaign</small></span>
                                 </li>
                                 <li role="presentation" class="disabled">
                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Overview of your campaign">
                                    <span class="round-tab">
                                    5
                                    </span>
                                    </a>
                                    <span class="grid_content"><span class="sub">Overview</span><br> <small>Overview of your campaign</small></span>
                                 </li>
                              </ul>
                           </div>
                           <form role="form">
                              <div class="tab-content">
                                 <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4>Campaign details and objective</h4>
                                    <div class="row">
                                       <div class="col-lg-8 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                             <label for="cam_name">Campaign name</label>
                                             <input type="text" class="form-control" id="cam_name" placeholder="Campaign name">
                                          </div>
                                          <div class="form-group">
                                             <label for="cam_name">Description</label>
                                             <input type="text" class="form-control" id="cam_descrip" placeholder="Campaign description">
                                          </div>
                                       </div>
                                       <div class="col-lg-10 col-sm-12 col-xs-12">
                                          <h4>Choose your marketing objective</h4>
                                          <div class="btn-group mt_3" data-toggle="buttons">
                                             <label class="btn btn-primary active">
                                             <input type="radio" name="options" id="option1" autocomplete="off" checked> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/boost_sales.png"> Boost sales
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option2" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/acquire_customers.png"> Acquire customers
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option3" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/promote_specific_brands.png"> Promote specific products
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option5" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/boost_sales.png"> Collect feedback from customers
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option6" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/acquire_customers.png"> Improve retention
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option7" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/promote_specific_brands.png"> Winback lapsed customers
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option8" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/boost_sales.png"> Capture customer information
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option9" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/acquire_customers.png"> Send greetings to customers
                                             </label>
                                             <label class="btn btn-primary">
                                             <input type="radio" name="options" id="option10" autocomplete="off"> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/promote_specific_brands.png"> Increase store visits
                                             </label>
                                          </div>
                                          <ul class="list-inline mt_5">
                                             <!--<li><button type="button" class="btn btn-default next-step">Save draft</button></li>-->
                                             <li><button type="button" class="btn btn-info next-step">Submit</button></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="font_24">Schedule</h4>
                                    <p class="small_font pl_0">Setup Schedule for your campaign</p>
                                    <div class="row">
                                       <div class="col-lg-12 col-sm-12 col-xs-12">
                                          <!--<h5 class="mt_3">Types of messages</h5>-->
                                          <div class="demo_message">
                                             <div role="tabpanel">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-justified nav_tabs_dropdown" role="tablist">
                                                   <li role="presentation" class="active">
                                                      <a href="#message_1" aria-controls="message_1" role="tab" data-toggle="tab">
                                                         <!--<img alt="" src="dist/img/message_3.png" >-->
                                                         <h4 class="btn_type">Immediately</h4>
                                                         <p>SMS/Email will be sent as soon as this campaign is created</p>
                                                      </a>
                                                   </li>
                                                   <li role="presentation">
                                                      <a href="#message_2" aria-controls="message_2" role="tab" data-toggle="tab">
                                                         <!-- <img alt="" src="dist/img/message_2.png" >-->
                                                         <h4 class="btn_type">On a specific date</h4>
                                                         <p>SMS/Email will be sent from the scheduled date and time until the campaign is paused</p>
                                                      </a>
                                                   </li>
                                                   <li role="presentation">
                                                      <a href="#message_3" aria-controls="message_3" role="tab" data-toggle="tab">
                                                         <!--<img alt="" src="dist/img/message_1.png" >-->
                                                         <h4 class="btn_type">Repeats periodically</h4>
                                                         <p>SMS/Email will be sent periodically on fixed time for the specified date range</p>
                                                      </a>
                                                   </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                   <div role="tabpanel" class="tab-pane active" id="message_1">
                                                      <div class="col-lg-8 col-sm-8 col-xs-12 mb_3 mt_3">
                                                         <h4>Duration</h4>
                                                         <div class="row">
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- Date -->
                                                               <div class="form-group">
                                                                  <div class="input-group date">
                                                                     <div class="input-group-addon">
                                                                        <!--<i class="fa fa-calendar"></i>-->
                                                                        <img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
                                                                     </div>
                                                                     <input type="text" class="form-control pull-right datepicker" placeholder="From date">
                                                                  </div>
                                                                  <!-- /.input group -->
                                                               </div>
                                                               <!-- /.form group -->
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- time Picker -->
                                                               <div class="bootstrap-timepicker">
                                                                  <div class="form-group">
                                                                     <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                           <img alt="calendar" src="dist/img/create_campaign_list/time_icon.png" class="date_time">
                                                                        </div>
                                                                        <input type="text" class="form-control timepicker" placeholder="Time">
                                                                     </div>
                                                                     <!-- /.input group -->
                                                                  </div>
                                                                  <!-- /.form group -->
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- Date -->
                                                               <div class="form-group">
                                                                  <div class="input-group date">
                                                                     <div class="input-group-addon">
                                                                        <img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
                                                                     </div>
                                                                     <input type="text" class="form-control pull-right datepicker" placeholder="To date">
                                                                  </div>
                                                                  <!-- /.input group -->
                                                               </div>
                                                               <!-- /.form group -->
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- time Picker -->
                                                               <div class="bootstrap-timepicker">
                                                                  <div class="form-group">
                                                                     <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                           <img alt="calendar" src="dist/img/create_campaign_list/time_icon.png" class="date_time">
                                                                        </div>
                                                                        <input type="text" class="form-control timepicker" placeholder="Time">
                                                                     </div>
                                                                     <!-- /.input group -->
                                                                  </div>
                                                                  <!-- /.form group -->
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div role="tabpanel" class="tab-pane" id="message_2">
                                                      <div class="col-lg-8 col-sm-8 col-xs-12 mb_3 mt_3">
                                                         <h4>On a specific date</h4>
                                                         <div class="row">
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- Date -->
                                                               <div class="form-group">
                                                                  <div class="input-group date">
                                                                     <div class="input-group-addon">
                                                                        <img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
                                                                     </div>
                                                                     <input type="text" class="form-control pull-right datepicker"  placeholder="Date">
                                                                  </div>
                                                                  <!-- /.input group -->
                                                               </div>
                                                               <!-- /.form group -->
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- time Picker -->
                                                               <div class="bootstrap-timepicker">
                                                                  <div class="form-group">
                                                                     <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                           <img alt="calendar" src="dist/img/create_campaign_list/time_icon.png" class="date_time">
                                                                        </div>
                                                                        <input type="text" class="form-control timepicker" placeholder="Time">
                                                                     </div>
                                                                     <!-- /.input group -->
                                                                  </div>
                                                                  <!-- /.form group -->
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div role="tabpanel" class="tab-pane" id="message_3">
                                                      <div class="col-lg-8 col-sm-8 col-xs-12 mb_3 mt_3">
                                                         <h4>Repeated periodically</h4>
                                                         <div class="row">
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- Date -->
                                                               <div class="form-group">
                                                                  <div class="input-group date">
                                                                     <div class="input-group-addon">
                                                                        <img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
                                                                     </div>
                                                                     <input type="text" class="form-control pull-right datepicker" placeholder="From date">
                                                                  </div>
                                                                  <!-- /.input group -->
                                                               </div>
                                                               <!-- /.form group -->
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- time Picker -->
                                                               <div class="bootstrap-timepicker">
                                                                  <div class="form-group">
                                                                     <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                           <img alt="calendar" src="dist/img/create_campaign_list/time_icon.png" class="date_time">
                                                                        </div>
                                                                        <input type="text" class="form-control timepicker" placeholder="Time">
                                                                     </div>
                                                                     <!-- /.input group -->
                                                                  </div>
                                                                  <!-- /.form group -->
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- Date -->
                                                               <div class="form-group">
                                                                  <div class="input-group date">
                                                                     <div class="input-group-addon">
                                                                        <img alt="calendar" src="dist/img/create_campaign_list/calendar.png" class="date_time">
                                                                     </div>
                                                                     <input type="text" class="form-control pull-right datepicker" placeholder="To date">
                                                                  </div>
                                                                  <!-- /.input group -->
                                                               </div>
                                                               <!-- /.form group -->
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <!-- time Picker -->
                                                               <div class="bootstrap-timepicker">
                                                                  <div class="form-group">
                                                                     <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                           <img alt="calendar" src="dist/img/create_campaign_list/time_icon.png" class="date_time">
                                                                        </div>
                                                                        <input type="text" class="form-control timepicker" placeholder="Time">
                                                                     </div>
                                                                     <!-- /.input group -->
                                                                  </div>
                                                                  <!-- /.form group -->
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class='col-sm-12 col-sm-12 col-xs-12'>
                                                               <h4>Frequency</h4>
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <div class="form-group">
                                                                  <label>Time</label>
                                                                  <select class="form-control select2" style="width: 100%;">
                                                                     <option selected="selected">15 Min</option>
                                                                     <option>1 Hours</option>
                                                                     <option>3 Hours</option>
                                                                     <option>5 Hours</option>
                                                                     <option>6 Hours</option>
                                                                  </select>
                                                               </div>
                                                               <!-- /.form-group -->
                                                            </div>
                                                            <div class='col-md-4 col-xs-6 col-xs-6'>
                                                               <div class="form-group">
                                                                  <label>Days</label>
                                                                  <select class="form-control select2" style="width: 100%;">
                                                                     <option selected="selected">1 day</option>
                                                                     <option>2 days</option>
                                                                     <option>3 days</option>
                                                                     <option>15 days</option>
                                                                     <option>19 days</option>
                                                                  </select>
                                                               </div>
                                                               <!-- /.form-group -->
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <ul class="list-inline">
                                       <!--<li><button type="button" class="btn btn-default prev-step">Save draft</button></li>-->
                                       <li><button type="button" class="btn btn-info next-step">Submit</button></li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 class="font_22">Audience Group</h4>
                                    <div class="row">
                                       <div class='col-md-4 col-sm-4 col-xs-12'>
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
                                    <ul class="list-inline mt_3">
                                       <!--<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                          <li><button type="button" class="btn btn-default next-step">Skip</button></li>-->
                                       <li><button type="button" class="btn btn-info btn-info-full next-step">Submit</button></li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="row" >
                                       <div class='col-sm-12 col-sm-12 col-xs-12'>
                                          <span class="switch relative_1">
                                          <label></label>
                                          <input type="checkbox" class="switch" id="sms-id" checked>
                                          <label for="sms-id"></label>
                                          </span>
                                       </div>
                                       <div class='col-sm-12 col-sm-12 col-xs-12'>
                                          <h4>SMS</h4>
                                          <div class='row'>
                                             <div class="contentB">
                                                <div class='col-md-4 col-sm-4 col-xs-12'>
                                                   <div class="row">
                                                      <div class='col-sm-12'>
                                                         <div class="form-group common_select sms">
                                                            <label>SMS Templates names</label>
                                                            <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                                               <option selected="selected">Templates names</option>
                                                               <option>Single-line item</option>
                                                               <option>Single-line item</option>
                                                               <option>Single-line item</option>
                                                               <option>Single-line item</option>
                                                            </select>
                                                            <small>Select a SMS Template</small>
                                                         </div>
                                                         <!-- /.form-group -->
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class='col-sm-12 col-sm-12 col-xs-12'>
                                                   <div class='mt_3 mb_3 grid_w_100 border_top no_border'>
                                                      <h4>Preview</h4>
                                                      <div class="row">
                                                         <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group">
                                                               <label for="cam_name">Mobile number (preview)</label>
                                                               <input type="text" class="form-control" id="cam_name" placeholder="Mobile number to send preview">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <button class="btn btn-default rounded-pill">SEND PREVIEW</button>
                                                         </div>
                                                         <div class="col-md-4 col-sm-4 col-xs-6">
                                                            <!--<img alt="mobile_mockup" class="h_300" src="dist/img/create_campaign_list/sms_mockup.png" >-->
                                                            <div class="grid_float_right w_85">
                                                               <div class="col-md-12 col-sm-12 col-xs-12 mb_30 text_right">
                                                                  <div class="templates_tab">
                                                                     <div class="card card_box no_opacity">
                                                                        <div class="card-body">
                                                                           <!--<img alt="mobile_mockup" class="h_300 mobile_device" src="dist/img/create_campaign_list/sms_mockup.png" >-->
                                                                           <p class=" font_14 pl_0 content_box">New Homepage released with better design and improved performance after beta testing.</p>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- /.form-group -->
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="contentA">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class='mt_3 mb_3 grid_w_100 border_top bor_2'>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class='col-sm-12 col-sm-12 col-xs-12'>
                                          <span class="switch relative_2">
                                          <label></label>
                                          <input type="checkbox" class="switch" id="email-id" >
                                          <label for="email-id"></label>
                                          </span>
                                       </div>
                                       <div class='col-sm-12 col-sm-12 col-xs-12'>
                                          <h4>Email</h4>
                                          <div class='row'>
                                             <div class="contentAA" style="display: none;">
                                                <div class='col-md-4 col-sm-4 col-xs-12'>
                                                   <div class="row">
                                                      <div class='col-sm-12'>
                                                         <div class="form-group common_select">
                                                            <label>Email Templates names</label>
                                                            <select class="form-control select2" style="width: 100%;" placeholder="Search">
                                                               <option selected="selected">Email Templates names</option>
                                                               <option>Single-line item</option>
                                                               <option>Single-line item</option>
                                                               <option>Single-line item</option>
                                                               <option>Single-line item</option>
                                                            </select>
                                                            <small>Select a Email Template</small>
                                                         </div>
                                                         <!-- /.form-group -->
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class='col-sm-12 col-sm-12 col-xs-12'>
                                                   <div class='mt_3 mb_3 grid_w_100 border_top no_border'>
                                                      <h4>Preview</h4>
                                                      <div class="row">
                                                         <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <div class="form-group">
                                                               <label for="cam_name">Email id (preview)</label>
                                                               <input type="text" class="form-control" id="cam_name" placeholder="Email id to send preview">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <button class="btn btn-default rounded-pill">SEND PREVIEW</button>
                                                         </div>
                                                         <div class="col-md-4 col-sm-4 col-xs-4 text-center mb-3">
                                                            <!-- <img alt="mobile_mockup" class="h_400 mb_3" src="dist/img/create_campaign_list/email_mockup.png" >-->
                                                            <div class="grid_float_right w_85">
                                                               <div class="col-md-12 col-sm-12 col-xs-12 mb_30">
                                                                  <div class="templates_tab">
                                                                     <div class="card card_box no_opacity">
                                                                        <div class="card-body">
                                                                           <!--<img alt="" src="dist/img/Elena-Responsive-Email-Template.png">-->
                                                                           <h3>Email template</h3>
                                                                           <img alt="template" src="dist/img/upload.png" class="layout_img_email w_smal">
                                                                           <p class=" font_14 pl_0">The Homepage New Homepage released with better design and improved performance after beta testing.</p>
                                                                           <a href="#" class="btn btn-primary">Shop Now</a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- /.form-group -->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="contentBB">
                                          </div>
                                       </div>
                                    </div>
                                    <ul class="list-inline mt_3">
                                       <!--<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                          <li><button type="button" class="btn btn-default next-step">Skip</button></li>-->
                                       <li><button type="button" class="btn btn-info btn-info-full next-step">Submit</button></li>
                                    </ul>
                                 </div>
                                 <div class="tab-pane" role="tabpanel" id="complete">
                                    <h4 class="font_24">Overview</h4>
                                    <p class="pl_0 font_14">Overview of your campaign</p>
                                    <h4 class="font_18 mt_3 mb_3"> Details <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" onclick="MyPromoters('1');"><i class="fa fa-pencil" aria-hidden="true"></i></a></h4>
                                    <!--<h5 class="mt_3 font_18 grid_bold">Campaign name </h5>-->
									<p class="pl_0 clr_black font_14">Campaign name</p>
                                    <p class="pl_0 font_14">Test name</p>
                                    <p class="pl_0 clr_black font_14">Description</p>
                                    <p class="pl_0 font_14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="pl_0 clr_black font_14">Marketing objective</p>
                                    <div class="btn-group" data-toggle="buttons" style="display:block;">
                                       <label class="btn btn-primary w_25">
                                       <input type="radio" name="options" id="option1" autocomplete="off" checked> <img alt="Boost sales" class="market_obj" src="dist/img/create_campaign_list/boost_sales.png"> Boost sales
                                       </label>
                                    </div>
                                    <div class="mt_3 mb_3 grid_w_100 border_top">
                                       <h4 class="mt_5">Scheduler <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" onclick="MyPromoters('2');"><i class="fa fa-pencil" aria-hidden="true"></i></a></h4>
                                       <p class="clr_black font_14 pl_0">Immediate </p>
                                       <div class="row">
                                          <div class="col-lg-2 col-sm-2 col-xs-2">
                                             <p class="clr_black  font_14 pl_0">Start Date</p>
                                             <p class=" font_14 pl_0">Aug 23, 2020</p>
                                             <span>8.33 AM</span>
                                          </div>
                                          <div class="col-lg-2 col-sm-2 col-xs-2">
                                             <p class="clr_black font_14 pl_0">End Date</p>
                                             <p class=" font_14 pl_0">Aug 23, 2020</p>
                                             <span>9.33 PM</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt_3 mb_3 grid_w_100 border_top">
                                       <h4 class="mt_5">Audience <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" onclick="MyPromoters('3');"><i class="fa fa-pencil" aria-hidden="true"></i></a></h4>
                                       <div class="row">
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                             <p class="clr_black  font_14 pl_0">Group Name </p>
                                             <p class=" font_14 pl_0">Applied filter condition</p>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                             <h5 class="grey">AUDIENCE SIZE</h5>
                                             <h2 class="m_0"><img alt="audience" class="audience" src="dist/img/create_campaign_list/audience_size.png"> 28,078</h2>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt_3 mb_3 grid_w_100 border_top">
                                       <h4 class="mt_5">SMS / Email / Push notification <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" onclick="MyPromoters('4');"><i class="fa fa-pencil" aria-hidden="true"></i></a></h4>
                                       <div class="row">
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <p class="clr_black font_14 pl_0 mtb_3">SMS/Email campaign</p>
                                             <p class="clr_black font_14 pl_0">Message</p>
                                             <p class=" font_14 pl_0">The Homepage New Homepage released with better design and improved performance after beta testing.</p>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <div class="grid_float_right">
                                                <div class="col-md-12 col-sm-12 col-xs-12 mb_30 text_right">
                                                   <div class="templates_tab">
                                                      <div class="card card_box no_opacity">
                                                         <div class="card-body">
                                                            <!--<img alt="mobile_mockup" class="h_300 mobile_device" src="dist/img/create_campaign_list/sms_mockup.png" >-->
                                                            <p class=" font_14 pl_0 content_box">New Homepage released with better design and improved performance after beta testing.</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt_3 mb_3 grid_w_100 border_top border_bottom">
                                       <h4 class="mtb_3">Template Name</h4>
                                       <div class="row">
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <p class="clr_black font_14 pl_0">Subject</p>
                                             <p class=" font_14 pl_0">Latest news</p>
                                             <p class="clr_black font_14 pl_0">Headline</p>
                                             <p class=" font_14 pl_0">Release Notes</p>
                                             <p class="clr_black font_14 pl_0">Message</p>
                                             <p class=" font_14 pl_0">The Homepage New Homepage released with better design and improved performance after beta testing.</p>
                                             <p class="clr_black font_14 pl_0">Button text</p>
                                             <p class=" font_14 pl_0">Shop Now</p>
											 <p class="clr_black font_14 pl_0">Button URL</p>
                                             <p class=" font_14 pl_0">https://www.test.com</p>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                             <div class="grid_float_right">
                                                <div class="col-md-12 col-sm-12 col-xs-12 mb_30">
                                                   <div class="templates_tab">
                                                      <div class="card card_box no_opacity">
                                                         <div class="card-body">
                                                            <!--<img alt="" src="dist/img/Elena-Responsive-Email-Template.png">-->
                                                            <h3>Release Notes</h3>
                                                            <img alt="template" src="dist/img/upload.png" class="layout_img_email w_smal">
                                                            <p class=" font_14 pl_0">The Homepage New Homepage released with better design and improved performance after beta testing.</p>
                                                            <a href="#" class="btn btn-primary">Shop Now</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!--<img alt="mobile_mockup" class="h_400" src="dist/img/create_campaign_list/email_mockup_withemail.png" >-->
                                    </div>
                                    <ul class="list-inline mt_3">
                                       <!--<li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                          <li><button type="button" class="btn btn-default next-step">Skip</button></li>-->
                                       <li><button type="button" class="btn btn-info btn-info-full next-step">SAVE</button></li>
                                    </ul>
                                 </div>
                              </div>
                        </div>
                        <div class="clearfix"></div>
                  </div>
                  </form>
               </div>
               </section>
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
          $('.nav-tabs.nav_tabs > li a[title]').tooltip();
          
          //Wizard
          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
         
              var $target = $(e.target);
          
              if ($target.parent().hasClass('disabled')) {
                  return false;
              }
          });
         
          $(".next-step").click(function (e) {
         
              var $active = $('.wizard .nav-tabs.nav_tabs li.active');
              $active.next().removeClass('disabled');
              nextTab($active);
         
          });
          $(".prev-step").click(function (e) {
         
              var $active = $('.wizard .nav-tabs.nav_tabs li.active');
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
      <!--<script>
         $('.next-step').click(function(e){
         if($('.wizard .nav-tabs.nav_tabs li.active').next('li').hasClass('next-step')){
          $('.nav-tabs.nav_tabs li').first('li').find('a').trigger('click');
         }else{
          $('.wizard .nav-tabs.nav_tabs li.active').next('li').find('a').trigger('click');
         }
         e.preventDefault();
         });
      </script>-->
      <script>
         //open and close tab menu
         $('.demo_message .nav_tabs_dropdown.nav-tabs')
          .on("click", "li:not('.active') a", function(event) {  
         $(this).closest('ul').removeClass("open");
          })
          .on("click", "li.active a", function(event) {        
         $(this).closest('ul').toggleClass("open");
          });
      </script>
      <script>
         $(function () {
         $('.select2').select2()
           //Date picker
           $('.datepicker').datepicker({
         format: 'M/dd/yyyy',
             autoclose: true
           }).datepicker("setDate", new Date);  
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
         $(function () {
                 $("#sms-id").change(function () {
                     if ($(this).is(":checked")) {
                         $(".contentB").show();
                         $(".contentA").hide();
                     } else {
                         $(".contentB").hide();
                         $(".contentA").show();
                     }
                 });
         		
         		$("#email-id").change(function () {
                     if ($(this).is(":checked")) {
                         $(".contentBB").hide();
                         $(".contentAA").show();
                     } else {
                         $(".contentBB").show();
                         $(".contentAA").hide();
                     }
                 });
         		
         		
             });
      </script>
      <script>
         function showDiv(divId, element)
         {
         document.getElementById(divId).style.display = element.value == 'Single-line item' ? 'block' : 'none';
         }
      </script>
      <script type="text/javascript">
         function MyPromoters(value){
          //alert(value);
         //localStorage.setItem('activeTab', value);
         $('ul.nav-tabs.nav_tabs li.active').removeClass('active');
         
         
         if(value ==1){
         	$("ul.nav-tabs.nav_tabs li:nth-child(1)").addClass('active');
         }else if(value ==2){
         	$("ul.nav-tabs.nav_tabs li:nth-child(2)").addClass('active');
         }else if(value ==3){
         	$("ul.nav-tabs.nav_tabs li:nth-child(3)").addClass('active');
         }else if(value ==4){
         	$("ul.nav-tabs.nav_tabs li:nth-child(4)").addClass('active');
         }
         
         
         }
      </script>
      <!--<script>
         $(document).ready(function(){
         var activeTab = localStorage.getItem('activeTab');
         if(activeTab){
         	$('#nav-tab a[href="' + activeTab + '"]').tab('show');
         }
         //alert(activeTab);
         localStorage.clear();
         });
         </script>-->
      <!--<script>
         $('ul.nav-tabs.nav_tabs li a').click(function (e) {
         $('ul.nav-tabs.nav_tabs li.active').removeClass('active')
         $(this).parent('li').addClass('active')
         })
         </script>-->
   </body>
</html>