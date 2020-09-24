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
            <!-- Main content -->
            <section class="content">
               <!-- Main row -->
               <div class="row">
                  <div class="col-lg-2 col-sm-3 col-12 pr__0">
                     <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                           <div class="card-counter primary">
                              <p>Active Campaign</p>
                              <span class="count-numbers">34</span>
                           </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                           <div class="card-counter danger">
                              <p>Active Instant Campaign</p>
                              <span class="count-numbers">34</span>
                           </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                           <div class="card-counter success">
                              <p>Active Group</p>
                              <span class="count-numbers">11</span>
                           </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                           <div class="card-counter height_auto info">
                              <p>Active Templates</p>
                              <div class="row">
                                 <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="text-center">
                                       <span class="count-numbers">20</span>
                                       <img alt="" class="grid_img_icons" src="dist/img/email.png" >
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="text-center">
                                       <span class="count-numbers">10</span>
                                       <img alt="" class="grid_img_icons" src="dist/img/sms.png" >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 col-sm-9 col-xs-12">
                     <div class="row">
                        <div class="col-lg-4 col-sm-4 col-xs-12 pr__0">
                           <div class="top_card">
                              <h4>Top 3 campaigns by conversion</h4>
                              <div class="grid_10px">
                                 <div class="chart-wrap">
                                    <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
                                       <div class="row">
                                          <p>Campaign 4</p>
                                          <div class="bar-wrap">
                                             <div class="bar" data-value="27" style="width:27%;" valuemax="100"></div>
                                          </div>
                                          <span class="number">27%</span>
                                       </div>
                                       <div class="row">
                                          <p>Campaign 4</p>
                                          <div class="bar-wrap">
                                             <div class="bar" data-value="37" style="width:37%;" valuemax="100"></div>
                                          </div>
                                          <span class="number">37%</span>
                                       </div>
                                       <div class="row">
                                          <p>Campaign 4</p>
                                          <div class="bar-wrap">
                                             <div class="bar" data-value="67" style="width:67%;" valuemax="100"></div>
                                          </div>
                                          <span class="number">67%</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 pr__0">
                           <div class="top_card">
                              <h4>Top 3 Instant campaigns by conversion</h4>
                              <div class="grid_10px">
                                 <div class="chart-wrap">
                                    <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
                                       <div class="row">
                                          <p>Campaign 4</p>
                                          <div class="bar-wrap">
                                             <div class="bar" data-value="27" style="width:27%;" valuemax="100"></div>
                                          </div>
                                          <span class="number">27%</span>
                                       </div>
                                       <div class="row">
                                          <p>Campaign 4</p>
                                          <div class="bar-wrap">
                                             <div class="bar" data-value="37" style="width:37%;" valuemax="100"></div>
                                          </div>
                                          <span class="number">37%</span>
                                       </div>
                                       <div class="row">
                                          <p>Campaign 4</p>
                                          <div class="bar-wrap">
                                             <div class="bar" data-value="67" style="width:67%;" valuemax="100"></div>
                                          </div>
                                          <span class="number">67%</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                           <div class="top_card">
                              <h4>Visitors by user type</h4>
                              <div class="grid_10px">
                                 <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                       <div class="circle_percent circle_percent_new" data-percent="50">
                                          <div class="circle_inner">
                                             <div class="round_per round_per_new"></div>
                                          </div>
                                       </div>
                                       <p class="text-center">New</p>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                       <div class="circle_percent" data-percent="75">
                                          <div class="circle_inner">
                                             <div class="round_per"></div>
                                          </div>
                                       </div>
                                       <p class="text-center">Returning</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row padd_top">
                        <div class="col-lg-12">
                           <div class="top_card">
                              <div class="row">
                                 <div class="col-lg-2 col-lg-2 col-xs-12">
                                    <div class="grid_m_10px grid_10px g_10px">
                                       <h5>Time Range</h5>
                                    </div>
                                 </div>
                                 <div class="col-lg-10 col-lg-10 col-xs-12">
                                    <div class="grid_m_10px grid_10px">
                                       <div class="row">
                                          <div class="col-lg-8 col-lg-8 col-xs-12">
                                             <div class="btn-group" id="options" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                <input type="radio" name ="option" id="option1" value="1">Last 7 days
                                                </label>
                                                <label class="btn btn-default" >
                                                <input type="radio" name ="option" id="option2" value="2" >Last 30 days
                                                </label>
                                                <label class="btn btn-default" >
                                                <input type="radio" name ="option" id="option3" value="3"> Last 90 days     
                                                </label>
                                                <label class="btn btn-default active" >
                                                <input type="radio" name ="option" id="option4" value="4"> Custom    
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-lg-4 col-lg-4 col-xs-12">
                                             <div class="row">
                                                <div class="grid_10px">
                                                   <div class="col-lg-6 col-lg-6 col-xs-12 pl_5">
                                                      <div class="form-group mb-0 mt-0">
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
                                                   <div class="col-lg-6 col-lg-6 col-xs-12 pl_5">
                                                      <div class="form-group mb-0 mt-0">
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
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-10">
                                    <div class="grid_10px">
                                       <div class="row">
                                          <div class="col-lg-3 col-sm-4 col-xs-12">
                                             <div class="selectdiv ">
                                                <select>
                                                   <option selected>Campaign type</option>
                                                   <option>Option 1</option>
                                                   <option>Option 2</option>
                                                   <option>Last long option</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-3 col-sm-4 col-xs-12">
                                             <div class="selectdiv ">
                                                <select>
                                                   <option selected> Campaign mode</option>
                                                   <option>Option 1</option>
                                                   <option>Option 2</option>
                                                   <option>Last long option</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-3 col-sm-4 col-xs-12">
                                             <div class="selectdiv ">
                                                <select>
                                                   <option selected> Brand</option>
                                                   <option>Option 1</option>
                                                   <option>Option 2</option>
                                                   <option>Last long option</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-3 col-sm-4 col-xs-12">
                                             <div class="selectdiv ">
                                                <select>
                                                   <option selected> Campaign schedule</option>
                                                   <option>Option 1</option>
                                                   <option>Option 2</option>
                                                   <option>Last long option</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="toggle_button">
                                 <div class="toggle toggle--knob">
                                    <input type="checkbox" id="toggle--knob" class="toggle--checkbox">
                                    <label class="toggle--btn" for="toggle--knob"><span class="toggle--feature" data-label-on=""  data-label-off=""></span></label>
                                    Rates
                                 </div>
                              </div>
                              <div class="contentB page_scroll">
                                 <div class="row pb_10px">
                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                       <ul class="line_part">
                                          <li><span class="blue"></span>Delivery rate</li>
                                          <li><span class="green"></span>Opt out rate</li>
                                          <li><span class="purple"></span>Click rate</li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="row ptb" >
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									  <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-blue">
                                             <span data-progress="45"></span>
                                          </div>
                                          <div class="grid_text">Delivery rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-green">
                                             <span data-progress="60"></span>
                                          </div>
                                          <div class="grid_text">Opt out rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-purple">
                                             <span data-progress="70"></span>
                                          </div>
                                          <div class="grid_text">Click rate</div>
                                       </div>
                                       <!--<div class="animated-progress progress-red">
                                          <span data-progress="85"></span>
                                          </div>-->
                                    </div>
                                 </div>
                                 <div class="row ptb">
								    <a href="campaign_details.php" class="click_links">
                                      <div class="col-lg-3 col-sm-4 col-xs-12">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-blue">
                                             <span data-progress="45"></span>
                                          </div>
                                          <div class="grid_text">Delivery rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-green">
                                             <span data-progress="60"></span>
                                          </div>
                                          <div class="grid_text">Opt out rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-purple">
                                             <span data-progress="70"></span>
                                          </div>
                                          <div class="grid_text">Click rate</div>
                                       </div>
                                       <!--<div class="animated-progress progress-red">
                                          <span data-progress="85"></span>
                                          </div>-->
                                    </div>
                                 </div>
                                 <div class="row ptb">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									  <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-blue">
                                             <span data-progress="45"></span>
                                          </div>
                                          <div class="grid_text">Delivery rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-green">
                                             <span data-progress="60"></span>
                                          </div>
                                          <div class="grid_text">Opt out rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-purple">
                                             <span data-progress="70"></span>
                                          </div>
                                          <div class="grid_text">Click rate</div>
                                       </div>
                                       <!--<div class="animated-progress progress-red">
                                          <span data-progress="85"></span>
                                          </div>-->
                                    </div>
                                 </div>
                                 <div class="row ptb">
								   <a href="campaign_details.php" class="click_links">
                                     <div class="col-lg-3 col-sm-4 col-xs-12">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-blue">
                                             <span data-progress="45"></span>
                                          </div>
                                          <div class="grid_text">Delivery rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-green">
                                             <span data-progress="60"></span>
                                          </div>
                                          <div class="grid_text">Opt out rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-purple">
                                             <span data-progress="70"></span>
                                          </div>
                                          <div class="grid_text">Click rate</div>
                                       </div>
                                       <!--<div class="animated-progress progress-red">
                                          <span data-progress="85"></span>
                                          </div>-->
                                    </div>
                                 </div>
                                 <div class="row ptb">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									 <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-blue">
                                             <span data-progress="45"></span>
                                          </div>
                                          <div class="grid_text">Delivery rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-green">
                                             <span data-progress="60"></span>
                                          </div>
                                          <div class="grid_text">Opt out rate</div>
                                       </div>
                                       <div class="grid_box_100">
                                          <div class="animated-progress progress-purple">
                                             <span data-progress="70"></span>
                                          </div>
                                          <div class="grid_text">Click rate</div>
                                       </div>
                                       <!--<div class="animated-progress progress-red">
                                          <span data-progress="85"></span>
                                          </div>-->
                                    </div>
                                 </div>
                              </div>
                              <div class="contentA page_scroll">
                                 <div class="row pb_10px">
                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                       <ul class="line_part">
                                          <li><span class="blue"></span>People reached</li>
                                          <li><span class="green"></span>SMS</li>
                                          <li><span class="purple"></span>Email</li>
                                       </ul>
                                    </div>
                                 </div>
								 <div class="row ptb">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									  <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-blue">
                                          <span data-progress="45">12,204 people reached</span>
                                       </div>
                                    <div class="grid_text">12,204 people reached <img alt="reached" class="w_18px" src="dist/img/reached.png"> </div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-green">
                                          <span data-progress="60">7,200 SMS Sent</span>
                                       </div>
                                    <div class="grid_text">7,200 SMS Sent <img alt="sms" class="w_18px" src="dist/img/sms_black.png"></div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-purple">
                                          <span data-progress="70">6,400 Email sent</span>
                                       </div>
                                    <div class="grid_text">6,400 Email sent <img alt="email" class="w_18px" src="dist/img/email_black.png"></div>
                                       </div>
                                    </div>
                                    </div>
									<div class="row ptb">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									  <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-blue">
                                          <span data-progress="45">12,204 people reached</span>
                                       </div>
                                    <div class="grid_text">12,204 people reached <img alt="reached" class="w_18px" src="dist/img/reached.png"> </div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-green">
                                          <span data-progress="60">7,200 SMS Sent</span>
                                       </div>
                                    <div class="grid_text">7,200 SMS Sent <img alt="sms" class="w_18px" src="dist/img/sms_black.png"></div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-purple">
                                          <span data-progress="70">6,400 Email sent</span>
                                       </div>
                                    <div class="grid_text">6,400 Email sent <img alt="email" class="w_18px" src="dist/img/email_black.png"></div>
                                       </div>
                                    </div>
                                    </div>
									<div class="row ptb">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									  <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-blue">
                                          <span data-progress="45">12,204 people reached</span>
                                       </div>
                                    <div class="grid_text">12,204 people reached <img alt="reached" class="w_18px" src="dist/img/reached.png"> </div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-green">
                                          <span data-progress="60">7,200 SMS Sent</span>
                                       </div>
                                    <div class="grid_text">7,200 SMS Sent <img alt="sms" class="w_18px" src="dist/img/sms_black.png"></div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-purple">
                                          <span data-progress="70">6,400 Email sent</span>
                                       </div>
                                    <div class="grid_text">6,400 Email sent <img alt="email" class="w_18px" src="dist/img/email_black.png"></div>
                                       </div>
                                    </div>
                                    </div>
									<div class="row ptb">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
									  <a href="campaign_details.php" class="click_links">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
									   </a>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-blue">
                                          <span data-progress="45">12,204 people reached</span>
                                       </div>
                                    <div class="grid_text">12,204 people reached <img alt="reached" class="w_18px" src="dist/img/reached.png"> </div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-green">
                                          <span data-progress="60">7,200 SMS Sent</span>
                                       </div>
                                    <div class="grid_text">7,200 SMS Sent <img alt="sms" class="w_18px" src="dist/img/sms_black.png"></div>
                                       </div>
                                    <div class="grid_box_100">
                                       <div class="animated-progress animated-progress_1 progress-purple">
                                          <span data-progress="70">6,400 Email sent</span>
                                       </div>
                                    <div class="grid_text">6,400 Email sent <img alt="email" class="w_18px" src="dist/img/email_black.png"></div>
                                       </div>
                                    </div>
                                    </div>
                                 <!--<div class="row ptb" onClick="document.location.href='campaign_details.php'">
                                    <div class="col-lg-3 col-sm-4 col-xs-12">
                                       <h5>Campaign 4</h5>
                                       <p class="mb-01">Website click</p>
                                       <p class="mb-01">Active from 12-04-2020</p>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-xs-12">
                                       <div class="grid_box_100">
                                          <span class="skillbars" data-color="#6640e8" data-pr="24%" data-title="12,204 people reached" data-img="dist/img/reached.png" data-height="10px"></span>
                                          <span class="skillbars" data-color="#51a5b1" data-pr="53%" data-title="7,200 SMS Sent" data-img="dist/img/sms_black.png" data-height="10px"></span>
                                          <span class="skillbars" data-color="#51a5b1" data-pr="90%" data-title="6,400 Email sent" data-img="dist/img/email_black.png" data-height="10px"></span>
                                       </div>
                                    </div>
                                 </div>-->
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
      <script>
         (function($) {
         function generateBarGraph(wrapper) {
          // Set Up Values Array
          var values = [];
          //var max = 0;
          // Get Values and save to Array
          $(wrapper + ' .bar').each(function(index, el) {
            values.push($(this).data('value'));
          });
         
          // Get Max Value From Array
          var max_value = Math.max.apply(Math, values);
         
          // Set width of bar to percent of max value
          $(wrapper + ' .bar').each(function(index, el) {
            var bar = $(this),
                value = bar.data('value'),
                percent = Math.ceil((value / max_value) * 100);
          //width: $(this).attr("data-progress") + "%",
          // max = (value > max) ? value : max;
         
            // Set Width & Add Class
            //bar.width(percent + '%');
            bar.addClass('in');
         //alert($.generateBarGraph(0, 10));
          });
         
         }
         
         // Generate the bar graph on window load...
         $(window).on('load', function(event) {
          generateBarGraph('#dashboard-stats');
         });
         })(jQuery); // Fully reference jQuery after this point.
      </script>
      <!-- Round circle -->
      <script>
         $(".circle_percent").each(function() {
          var $this = $(this),
         $dataV = $this.data("percent"),
         $dataDeg = $dataV * 3.6,
         $round = $this.find(".round_per");
         $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");	
         $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
         $this.prop('Counter', 0).animate({Counter: $dataV},
         {
         duration: 2000, 
         easing: 'swing', 
         step: function (now) {
                  $this.find(".percent_text").text(Math.ceil(now)+"%");
              }
          });
         if($dataV >= 51){
         $round.css("transform", "rotate(" + 360 + "deg)");
         setTimeout(function(){
         $this.addClass("percent_more");
         },1000);
         setTimeout(function(){
         $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
         },1000);
         } 
         });
      </script>
      <!-- Line progress bar -->
      <script>
         $(".animated-progress span").each(function () {
         $(this).animate(
          {
            width: $(this).attr("data-progress") + "%",
          },
          1000
         );
         $(this).text($(this).attr("data-progress") + "%");
         });
      </script>
      <!--<script>
         $(".animated-progress.animated-progress_1 span").each(function () {
         $(this).animate(
          {
            width: $(this).attr("data-progress") + "%",
          },
          1000
         );
         $(this).text($(this).attr("data-progress"));
         });
         </script>-->
      <script>
         $('.count-numbers').each(function () {
          $(this).prop('Counter',0).animate({
              Counter: $(this).text()
          }, {
              duration: 4000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
          });
         });
      </script>
      <script>
         $("#options :input").change(function(){
         console.log($(this).val());
         console.log($(this).is(':checked'));
         console.log($(this).prop("id"));
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
              $("#toggle--knob").change(function () {
                  if ($(this).is(":checked")) {
                      $(".contentB").hide();
                      $(".contentA").show();
                  } else {
                      $(".contentB").show();
                      $(".contentA").hide();
                  }
              });
          });
      </script>
      <!--<script>
         (function() {
         $(".skillbars").each(function(idNr) {
          var color = $(this).attr('data-color'),
            percent = $(this).attr('data-pr'),
            //caption = $(this).attr('data-cap'),
            img_d = $(this).attr('data-img'),
            heightBar = $(this).attr('data-height'),
            widthBar = $(this).attr('data-width'),
            title_b = $(this).attr('data-title'),
            skillLevel = "";
          if (!heightBar) {
            heightBar = "5px";
          }
          if (!widthBar) {
            widthBar = "400px";
          }
          getPerAsNum = percent.split("%");
          if (getPerAsNum[0] == 25 || getPerAsNum[0] < 25) {
            skillLevel = "Beginner";
          }
          if (getPerAsNum[0] == 50 || getPerAsNum[0] == 75 || getPerAsNum[0] > 50 && getPerAsNum[0] < 75) {
            skillLevel = "Avarage";
          }
          if (getPerAsNum[0] == 100 || getPerAsNum[0] > 75) {
            skillLevel = "Professional";
          }
         
          var skillHtml = "<div class='skillbar'>" +
            "<h1 style='display: none; margin-bottom: .2em;'><div class='grid_text'>"+ title_b +"<img alt='reached' class='w_18px' src='"+ img_d +"'> </div></h1>" +
            "<div class='skillbg' style='display: none; width: " + widthBar + "; height: " + heightBar + "; background-color: #fff;'>" +
            "<div class='skill-skill-" + idNr + "' style='background-color: " + color + "; height: " + heightBar + ";' />" +
            "</div>" +
            "<p style='display: none; margin-bottom: .2em;'>" + percent + " / " + skillLevel + "</p>" +
            "</div>";
          setTimeout(function() {
            $(".skill-skill-" + idNr).css({
              width: '0px'
            });
            $(".skillbar h1").fadeIn(500, function() {
              $(".skillbg").fadeIn(500, function() {
                $(".skillbar p").fadeIn(500, function() {
                  $("div.skill-skill-" + idNr).animate({
                    width: percent
                  }, 1500);
                });
              });
            });
          }, 100);
          $(this).prepend(skillHtml);
         });
         })();
         </script>-->
   </body>
</html>