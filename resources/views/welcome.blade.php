@extends('layouts.admin.admin')

@section('page-name')
    Dashboard
@endsection

@section('breadcrumb')
{{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Dashboard</a></li>--}}
{{--    <li class="breadcrumb-item active">Dashboard</li>--}}
@endsection

@section('conteudo')
    <div class="row clearfix">
        <div class="col-sm-12">
            <div class="card">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="body">
                            <h2 class="number count-to m-t-0" data-from="0" data-to="501" data-speed="1000" data-fresh-interval="700">501</h2>
                            <p class="text-muted">New Patient</p>
                            <span id="linecustom1">1,4,2,6,5,7,5,8,5,2</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="body">
                            <h2 class="number count-to m-t-0" data-from="0" data-to="2501" data-speed="2000" data-fresh-interval="700">2501</h2>
                            <p class="text-muted ">Satisfied Patient</p>
                            <span id="linecustom2">2,9,5,5,8,5,4,2,6</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <div class="body">
                            <h2 class="number count-to m-t-0" data-from="0" data-to="6051" data-speed="2000" data-fresh-interval="700">6051</h2>
                            <p class="text-muted">Visitors</p>
                            <span id="linecustom3">1,5,3,6,6,3,6,8,4,7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Hospital</strong> Annual Report</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row text-center">
                        <div class="col-sm-3 col-6">
                            <h4 class="m-t-0">$ 106 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                            <p class="text-muted"> Today's</p>
                        </div>
                        <div class="col-sm-3 col-6">
                            <h4 class="m-t-0">$ 907 <i class="zmdi zmdi-trending-down col-red"></i></h4>
                            <p class="text-muted">This Week's</p>
                        </div>
                        <div class="col-sm-3 col-6">
                            <h4 class="m-t-0">$ 4210 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                            <p class="text-muted">This Month's</p>
                        </div>
                        <div class="col-sm-3 col-6">
                            <h4 class="m-t-0">$ 67,000 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                            <p class="text-muted">This Year's</p>
                        </div>
                    </div>
                    <div id="area_chart" class="graph"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <input type="text" class="knob" data-skin="tron" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#4CAF50" readonly>
                    <h6 class="m-t-20">Satisfaction Rate</h6>
                    <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                    <h6 class="m-t-20">Operation Panding</h6>
                    <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                    <h6 class="m-t-20">Productivity Goal</h6>
                    <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
                <div class="body">
                    <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                    <h6 class="m-t-20">Total Revenue</h6>
                    <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>

                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 col-lg-8">
            <div class="card visitors-map">
                <div class="header">
                    <h2><strong>Visitors</strong> Statistics</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="world-map-markers" class="jvector-map m-b-5"></div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-sm-6">
                            <div class="progress-container m-b-20">
                                <span class="progress-badge">visitor from america</span>
                                <div class="progress">
                                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="progress-container m-b-20">
                                <span class="progress-badge">visitor from Canada</span>
                                <div class="progress">
                                    <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="progress-container m-b-20">
                                <span class="progress-badge">visitor from asia</span>
                                <div class="progress">
                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="progress-container m-b-20">
                                <span class="progress-badge">visitor from america</span>
                                <div class="progress">
                                    <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="progress-container m-b-20">
                                <span class="progress-badge">visitor from Canada</span>
                                <div class="progress">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="progress-container m-b-20">
                                <span class="progress-badge">visitor from asia</span>
                                <div class="progress">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Browser</strong> Usage</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="donut_chart" class="dashboard-donut-chart"></div>
                    <table class="table m-t-15 m-b-0">
                        <tbody>
                        <tr>
                            <td>Chrome</td>
                            <td>6985</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td>2697</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Safari</td>
                            <td>3597</td>
                            <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                        </tr>
                        <tr>
                            <td>Firefox</td>
                            <td>2145</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Opera</td>
                            <td>1854</td>
                            <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-5 col-md-12">
            <div class="card weather2">
                <div class="city-selected body l-salmon">
                    <div class="row">
                        <div class="info col-7">
                            <div class="city"><span>City:</span> New York</div>
                            <div class="night">Day - 12:07 PM</div>
                            <div class="temp"><h2>34°</h2></div>
                        </div>
                        <div class="icon col-5">
                            <img src="{{asset('tema/images/weather/summer.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <table class="table table-striped m-b-0">
                    <tbody>
                    <tr>
                        <td>Wind</td>
                        <td class="font-medium">ESE 17 mph</td>
                    </tr>
                    <tr>
                        <td>Humidity</td>
                        <td class="font-medium">72%</td>
                    </tr>
                    <tr>
                        <td>Pressure</td>
                        <td class="font-medium">25.56 in</td>
                    </tr>
                    <tr>
                        <td>Cloud Cover</td>
                        <td class="font-medium">80%</td>
                    </tr>
                    <tr>
                        <td>Ceiling</td>
                        <td class="font-medium">25280 ft</td>
                    </tr>
                    </tbody>
                </table>
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item text-center active">
                            <div class="col-12">
                                <ul class="row days-list list-unstyled">
                                    <li class="day col-4">
                                        <p>Monday</p>
                                        <img src="{{asset('tema/images/weather/rain.svg')}}" alt="">
                                    </li>
                                    <li class="day col-4">
                                        <p>Tuesday</p>
                                        <img src="{{asset('tema/images/weather/cloudy.svg')}}" alt="">
                                    </li>
                                    <li class="day col-4">
                                        <p>Wednesday</p>
                                        <img src="{{asset('tema/images/weather/wind.svg')}}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="col-12">
                                <ul class="row days-list list-unstyled">
                                    <li class="day col-4">
                                        <p>Thursday</p>
                                        <img src="{{asset('tema/images/weather/sky.svg')}}" alt="">
                                    </li>
                                    <li class="day col-4">
                                        <p>Friday</p>
                                        <img src="{{asset('tema/images/weather/cloudy.svg')}}" alt="">
                                    </li>
                                    <li class="day col-4">
                                        <p>Saturday</p>
                                        <img src="{{asset('tema/images/weather/summer.svg')}}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="card">
                <ul class="row profile_state list-unstyled">
                    <li class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="zmdi zmdi-eye col-amber"></i>
                            <h4>2,365</h4>
                            <span>Post View</span>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="zmdi zmdi-thumb-up col-blue"></i>
                            <h4>365</h4>
                            <span>Likes</span>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="zmdi zmdi-comment-text col-red"></i>
                            <h4>65</h4>
                            <span>Comments</span>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-6">
                        <div class="body">
                            <i class="zmdi zmdi-account text-success"></i>
                            <h4>2,055</h4>
                            <span>Profile Views</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Sales</strong> Overview</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="m_area_chart2" style="height: 290px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Patients</strong> Status</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <p class="float-md-right">
                        <span class="badge badge-success">3 Admit</span>
                        <span class="badge badge-default">2 Discharge</span>
                    </p>
                    <div class="table-responsive table_middel">
                        <table class="table m-b-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Patients</th>
                                <th>Adress</th>
                                <th>START Date</th>
                                <th>END Date</th>
                                <th>Priority</th>
                                <th>Progress</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('tema/images/xs/avatar3.jpg')}}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John</span></td>
                                <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 16, 2017</td>
                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                <td><div class="progress m-b-0 m-t-10">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="{{asset('tema/images/xs/avatar1.jpg')}}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 22, 2017</td>
                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                <td><div class="progress m-b-0 m-t-10">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-default">Discharge</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="{{asset('tema/images/xs/avatar4.jpg')}}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Dean Otto</span></td>
                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 23, 2017</td>
                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                <td><div class="progress m-b-0 m-t-10">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="{{asset('tema/images/xs/avatar2.jpg')}}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td>Sept 17, 2017</td>
                                <td>Sept 16, 2017</td>
                                <td><span class="badge badge-success">LOW</span></td>
                                <td><div class="progress m-b-0 m-t-10">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-default">Discharge</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="{{asset('tema/images/xs/avatar5.jpg')}}" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Hughe L.</span></td>
                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td>Sept 18, 2017</td>
                                <td>Sept 18, 2017</td>
                                <td><span class="badge badge-danger">HIGH</span></td>
                                <td><div class="progress m-b-0 m-t-10">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
