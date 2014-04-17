@extends('layout.menu')

@section('body')

<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
          








          <!-- page header -->
          <div class="pageheader">
            

            <h2><i class="fa fa-tachometer"></i> Dashboard
            <span>// Place subtitle here...</span></h2>
            

            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="index.html">Minimal</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </div>


          </div>
          <!-- /page header -->
          
          




          <!-- content main container -->
          <div class="main">



            <!-- cards -->
            <div class="row cards">
              
              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <div class="card card-redbrown hover">
                  <div class="front"> 

                    <div class="media">        
                      <span class="pull-left">
                        <i class="fa fa-users media-object"></i>
                      </span>

                      <div class="media-body">
                        <small>New Users</small>
                        <h2 class="media-heading animate-number" data-value="3659" data-animation-duration="1500">3,659</h2>
                      </div>
                    </div> 

                    <div class="progress-list">
                      <div class="details">
                        <div class="title">This month plan %</div>
                      </div>
                      <div class="status pull-right bg-transparent-black-1">
                        <span class="animate-number" data-value="83" data-animation-duration="1500">83</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little progress-transparent-black">
                        <div class="progress-bar animate-progress-bar" data-percentage="83%" style="width: 83%;"></div>
                      </div>
                    </div>

                  </div>
                  <div class="back">
                    <a href="#">
                      <i class="fa fa-bar-chart-o fa-4x"></i>
                      <span>Check Summary</span>
                    </a>  
                  </div>
                </div>
              </div>


              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <div class="card card-blue hover">
                  <div class="front">        
                    
                    <div class="media">                  
                      <span class="pull-left">
                        <i class="fa fa-shopping-cart media-object"></i>
                      </span>

                      <div class="media-body">
                        <small>New Orders</small>
                        <h2 class="media-heading animate-number" data-value="19214" data-animation-duration="1500">19,214</h2>
                      </div>
                    </div> 

                    <div class="progress-list">
                      <div class="details">
                        <div class="title">This month plan %</div>
                      </div>
                      <div class="status pull-right bg-transparent-black-1">
                        <span class="animate-number" data-value="100" data-animation-duration="1500">100</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little progress-transparent-black">
                        <div class="progress-bar animate-progress-bar" data-percentage="100%" style="width: 100%;"></div>
                      </div>
                    </div>

                  </div>
                  <div class="back">
                    <a href="#">
                      <i class="fa fa-bar-chart-o fa-4x"></i>
                      <span>Check Summary</span>
                    </a>
                  </div>
                </div>
              </div>



              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <div class="card card-greensea hover">
                  <div class="front">        
                    
                    <div class="media">
                      <span class="pull-left">
                        <i class="fa fa-usd media-object"></i>
                      </span>

                      <div class="media-body">
                        <small>Sales</small>
                        <h2 class="media-heading animate-number" data-value="169541" data-animation-duration="1500">169,541</h2>
                      </div>
                    </div>

                    <div class="progress-list">
                      <div class="details">
                        <div class="title">This month plan %</div>
                      </div>
                      <div class="status pull-right bg-transparent-black-1">
                        <span class="animate-number" data-value="42" data-animation-duration="1500">42</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little progress-transparent-black">
                        <div class="progress-bar animate-progress-bar" data-percentage="42%" style="width: 42%;"></div>
                      </div>
                    </div>

                  </div>
                  <div class="back">
                    <a href="#">
                      <i class="fa fa-bar-chart-o fa-4x"></i>
                      <span>Check Summary</span>
                    </a>
                  </div>
                </div>
              </div>


              <div class="card-container col-lg-3 col-sm-6 col-xs-12">
                <div class="card card-slategray hover">
                  <div class="front"> 

                    <div class="media">                   
                      <span class="pull-left">
                        <i class="fa fa-eye media-object"></i>
                      </span>

                      <div class="media-body">
                        <small>Visits</small>
                        <h2 class="media-heading animate-number" data-value="9634" data-animation-duration="1500">9,634</h2>
                      </div>
                    </div> 

                    <div class="progress-list">
                      <div class="details">
                        <div class="title">This month plan %</div>
                      </div>
                      <div class="status pull-right bg-transparent-black-1">
                        <span class="animate-number" data-value="25" data-animation-duration="1500">25</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little progress-transparent-black">
                        <div class="progress-bar animate-progress-bar" data-percentage="25%" style="width: 25%;"></div>
                      </div>
                    </div>

                  </div>
                  <div class="back">
                    <a href="#">
                      <i class="fa fa-bar-chart-o fa-4x"></i>
                      <span>Check Summary</span>
                    </a>
                  </div>
                </div>
              </div>


            </div>
            <!-- /cards -->
            
            


            <!-- row -->
            <div class="row">


              <!-- col 8 -->
              <div class="col-lg-8 col-md-12">




                <!-- tile -->
                <section class="tile transparent">




                  <!-- tile header -->
                  <div class="tile-header color transparent-black textured rounded-top-corners">
                    <h1><strong>Statistic</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->


                  <!-- tile widget -->
                  <div class="tile-widget color transparent-black textured">
                    <div id="statistics-chart" class="chart statistics" style="height: 250px; padding: 0px; position: relative;"><canvas class="flot-base" width="887" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 887px; height: 250px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 32px; text-align: center;">JAN</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 108px; text-align: center;">FEB</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 180px; text-align: center;">MAR</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 257px; text-align: center;">APR</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 331px; text-align: center;">MAY</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 407px; text-align: center;">JUN</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 484px; text-align: center;">JUL</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 557px; text-align: center;">AUG</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 634px; text-align: center;">SEP</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 709px; text-align: center;">OCT</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 783px; text-align: center;">NOV</div><div style="position: absolute; max-width: 73px; font-style: normal; font-variant: normal; font-weight: 300; font-size: 14px; line-height: 24px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 225px; left: 859px; text-align: center;">DEC</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 199px; left: 19px; text-align: right;">0</div><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 166px; left: 7px; text-align: right;">500</div><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 133px; left: 1px; text-align: right;">1000</div><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 100px; left: 1px; text-align: right;">1500</div><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 67px; left: 1px; text-align: right;">2000</div><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 34px; left: 1px; text-align: right;">2500</div><div style="position: absolute; font-style: normal; font-variant: normal; font-weight: 300; font-size: 11px; line-height: 13px; font-family: Roboto, Arial, sans-serif; color: rgb(255, 255, 255); top: 1px; left: 1px; text-align: right;">3000</div></div></div><canvas class="flot-overlay" width="887" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 887px; height: 250px;"></canvas></div>
                  </div>
                  <!-- /tile widget -->


                  <!-- tile body -->
                  <div class="tile-body color transparent-white rounded-bottom-corners">
                    <div class="row">
                      <ul class="inline">
                        
                        <li class="col-md-8 col-sm-12 col-xs-12 text-center">
                          
                          <h4 class="underline text-left"><strong>Actual</strong> Statistics</h4>
                          
                          <div class="inner-container inline">
                            <div data-percent="100" data-size="140" class="pie-chart inline" data-scale-color="false" data-track-color="rgba(0,0,0,0)" data-bar-color="#ffffff" data-line-width="5">
                              <div class="text-center">
                                <i class="fa fa-usd fa-5x"></i>
                              </div>
                            <canvas height="140" width="140"></canvas></div>
                            <p class="chart-overall text-center medium-thin uppercase"><span class="big-medium animate-number" data-value="6175" data-animation-duration="2500">6,175</span> Sales</p>
                          </div>


                          <div class="inner-container inline">
                            <div data-percent="85" data-size="140" class="pie-chart inline" data-scale-color="false" data-track-color="rgba(0,0,0,0)" data-bar-color="rgba(0,0,0,.4)" data-line-width="5">
                              <div class="text-center">
                                <span><i class="fa fa-eye fa-5x color-transparent-black"></i></span>
                              </div>
                            <canvas height="140" width="140"></canvas></div>
                            <p class="chart-overall text-center medium-thin uppercase color-transparent-black"><span class="big-medium animate-number" data-value="8213" data-animation-duration="2500">8,213</span> Visits</p>
                          </div>

                        </li>

                        <li class="col-md-4 col-sm-12 col-xs-12">
                          <h4 class="underline"><strong>Visitors</strong> Statistics</h4>
                          <ul class="progress-list">
                            <li>
                              <div class="details">
                                <div class="title">America</div>
                                <div class="description">Visitors from America</div>
                              </div>
                              <div class="status pull-right">
                                <span class="animate-number" data-value="40" data-animation-duration="1500">40</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-green animate-progress-bar" data-percentage="40%" style="width: 40%;"></div>
                              </div>
                            </li>
                            <li>
                              <div class="details">
                                <div class="title">Europe</div>
                                <div class="description">Visitors from Europe</div>
                              </div>
                              <div class="status pull-right">
                                 <span class="animate-number" data-value="38" data-animation-duration="1000">38</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-cyan animate-progress-bar" data-percentage="35%" style="width: 35%;"></div>
                              </div>
                            </li>
                            <li>
                              <div class="details">
                                <div class="title">Asia</div>
                                <div class="description">Visitors from Asia</div>
                              </div>
                              <div class="status pull-right">
                                <span class="animate-number" data-value="12" data-animation-duration="800">12</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-amethyst animate-progress-bar" data-percentage="12%" style="width: 12%;"></div>
                              </div>
                            </li>
                            <li>
                              <div class="details">
                                <div class="title">Africa</div>
                                <div class="description">Visitors from Africa</div>
                              </div>
                              <div class="status pull-right">
                                <span class="animate-number" data-value="7" data-animation-duration="600">7</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-orange animate-progress-bar" data-percentage="7%" style="width: 7%;"></div>
                              </div>
                            </li>
                            <li>
                              <div class="details">
                                <div class="title">Other</div>
                              </div>
                              <div class="status pull-right">
                                <span class="animate-number" data-value="6" data-animation-duration="400">6</span>%
                              </div>
                              <div class="clearfix"></div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-red animate-progress-bar" data-percentage="6%" style="width: 6%;"></div>
                              </div>
                            </li>       
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /tile body -->



                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile color transparent-black">




                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Projects</strong> Progress</h1>
                    <div class="search">
                      <input type="text" placeholder="Search...">
                    </div>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->


                  <!-- tile body -->
                  <div class="tile-body no-vpadding">
                    <div class="table-responsive">
                      <table class="table table-custom table-sortable nomargin">
                        <thead>
                          <tr>
                            <th class="sortable sort-numeric sort-asc">ID</th>
                            <th class="sortable sort-alpha">Project</th>
                            <th class="sortable">Priority</th>
                            <th class="sortable sort-amount">Status</th>
                            <th class="text-right">Chart</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Graphic Layout for client</td>
                            <td class="color-red priority">High priority</td>
                            <td class="progress-cell">
                              <div class="progress-info">
                                <div class="percent"><span class="animate-number" data-value="50" data-animation-duration="1500">50</span>%</div>
                              </div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="50%" style="width: 50%;"></div>
                              </div>
                            </td>
                            <td class="text-right"><span id="projectbar1"><canvas width="39" height="20" style="display: inline-block; vertical-align: top; width: 39px; height: 20px;"></canvas></span></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Make website responsive</td>
                            <td class="color-green priority">Low priority</td>
                            <td class="progress-cell">
                              <div class="progress-info">
                                <div class="percent"><span class="animate-number" data-value="13" data-animation-duration="1500">13</span>%</div>
                              </div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="13%" style="width: 13%;"></div>
                              </div>
                            </td>
                            <td class="text-right"><span id="projectbar2"><canvas width="39" height="20" style="display: inline-block; vertical-align: top; width: 39px; height: 20px;"></canvas></span></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Clean css/html/js code</td>
                            <td class="color-red priority">High priority</td>
                            <td class="progress-cell">
                              <div class="progress-info">
                                <div class="percent"><span class="animate-number" data-value="76" data-animation-duration="1500">76</span>%</div>
                              </div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="76%" style="width: 76%;"></div>
                              </div>
                            </td>
                            <td class="text-right"><span id="projectbar3"><canvas width="39" height="20" style="display: inline-block; vertical-align: top; width: 39px; height: 20px;"></canvas></span></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Database Optimization</td>
                            <td class="color-orange priority">Normal priority</td>
                            <td class="progress-cell">
                              <div class="progress-info">
                                <div class="percent"><span class="animate-number" data-value="38" data-animation-duration="1500">38</span>%</div>
                              </div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="38%" style="width: 38%;"></div>
                              </div>
                            </td>
                            <td class="text-right"><span id="projectbar4"><canvas width="39" height="20" style="display: inline-block; vertical-align: top; width: 39px; height: 20px;"></canvas></span></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Database Migration</td>
                            <td class="color-green priority">Low priority</td>
                            <td class="progress-cell">
                              <div class="progress-info">
                                <div class="percent"><span class="animate-number" data-value="9" data-animation-duration="1500">9</span>%</div>
                              </div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="9%" style="width: 9%;"></div>
                              </div>
                            </td>
                            <td class="text-right"><span id="projectbar5"><canvas width="39" height="20" style="display: inline-block; vertical-align: top; width: 39px; height: 20px;"></canvas></span></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Email server backup</td>
                            <td class="color-orange priority">Normal priority</td>
                            <td class="progress-cell">
                              <div class="progress-info">
                                <div class="percent"><span class="animate-number" data-value="29" data-animation-duration="1500">29</span>%</div>
                              </div>
                              <div class="progress progress-little">
                                <div class="progress-bar progress-bar-transparent-white animate-progress-bar" data-percentage="29%" style="width: 29%;"></div>
                              </div>
                            </td>
                            <td class="text-right"><span id="projectbar6"><canvas width="39" height="20" style="display: inline-block; vertical-align: top; width: 39px; height: 20px;"></canvas></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /tile body -->


                  <!-- tile footer -->
                  <div class="tile-footer text-center">
                    <ul class="pagination pagination-sm nomargin pagination-custom">
                      <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                  </div>
                  <!-- /tile footer -->



                </section>
                <!-- /tile -->


              </div>
              <!-- /col 8 -->



              <!-- col 4 -->
              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                



                <!-- tile -->
                <section class="tile color transparent-black textured">




                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Server</strong> Load</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile widget -->
                  <div class="tile-widget">

                    <div class="progress-list with-heading">
                      <div class="details">
                        <div class="title"><h2><i class="fa fa-hdd-o"></i> <span class="animate-number" data-value="394" data-animation-duration="1600">394</span> GB</h2></div>
                      </div>
                      <div class="status pull-right bg-transparent-black-1">
                        <span class="animate-number" data-value="42" data-animation-duration="1500">42</span>%
                      </div>
                      <div class="clearfix"></div>
                      <div class="progress progress-little progress-transparent-black" style="margin-bottom: 5px">
                        <div class="progress-bar animate-progress-bar" data-percentage="42%" style="width: 42%;"></div>
                      </div>
                    </div>  
                    <p class="description"><strong>394GB</strong> used of <strong class="white-text">2,048GB</strong> on File Server</p>
                  </div>
                  <!-- /tile widget -->


                  <!-- tile body -->
                  <div class="tile-body paddingtop">
                    <div id="serverload-chart" class="rickshaw_graph"><svg width="443" height="150"><g><path d="M0,23.498357339043565Q7.835374149659866,13.433845396430854,9.040816326530614,12.451262738362232C10.848979591836736,10.977388751259298,16.273469387755107,8.767122586827217,18.081632653061227,8.759617468014227S25.314285714285717,12.907335042854328,27.12244897959184,12.376211550232341S34.355102040816334,4.305813571488812,36.163265306122454,3.448382541794359S43.395918367346944,2.396562702644019,45.204081632653065,3.8019012532878094S52.43673469387756,17.733443322075896,54.24489795918368,17.501768048232265S61.477551020408164,2.336151909125311,63.285714285714285,1.4851485148514882S70.51836734693879,7.477453151582296,72.32653061224491,8.991734105494032S79.55918367346939,15.43952808061212,81.36734693877551,16.627958053968854S88.60000000000001,21.3750948571873,90.40816326530613,20.876033839061364S97.64081632653061,13.147834867344601,99.44897959183673,11.637347872709512S106.68163265306124,6.718674993311478,108.48979591836736,5.771163892710462S115.72244897959185,0.8807226185534094,117.53061224489797,2.1622368666993452S124.76326530612245,17.540362837799247,126.57142857142857,18.586306374169823S133.80408163265307,12.842478178081299,135.6122448979592,12.621672230405096S142.8448979591837,16.09188077711015,144.65306122448982,16.37824689740779S151.88571428571427,16.236059598141605,153.6938775510204,15.485333433381527S160.9265306122449,9.814703756339034,162.73469387755102,8.870985249807006S169.96734693877553,5.588304081108072,171.77551020408166,6.0481483680612484S179.00816326530614,12.140156014298023,180.81632653061226,13.469428119338772S188.04897959183674,18.010932863793023,189.85714285714286,19.340869418468742S197.08979591836734,27.779153411737195,198.89795918367346,26.768793666095974S206.13061224489797,11.329842234076866,207.9387755102041,9.237271962056525S215.1714285714286,4.969784341655307,216.97959183673473,5.8430909458925555S224.21224489795918,16.5980366122565,226.0204081632653,17.97033800442901S233.2530612244898,19.41602524010569,235.06122448979593,19.566104867617668S242.29387755102044,19.450698695973085,244.10204081632656,19.471134279548778S251.33469387755102,19.33985773495092,253.14285714285714,19.770460703374596S260.37551020408165,23.718390041094743,262.18367346938777,23.77716396378551S269.41632653061225,21.17495730338985,271.2244897959184,20.358199930282296S278.45714285714286,17.139944809178125,280.265306122449,15.60959023270999S287.4979591836735,4.457090483860881,289.30612244897964,5.054654165600965S296.53877551020406,20.63284498757667,298.3469387755102,21.58522705011083S305.57959183673466,13.618253374156488,307.3877551020408,14.57847479094255S314.6204081632653,29.409174639394084,316.42857142857144,31.187441217971454S323.6612244897959,34.82989329543291,325.46938775510205,32.36114057671624S332.7020408163266,8.303073857200916,334.5102040816327,6.499914030804717S341.7428571428572,13.197301659382864,343.5510204081633,14.329542312754256S350.78367346938774,17.57981043791427,352.59183673469386,17.822320564518634S359.8244897959184,16.425463981764885,361.6326530612245,16.754643578797896S368.865306122449,20.68848560790486,370.6734693877551,21.114116534848762S377.9061224489796,20.18431844893437,379.7142857142857,21.01095284823694S386.94693877551026,29.26036877211926,388.7551020408164,29.380460527874476S395.9877551020408,24.004120598211294,397.7959183673469,22.2118704057891S405.02857142857147,12.692497335024179,406.8367346938776,11.457958603652543S414.06938775510207,9.4266831430477,415.8775510204082,9.866483092072741S423.1102040816327,15.41370202511566,424.9183673469388,15.855958093902956S432.15102040816333,13.363730351862811,433.95918367346945,14.2890437799457Q435.1646258503402,14.905919398667626,443,25.109092374731844L443,86.99110270346625Q435.1646258503402,83.75839414200944,433.95918367346945,83.59643349114452C432.15102040816333,83.35349251484715,426.7265306122449,85.66736001343149,424.9183673469388,84.56169294049248S417.6857142857143,72.90769394973877,415.8775510204082,72.53976276175436S408.6448979591837,80.38640467581871,406.8367346938776,80.88238106064836S399.60408163265305,76.95397830726364,397.7959183673469,77.49952661005078S390.5632653061225,85.3874012702877,388.7551020408164,86.33786408851972S381.52244897959184,87.1066223947832,379.7142857142857,87.00415479237103S372.48163265306124,86.01275822895187,370.6734693877551,85.31318806439802S363.44081632653064,81.0859015401186,361.6326530612245,80.0084531468326S354.4,74.55779240338768,352.59183673469386,74.53870413153798S345.35918367346943,79.99597752043006,343.5510204081633,79.8175704283356S336.3183673469388,72.00845814576049,334.5102040816327,72.75463321059338S327.27755102040817,85.87410647636698,325.46938775510205,87.27932107666453S318.23673469387757,87.3207243918175,316.42857142857144,86.80677921356887S309.1959183673469,82.54222503659523,307.3877551020408,82.13986929417815S300.1551020408163,83.67771026306632,298.3469387755102,82.78322178939814S291.11428571428576,73.92963354060618,289.30612244897964,73.19498455749644S282.0734693877551,75.0857316291644,280.265306122449,75.43673195830073S273.0326530612245,75.78217540799443,271.2244897959184,76.70498784885976S263.9918367346939,84.1262678917692,262.18367346938777,84.66485636695398S254.95102040816326,82.24737707835257,253.14285714285714,82.09087260070756S245.91020408163268,83.02456178884142,244.10204081632656,83.09981159050389S236.86938775510205,82.94273539453849,235.06122448979593,82.8433706173322S227.82857142857142,82.76430012011879,226.0204081632653,82.10616381844103S218.78775510204085,76.58405135383947,216.97959183673473,76.26200760055468S209.74693877551022,77.89330976080633,207.9387755102041,78.88572628559311S200.70612244897958,86.08270441423949,198.89795918367346,86.18617284842239S191.66530612244898,81.3305892204225,189.85714285714286,79.92041062742206S182.62448979591838,72.74050285548137,180.81632653061226,72.08438691841799S173.58367346938778,73.27495291375224,171.77551020408166,73.35925125678835S164.54285714285714,72.08638505272864,162.73469387755102,72.92737034877915S155.5020408163265,80.71093386254135,153.6938775510204,81.76910421729347S146.46122448979594,83.51259299411512,144.65306122448982,83.5090738963004S137.4204081632653,82.58381711421406,135.6122448979592,81.73391323914615S128.3795918367347,76.08628307918767,126.57142857142857,75.01003514562133S119.33877551020409,71.4168006357036,117.53061224489797,70.97143390348279S110.29795918367348,69.73225185031554,108.48979591836736,70.55636782341324S101.25714285714285,77.93379395863964,99.44897959183673,79.21259363445981S92.21632653061225,83.2714362094609,90.40816326530613,83.34436458161493S83.17551020408163,80.76757791474292,81.36734693877551,79.94187735600005S74.13469387755103,75.73310505727565,72.32653061224491,75.08735899418619S65.09387755102041,72.50540170004585,63.285714285714285,73.48441672510546S56.0530612244898,84.59793530604806,54.24489795918368,84.87750924478235S47.012244897959185,77.37082311922892,45.204081632653065,76.28015611244828S37.971428571428575,73.4545219121422,36.163265306122454,73.97083917697604S28.930612244897965,81.32187814886366,27.12244897959184,81.44332876078667S19.889795918367348,76.0364755103672,18.081632653061227,75.18534529620615S10.848979591836736,71.67019090290673,9.040816326530614,72.9320266191762Q7.835374149659866,73.77325043002251,0,87.80370245890087Z" class="area" fill="#fff"></path></g><g><path d="M0,87.80370245890087Q7.835374149659866,73.77325043002251,9.040816326530614,72.9320266191762C10.848979591836736,71.67019090290673,16.273469387755107,74.3342150820451,18.081632653061227,75.18534529620615S25.314285714285717,81.56477937270968,27.12244897959184,81.44332876078667S34.355102040816334,74.48715644180989,36.163265306122454,73.97083917697604S43.395918367346944,75.18948910566765,45.204081632653065,76.28015611244828S52.43673469387756,85.15708318351663,54.24489795918368,84.87750924478235S61.477551020408164,74.46343175016507,63.285714285714285,73.48441672510546S70.51836734693879,74.44161293109673,72.32653061224491,75.08735899418619S79.55918367346939,79.11617679725718,81.36734693877551,79.94187735600005S88.60000000000001,83.41729295376895,90.40816326530613,83.34436458161493S97.64081632653061,80.49139331027997,99.44897959183673,79.21259363445981S106.68163265306124,71.38048379651094,108.48979591836736,70.55636782341324S115.72244897959185,70.52606717126199,117.53061224489797,70.97143390348279S124.76326530612245,73.933787212055,126.57142857142857,75.01003514562133S133.80408163265307,80.88400936407824,135.6122448979592,81.73391323914615S142.8448979591837,83.50555479848566,144.65306122448982,83.5090738963004S151.88571428571427,82.8272745720456,153.6938775510204,81.76910421729347S160.9265306122449,73.76835564482965,162.73469387755102,72.92737034877915S169.96734693877553,73.44354959982446,171.77551020408166,73.35925125678835S179.00816326530614,71.42827098135461,180.81632653061226,72.08438691841799S188.04897959183674,78.51023203442162,189.85714285714286,79.92041062742206S197.08979591836734,86.28964128260529,198.89795918367346,86.18617284842239S206.13061224489797,79.87814281037988,207.9387755102041,78.88572628559311S215.1714285714286,75.9399638472699,216.97959183673473,76.26200760055468S224.21224489795918,81.44802751676328,226.0204081632653,82.10616381844103S233.2530612244898,82.74400584012591,235.06122448979593,82.8433706173322S242.29387755102044,83.17506139216636,244.10204081632656,83.09981159050389S251.33469387755102,81.93436812306254,253.14285714285714,82.09087260070756S260.37551020408165,85.20344484213877,262.18367346938777,84.66485636695398S269.41632653061225,77.62780028972509,271.2244897959184,76.70498784885976S278.45714285714286,75.78773228743705,280.265306122449,75.43673195830073S287.4979591836735,72.4603355743867,289.30612244897964,73.19498455749644S296.53877551020406,81.88873331572997,298.3469387755102,82.78322178939814S305.57959183673466,81.73751355176108,307.3877551020408,82.13986929417815S314.6204081632653,86.29283403532024,316.42857142857144,86.80677921356887S323.6612244897959,88.68453567696208,325.46938775510205,87.27932107666453S332.7020408163266,73.50080827542628,334.5102040816327,72.75463321059338S341.7428571428572,79.63916333624114,343.5510204081633,79.8175704283356S350.78367346938774,74.51961585968829,352.59183673469386,74.53870413153798S359.8244897959184,78.93100475354659,361.6326530612245,80.0084531468326S368.865306122449,84.61361789984417,370.6734693877551,85.31318806439802S377.9061224489796,86.90168718995885,379.7142857142857,87.00415479237103S386.94693877551026,87.28832690675175,388.7551020408164,86.33786408851972S395.9877551020408,78.04507491283792,397.7959183673469,77.49952661005078S405.02857142857147,81.378357445478,406.8367346938776,80.88238106064836S414.06938775510207,72.17183157376995,415.8775510204082,72.53976276175436S423.1102040816327,83.45602586755346,424.9183673469388,84.56169294049248S432.15102040816333,83.35349251484715,433.95918367346945,83.59643349114452Q435.1646258503402,83.75839414200944,443,86.99110270346625L443,150Q435.1646258503402,150,433.95918367346945,150C432.15102040816333,150,426.7265306122449,150,424.9183673469388,150S417.6857142857143,150,415.8775510204082,150S408.6448979591837,150,406.8367346938776,150S399.60408163265305,150,397.7959183673469,150S390.5632653061225,150,388.7551020408164,150S381.52244897959184,150,379.7142857142857,150S372.48163265306124,150,370.6734693877551,150S363.44081632653064,150,361.6326530612245,150S354.4,150,352.59183673469386,150S345.35918367346943,150,343.5510204081633,150S336.3183673469388,150,334.5102040816327,150S327.27755102040817,150,325.46938775510205,150S318.23673469387757,150,316.42857142857144,150S309.1959183673469,150,307.3877551020408,150S300.1551020408163,150,298.3469387755102,150S291.11428571428576,150,289.30612244897964,150S282.0734693877551,150,280.265306122449,150S273.0326530612245,150,271.2244897959184,150S263.9918367346939,150,262.18367346938777,150S254.95102040816326,150,253.14285714285714,150S245.91020408163268,150,244.10204081632656,150S236.86938775510205,150,235.06122448979593,150S227.82857142857142,150,226.0204081632653,150S218.78775510204085,150,216.97959183673473,150S209.74693877551022,150,207.9387755102041,150S200.70612244897958,150,198.89795918367346,150S191.66530612244898,150,189.85714285714286,150S182.62448979591838,150,180.81632653061226,150S173.58367346938778,150,171.77551020408166,150S164.54285714285714,150,162.73469387755102,150S155.5020408163265,150,153.6938775510204,150S146.46122448979594,150,144.65306122448982,150S137.4204081632653,150,135.6122448979592,150S128.3795918367347,150,126.57142857142857,150S119.33877551020409,150,117.53061224489797,150S110.29795918367348,150,108.48979591836736,150S101.25714285714285,150,99.44897959183673,150S92.21632653061225,150,90.40816326530613,150S83.17551020408163,150,81.36734693877551,150S74.13469387755103,150,72.32653061224491,150S65.09387755102041,150,63.285714285714285,150S56.0530612244898,150,54.24489795918368,150S47.012244897959185,150,45.204081632653065,150S37.971428571428575,150,36.163265306122454,150S28.930612244897965,150,27.12244897959184,150S19.889795918367348,150,18.081632653061227,150S10.848979591836736,150,9.040816326530614,150Q7.835374149659866,150,0,150Z" class="area" fill="#6e6e6e"></path></g></svg><div class="detail"></div></div>
                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->


                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Browser</strong> Usage</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    <div id="browser-usage" style="height: 230px;" class="morris-chart"><svg height="230" version="1.1" width="414" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.328125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#00a3d8" d="M207,185A70,70,0,0,0,276.95516536429477,117.50496284486825" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#00a3d8" stroke="rgba(0,0,0,0)" d="M207,188A73,73,0,0,0,279.9532438799074,117.61231839536259L311.93274804644216,118.75744426730236A105,105,0,0,1,207,220Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#2fbbe8" d="M276.95516536429477,117.50496284486825A70,70,0,0,0,231.94071409670624,49.59387811262356" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#2fbbe8" stroke="rgba(0,0,0,0)" d="M279.9532438799074,117.61231839536259A73,73,0,0,0,233.00960184370794,46.79075860316456L242.6295915667232,21.56268301803364A100,100,0,0,1,306.9359505204211,118.57851834981177Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#72cae7" d="M231.94071409670624,49.59387811262356A70,70,0,0,0,168.3301187236666,56.65070452803848" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#72cae7" stroke="rgba(0,0,0,0)" d="M233.00960184370794,46.79075860316456A73,73,0,0,0,166.67283809753803,54.15002043638299L151.75731246238087,31.64386361148354A100,100,0,0,1,242.6295915667232,21.56268301803364Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#d9544f" d="M168.3301187236666,56.65070452803848A70,70,0,0,0,150.08468525216037,74.24896385177001" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#d9544f" stroke="rgba(0,0,0,0)" d="M166.67283809753803,54.15002043638299A73,73,0,0,0,147.64545747725293,72.50249087398872L125.69240750308623,56.78423407395715A100,100,0,0,1,151.75731246238087,31.64386361148354Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ffc100" d="M150.08468525216037,74.24896385177001A70,70,0,0,0,137.04405113058016,117.48298565825587" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ffc100" stroke="rgba(0,0,0,0)" d="M147.64545747725293,72.50249087398872A73,73,0,0,0,134.04593903617643,117.58939932932397L107.06293018654308,118.54712236893695A100,100,0,0,1,125.69240750308623,56.78423407395715Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#1693a5" d="M137.04405113058016,117.48298565825587A70,70,0,0,0,206.97800885178657,184.9999965456384" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#1693a5" stroke="rgba(0,0,0,0)" d="M134.04593903617643,117.58939932932397A73,73,0,0,0,206.977066374006,187.99999639759432L206.9685840739808,214.9999950651977A100,100,0,0,1,107.06293018654308,118.54712236893695Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="207" y="105" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" font-weight="800" transform="matrix(1.75,0,0,1.75,-155.25,-86.25)" stroke-width="0.5714285714285714" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-size: 15px; line-height: normal; font-family: Arial;"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Chrome</tspan></text><text x="207" y="125" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" transform="matrix(1.2281,0,0,1.2281,-47.2105,-26.3421)" stroke-width="0.8142857142857143" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-family: Arial;"><tspan dy="5.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text></svg></div>
                    <ul class="inline text-center chart-legend">
                      <li><span class="badge badge-outline" style="border-color: #00a3d8"></span> Chrome <small>25%</small>,</li>
                      <li><span class="badge badge-outline" style="border-color: #1693A5"></span> Other <small>25%</small>,</li>
                      <li><span class="badge badge-outline" style="border-color: #2fbbe8"></span> Safari <small>20%</small>,</li>
                      <li><span class="badge badge-outline" style="border-color: #72cae7"></span> Firefox <small>15%</small>,</li>
                      <li><span class="badge badge-outline" style="border-color: #ffc100"></span> Internet Explorer <small>10%</small>,</li>
                      <li><span class="badge badge-outline" style="border-color: #d9544f"></span> Opera <small>5%</small></li>
                    </ul>
                  </div>
                  <!-- /tile body --> 




                </section>
                <!-- /tile -->



                <!-- tile -->
                <section class="tile transparent">




                  <!-- tile header -->
                  <div class="tile-header color redbrown rounded-top-corners text-center">               
                    <button class="btn pull-left btn-black-transparent" type="button"><i class="fa fa-caret-square-o-down"></i></button>
                    <h2><strong>Todo</strong> List</h2>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-bottom-corners">
                    <input type="text" placeholder="Add new todo..." class="w100p bottommargin">
                    <ul class="nolisttypes" id="todolist">
                      <li>
                        <div class="checkbox check-transparent">
                          <input type="checkbox" value="1" id="todo-01">
                          <label for="todo-01">Make a backup</label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox check-transparent">
                          <input type="checkbox" checked="checked" value="1" id="todo-02">
                          <label for="todo-02" class="done">Send e-mail to Ici</label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox check-transparent">
                          <input type="checkbox" value="1" id="todo-03">
                          <label for="todo-03">Buy tickets</label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox check-transparent">
                          <input type="checkbox" value="1" id="todo-04">
                          <label for="todo-04">Resolve issues</label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox check-transparent">
                          <input type="checkbox" value="1" id="todo-05">
                          <label for="todo-05">Compile new version</label>
                        </div>
                      </li>
                      <li>
                        <div class="checkbox check-transparent">
                          <input type="checkbox" value="1" id="todo-06">
                          <label for="todo-06">Upload new version</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col 4 -->
              
              
            </div>
            <!-- /row -->


            <!-- row -->
            <div class="row">




              <!-- col 6 -->
              <div class="col-md-6">

                
                <!-- tile -->
                <section class="tile transparent recent-activity">




                  <!-- tile header -->
                  <div class="tile-header transparent">               
                    <h1><strong>Recent</strong> Activity</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->


                  
                  <!-- tile widget -->
                  <div class="tile-widget color transparent-black rounded-top-corners nopadding">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabdrop"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-th-list"></i> <span class="badge"></span></a><ul class="dropdown-menu"></ul></li>
                      <li class="active"><a href="#users-tab" data-toggle="tab">Users</a></li>
                      <li><a href="#orders-tab" data-toggle="tab">Orders</a></li>
                      <li><a href="#messages-tab" data-toggle="tab">Messages</a></li>
                      <li><a href="#tasks-tab" data-toggle="tab">Tasks</a></li>
                      <li><a href="#comments-tab" data-toggle="tab">Comments</a></li>
                    </ul>
                    <!-- / Nav tabs -->
                  </div>
                  <!-- /tile widget -->




                  <!-- tile body -->
                  <div class="tile-body tab-content nopadding rounded-bottom-corners">
                    <!-- Tab panes -->
                    
                    <ul id="users-tab" class="tab-pane fade in active">
                      <li>
                        <img src="assets/images/peter-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Peter <strong>Kay</strong></span>
                        <span class="subject">has been <strong>unbanned</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Arnold <strong>Karlsberg</strong></span>
                        <span class="subject">has been <strong>unbanned</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 1 hour ago</span>
                      </li>
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Arnold <strong>Karlsberg</strong></span>
                        <span class="subject">has been <strong>banned</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 2 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/ici-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Ing. Imrich <strong>Kamarel</strong></span>
                        <span class="subject">has been <strong>updated</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 4 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Arnold <strong>Karlsberg</strong></span>
                        <span class="subject">has been <strong>registered</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 8 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/peter-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Peter <strong>Kay</strong></span>
                        <span class="subject">has been <strong>banned</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 12 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/peter-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Peter <strong>Kay</strong></span>
                        <span class="subject">has been <strong>registered</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> yesterday</span>
                      </li>
                    </ul>

                    <ul id="orders-tab" class="tab-pane fade">
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Arnold <strong>Karlsberg</strong></span>
                        <span class="subject">send new order <strong>OR_00012014</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/george-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">George <strong>McCain</strong></span>
                        <span class="subject">change order <strong>OR_02172013</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 27 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/george-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">George <strong>McCain</strong></span>
                        <span class="subject">send new order <strong>OR_02172013</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 35 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/peter-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Peter <strong>Kay</strong></span>
                        <span class="subject">cancelled order <strong>OR_02162013</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 2 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/peter-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Peter <strong>Kay</strong></span>
                        <span class="subject">send new order <strong>OR_02162013</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 3 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/ici-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Ing. Imrich <strong>Kamarel</strong></span>
                        <span class="subject">send new order <strong>OR_02152013</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 5 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/ici-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Ing. Imrich <strong>Kamarel</strong></span>
                        <span class="subject">send new order <strong>OR_02142013</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 5 hours ago</span>
                      </li>
                    </ul>

                    <ul id="messages-tab" class="tab-pane fade">
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>Peter Kay</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>Peter Kay</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 30 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>Ing. Imrich Kamarel</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 35 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>Arnold Arnold</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 42 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>George McCain</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 1 hour ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>Ing. Imrich Kamarel</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 1 hour ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">received new message from <strong>Ing. Imrich Kamarel</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 1 hour ago</span>
                      </li>
                    </ul>

                    <ul id="tasks-tab" class="tab-pane fade">
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">cancelled task <strong>Get drunk</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 15 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">finished task <strong>Gifts!</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 59 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">finished task <strong>Make backup</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 3 hours ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">have a new task <strong>Gifts!</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> yesterday</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">finished task <strong>Send emails</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> yesterday</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">have a new task <strong>Send emails</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> yesterday</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab"><strong>You</strong></span>
                        <span class="subject">have a new task <strong>Make backup</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> yesterday</span>
                      </li>
                    </ul>

                    <ul id="comments-tab" class="tab-pane fade">
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Arnold <strong>Karlsberg</strong></span>
                        <span class="subject">deleted comment <strong>CM_00019</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 5 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Arnold <strong>Karlsberg</strong></span>
                        <span class="subject">posted a new comment <strong>CM_00019</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 8 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab">John <strong>Douey</strong></span>
                        <span class="subject">posted a new comment <strong>CM_00018</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 9 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/peter-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Peter <strong>Kay</strong></span>
                        <span class="subject">posted a new comment <strong>CM_00017</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 18 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Ing. Imrich <strong>Kamarel</strong></span>
                        <span class="subject">updated comment <strong>CM_00016</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 25 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/arnold-avatar.jpg" class="w35" alt="">
                        <span class="user font-slab">Ing. Imrich <strong>Kamarel</strong></span>
                        <span class="subject">posted a new comment <strong>CM_00016</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 42 minutes ago</span>
                      </li>
                      <li>
                        <img src="assets/images/profile-photo.jpg" class="w35" alt="">
                        <span class="user font-slab">John <strong>Douey</strong></span>
                        <span class="subject">posted a new comment <strong>CM_00015</strong></span>
                        <span class="time"><i class="fa fa-clock-o"></i> 56 minutes ago</span>
                      </li>
                    </ul>

                    <!-- / Tab panes -->
                  </div>
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->


              </div>
              <!-- /col 6 -->




              <!-- col 6 -->
              <div class="col-md-6">



                <!-- tile -->
                <section class="tile transparent">




                  <!-- tile header -->
                  <div class="tile-header transparent">               
                    <h1><strong>Quick</strong> Message</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->



                  <!-- tile widget -->
                  <div class="tile-widget color transparent-black rounded-top-corners">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="message-to" class="col-sm-2 control-label font-slab">Recipients</label>
                        <div class="col-sm-10">
                          <select data-placeholder="Select recipients..." multiple="" tabindex="-1" class="chosen-select form-control chosen-transparent" id="message-to" style="display: none;">
                            <option value="ici@gmail.com">ici@gmail.com</option>
                            <option value="johny@gmail.com">johny@gmail.com</option>
                            <option value="arnie@gmail.com">arnie@gmail.com</option>
                            <option value="pete@gmail.com">pete@gmail.com</option>
                            <option value="gorge@gmail.com">gorge@gmail.com</option>
                          </select><div class="chosen-container chosen-container-multi" style="width: 537px;" title="" id="message_to_chosen"><ul class="chosen-choices"><li class="search-field"><input type="text" value="Select recipients..." class="default" autocomplete="off" style="width: 141px;" tabindex="3"></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
                        </div>
                      </div>
                      <div class="form-group no-bottom-margin">
                        <label for="subject" class="col-sm-2 control-label font-slab">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control transparent" id="subject" placeholder="Type subject here...">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /tile widget -->



                  <!-- tile body -->
                  <div class="tile-body nopadding">
                    <div id="quick-message-content" style="display: none;"></div><div class="note-editor"><div class="note-dropzone"><div class="note-dropzone-message"></div></div><div class="note-dialog"><div class="note-image-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4>Insert Image</h4></div><div class="modal-body"><div class="row-fluid"><h5>Select from files</h5><input class="note-image-input" type="file" name="files" accept="image/*"><h5>Image URL</h5><input class="note-image-url form-control span12" type="text"></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-image-btn disabled" disabled="disabled">Insert Image</button></div></div></div></div><div class="note-link-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4>Insert Link</h4></div><div class="modal-body"><div class="row-fluid"><div class="form-group"><label>Text to display</label><span class="note-link-text form-control input-xlarge uneditable-input"></span></div><div class="form-group"><label>To what URL should this link go?</label><input class="note-link-url form-control span12" type="text"></div></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-link-btn disabled" disabled="disabled">Insert Link</button></div></div></div></div><div class="note-video-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4>Insert Video</h4></div><div class="modal-body"><div class="row-fluid"><div class="form-group"><label>Video URL?</label>&nbsp;<small class="text-muted">(YouTube, Vimeo, Vine, Instagram, or DailyMotion)</small><input class="note-video-url form-control span12" type="text"></div></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-video-btn disabled" disabled="disabled">Insert Video</button></div></div></div></div><div class="note-help-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="modal-background"><a class="modal-close pull-right" aria-hidden="true" tabindex="-1">Close</a><div class="title">Keyboard shortcuts</div><table class="note-shortcut-layout"><tbody><tr><td><table class="note-shortcut"><thead><tr><th></th><th>Action</th></tr></thead><tbody><tr><td>Ctrl + Z</td><td>Undo</td></tr><tr><td>Ctrl + Shift + Z</td><td>Redo</td></tr><tr><td>Ctrl + ]</td><td>Indent</td></tr><tr><td>Ctrl + [</td><td>Outdent</td></tr><tr><td>Ctrl + K</td><td>Insert Link</td></tr><tr><td>Ctrl + ENTER</td><td>Insert Horizontal Rule</td></tr></tbody></table></td><td><table class="note-shortcut"><thead><tr><th></th><th>Text formatting</th></tr></thead><tbody><tr><td>Ctrl + B</td><td>Bold</td></tr><tr><td>Ctrl + I</td><td>Italic</td></tr><tr><td>Ctrl + U</td><td>Underline</td></tr><tr><td>Ctrl + Shift + S</td><td>Strike</td></tr><tr><td>Ctrl + \</td><td>Remove Font Style</td></tr></tbody></table></td></tr><tr><td><table class="note-shortcut"><thead><tr><th></th><th>Document Style</th></tr></thead><tbody><tr><td>Ctrl + NUM0</td><td>Normal</td></tr><tr><td>Ctrl + NUM1</td><td>Header 1</td></tr><tr><td>Ctrl + NUM2</td><td>Header 2</td></tr><tr><td>Ctrl + NUM3</td><td>Header 3</td></tr><tr><td>Ctrl + NUM4</td><td>Header 4</td></tr><tr><td>Ctrl + NUM5</td><td>Header 5</td></tr><tr><td>Ctrl + NUM6</td><td>Header 6</td></tr></tbody></table></td><td><table class="note-shortcut"><thead><tr><th></th><th>Paragraph formatting</th></tr></thead><tbody><tr><td>Ctrl + Shift + L</td><td>Align left</td></tr><tr><td>Ctrl + Shift + E</td><td>Align center</td></tr><tr><td>Ctrl + Shift + R</td><td>Align right</td></tr><tr><td>Ctrl + Shift + J</td><td>Justify full</td></tr><tr><td>Ctrl + Shift + NUM7</td><td>Ordered list</td></tr><tr><td>Ctrl + Shift + NUM8</td><td>Unordered list</td></tr></tbody></table></td></tr></tbody></table><p class="text-center"><a href="//hackerwins.github.io/summernote/" target="_blank">Summernote 0.5.1</a> · <a href="//github.com/HackerWins/summernote" target="_blank">Project</a> · <a href="//github.com/HackerWins/summernote/issues" target="_blank">Issues</a></p></div></div></div></div></div></div><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><div class="note-popover"><div class="note-link-popover popover bottom in" style="display: none;"><div class="arrow"></div><div class="popover-content note-link-content"><a href="http://www.google.com" target="_blank">www.google.com</a>&nbsp;&nbsp;<div class="note-insert btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="showLinkDialog" tabindex="-1" data-original-title="Edit"><i class="fa fa-edit icon-edit"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="unlink" tabindex="-1" data-original-title="Unlink"><i class="fa fa-unlink icon-unlink"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="showVideoDialog" tabindex="-1" data-original-title="Video Link"><i class="fa fa-youtube-play icon-play"></i></button></div></div></div><div class="note-image-popover popover bottom in" style="display: none;"><div class="arrow"></div><div class="popover-content note-image-content"><div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="1" tabindex="-1" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span> </button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.5" tabindex="-1" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span> </button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.25" tabindex="-1" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span> </button></div><div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="left" tabindex="-1" data-original-title="Float Left"><i class="fa fa-align-left icon-align-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="right" tabindex="-1" data-original-title="Float Right"><i class="fa fa-align-right icon-align-right"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="none" tabindex="-1" data-original-title="Float None"><i class="fa fa-align-justify icon-align-justify"></i></button></div></div></div></div><div class="note-toolbar btn-toolbar"><div class="note-style btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+B" data-mac-shortcut="⌘+B" data-event="bold" tabindex="-1" data-original-title="Bold (Ctrl+B)"><i class="fa fa-bold icon-bold"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+I" data-mac-shortcut="⌘+I" data-event="italic" tabindex="-1" data-original-title="Italic (Ctrl+I)"><i class="fa fa-italic icon-italic"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+U" data-mac-shortcut="⌘+U" data-event="underline" tabindex="-1" data-original-title="Underline (Ctrl+U)"><i class="fa fa-underline icon-underline"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+\" data-mac-shortcut="⌘+\" data-event="removeFormat" tabindex="-1" data-original-title="Remove Font Style (Ctrl+\)"><i class="fa fa-eraser icon-eraser"></i></button></div><div class="note-fontsize btn-group"><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-original-title="Font Size"><span class="note-current-fontsize">11</span> <b class="caret"></b></button><ul class="dropdown-menu"><li><a data-event="fontSize" data-value="8"><i class="fa fa-check icon-ok"></i> 8</a></li><li><a data-event="fontSize" data-value="9"><i class="fa fa-check icon-ok"></i> 9</a></li><li><a data-event="fontSize" data-value="10"><i class="fa fa-check icon-ok"></i> 10</a></li><li><a data-event="fontSize" data-value="11"><i class="fa fa-check icon-ok"></i> 11</a></li><li><a data-event="fontSize" data-value="12"><i class="fa fa-check icon-ok"></i> 12</a></li><li><a data-event="fontSize" data-value="14"><i class="fa fa-check icon-ok"></i> 14</a></li><li><a data-event="fontSize" data-value="18"><i class="fa fa-check icon-ok"></i> 18</a></li><li><a data-event="fontSize" data-value="24"><i class="fa fa-check icon-ok"></i> 24</a></li><li><a data-event="fontSize" data-value="36"><i class="fa fa-check icon-ok"></i> 36</a></li></ul></div><div class="note-color btn-group"><button type="button" class="btn btn-default btn-sm btn-small note-recent-color" title="" data-event="color" data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1" data-original-title="Recent Color"><i class="fa fa-font icon-font" style="color:black;background-color:yellow;"></i></button><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" title="" data-toggle="dropdown" tabindex="-1" data-original-title="More Color"><span class="caret"></span></button><ul class="dropdown-menu"><li><div class="btn-group"><div class="note-palette-title">BackColor</div><div class="note-color-reset" data-event="backColor" data-value="inherit" title="Transparent">Set transparent</div><div class="note-color-palette" data-target-event="backColor"><div><button type="button" class="note-color-btn" style="background-color:#000000;" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242;" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363;" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94;" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE;" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF;" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7;" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF;" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div><div><button type="button" class="note-color-btn" style="background-color:#FF0000;" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00;" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00;" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00;" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF;" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF;" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF;" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF;" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div><div><button type="button" class="note-color-btn" style="background-color:#F7C6CE;" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE;" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6;" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6;" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7;" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7;" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7;" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE;" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div><div><button type="button" class="note-color-btn" style="background-color:#E79C9C;" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C;" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C;" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5;" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE;" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF;" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6;" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD;" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div><div><button type="button" class="note-color-btn" style="background-color:#E76363;" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B;" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663;" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B;" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD;" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE;" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6;" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5;" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div><div><button type="button" class="note-color-btn" style="background-color:#CE0000;" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439;" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631;" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A;" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C;" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6;" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5;" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B;" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div><div><button type="button" class="note-color-btn" style="background-color:#9C0000;" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308;" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400;" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21;" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A;" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294;" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873;" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842;" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div><div><button type="button" class="note-color-btn" style="background-color:#630000;" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900;" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300;" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218;" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139;" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163;" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A;" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031;" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div></div></div><div class="btn-group"><div class="note-palette-title">FontColor</div><div class="note-color-reset" data-event="foreColor" data-value="inherit" title="Reset">Reset to default</div><div class="note-color-palette" data-target-event="foreColor"><div><button type="button" class="note-color-btn" style="background-color:#000000;" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button><button type="button" class="note-color-btn" style="background-color:#424242;" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button><button type="button" class="note-color-btn" style="background-color:#636363;" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94;" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE;" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF;" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7;" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF;" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div><div><button type="button" class="note-color-btn" style="background-color:#FF0000;" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00;" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00;" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button><button type="button" class="note-color-btn" style="background-color:#00FF00;" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF;" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button><button type="button" class="note-color-btn" style="background-color:#0000FF;" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF;" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF;" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button></div><div><button type="button" class="note-color-btn" style="background-color:#F7C6CE;" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE;" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6;" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6;" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7;" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7;" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7;" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE;" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button></div><div><button type="button" class="note-color-btn" style="background-color:#E79C9C;" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C;" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C;" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5;" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE;" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF;" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6;" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD;" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button></div><div><button type="button" class="note-color-btn" style="background-color:#E76363;" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B;" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button><button type="button" class="note-color-btn" style="background-color:#FFD663;" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B;" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD;" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE;" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6;" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5;" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button></div><div><button type="button" class="note-color-btn" style="background-color:#CE0000;" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button><button type="button" class="note-color-btn" style="background-color:#E79439;" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button><button type="button" class="note-color-btn" style="background-color:#EFC631;" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A;" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C;" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button><button type="button" class="note-color-btn" style="background-color:#3984C6;" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button><button type="button" class="note-color-btn" style="background-color:#634AA5;" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B;" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button></div><div><button type="button" class="note-color-btn" style="background-color:#9C0000;" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button><button type="button" class="note-color-btn" style="background-color:#B56308;" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button><button type="button" class="note-color-btn" style="background-color:#BD9400;" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button><button type="button" class="note-color-btn" style="background-color:#397B21;" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button><button type="button" class="note-color-btn" style="background-color:#104A5A;" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button><button type="button" class="note-color-btn" style="background-color:#085294;" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button><button type="button" class="note-color-btn" style="background-color:#311873;" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button><button type="button" class="note-color-btn" style="background-color:#731842;" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button></div><div><button type="button" class="note-color-btn" style="background-color:#630000;" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button><button type="button" class="note-color-btn" style="background-color:#7B3900;" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button><button type="button" class="note-color-btn" style="background-color:#846300;" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button><button type="button" class="note-color-btn" style="background-color:#295218;" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button><button type="button" class="note-color-btn" style="background-color:#083139;" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button><button type="button" class="note-color-btn" style="background-color:#003163;" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button><button type="button" class="note-color-btn" style="background-color:#21104A;" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button><button type="button" class="note-color-btn" style="background-color:#4A1031;" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button></div></div></div></li></ul></div><div class="note-para btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+8" data-mac-shortcut="⌘+⇧+7" data-event="insertUnorderedList" tabindex="-1" data-original-title="Unordered list (Ctrl+Shift+8)"><i class="fa fa-list-ul icon-list-ul"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+7" data-mac-shortcut="⌘+⇧+8" data-event="insertOrderedList" tabindex="-1" data-original-title="Ordered list (Ctrl+Shift+7)"><i class="fa fa-list-ol icon-list-ol"></i></button><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" title="" data-toggle="dropdown" tabindex="-1" data-original-title="Paragraph"><i class="fa fa-align-left icon-align-left"></i>  <span class="caret"></span></button><ul class="dropdown-menu"><li><div class="note-align btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+L" data-mac-shortcut="⌘+⇧+L" data-event="justifyLeft" tabindex="-1" data-original-title="Align left (Ctrl+Shift+L)"><i class="fa fa-align-left icon-align-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+E" data-mac-shortcut="⌘+⇧+E" data-event="justifyCenter" tabindex="-1" data-original-title="Align center (Ctrl+Shift+E)"><i class="fa fa-align-center icon-align-center"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+R" data-mac-shortcut="⌘+⇧+R" data-event="justifyRight" tabindex="-1" data-original-title="Align right (Ctrl+Shift+R)"><i class="fa fa-align-right icon-align-right"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+J" data-mac-shortcut="⌘+⇧+J" data-event="justifyFull" tabindex="-1" data-original-title="Justify full (Ctrl+Shift+J)"><i class="fa fa-align-justify icon-align-justify"></i></button></div></li><li><div class="note-list btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+[" data-mac-shortcut="⌘+[" data-event="outdent" tabindex="-1" data-original-title="Outdent (Ctrl+[)"><i class="fa fa-outdent icon-indent-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+]" data-mac-shortcut="⌘+]" data-event="indent" tabindex="-1" data-original-title="Indent (Ctrl+])"><i class="fa fa-indent icon-indent-right"></i></button></div></li></ul></div><div class="note-height btn-group"><button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-original-title="Line Height"><i class="fa fa-text-height icon-text-height"></i>&nbsp; <b class="caret"></b></button><ul class="dropdown-menu"><li><a data-event="lineHeight" data-value="1.0"><i class="fa fa-check icon-ok"></i> 1.0</a></li><li><a data-event="lineHeight" data-value="1.2"><i class="fa fa-check icon-ok"></i> 1.2</a></li><li><a data-event="lineHeight" data-value="1.4"><i class="fa fa-check icon-ok"></i> 1.4</a></li><li><a data-event="lineHeight" data-value="1.5"><i class="fa fa-check icon-ok"></i> 1.5</a></li><li><a data-event="lineHeight" data-value="1.6"><i class="fa fa-check icon-ok"></i> 1.6</a></li><li><a data-event="lineHeight" data-value="1.8"><i class="fa fa-check icon-ok"></i> 1.8</a></li><li><a data-event="lineHeight" data-value="2.0"><i class="fa fa-check icon-ok"></i> 2.0</a></li><li><a data-event="lineHeight" data-value="3.0"><i class="fa fa-check icon-ok"></i> 3.0</a></li></ul></div></div><textarea class="note-codable"></textarea><div class="note-editable" contenteditable="true" style="height: 143px;"><p><br></p></div><div class="note-statusbar"><div class="note-resizebar"><div class="note-icon-bar"></div><div class="note-icon-bar"></div><div class="note-icon-bar"></div></div></div></div>
                  </div>
                  <!-- /tile body -->


                  <!-- tile footer -->
                  <div class="tile-footer rounded-bottom-corners text-right">
                    <a class="submit font-slab" href="#"><strong>Send</strong> message <i class="fa fa-comment"></i></a>
                  </div>
                  <!-- /tile footer -->

                


                </section>
                <!-- /tile -->

              


              </div>
              <!-- /col 6 -->
              



            </div>
            <!-- /row -->  



          </div>
          <!-- /content container -->






        </div>

@stop