
  <!DOCTYPE html><html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>CabSaaS Inventory and Fleet Management </title><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Le styles -->
        <link href="/css/sweetalert.css" media="screen" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min1.css" media="screen" rel="stylesheet" type="text/css">
<link href="/css/editor.css" media="screen" rel="stylesheet" type="text/css">
<link href="/datatables/css/dataTables.colVis.css" media="screen" rel="stylesheet" type="text/css">
<link href="/css/loadingAjax.css" media="screen" rel="stylesheet" type="text/css">
<link href="/css/date/jquery-ui.css" media="screen" rel="stylesheet" type="text/css">
<link href="/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
<link href="/images/company/favicon/I_SQUARE_TAXI_20180928193600870117_favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon">        <!-- Scripts -->
        <script type="text/javascript" src="/js/sweetalert.min.js"></script>
<script type="text/javascript" src="/js/loadingAjax.js"></script>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/date/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/innerPageStyle.css">
        <link rel="stylesheet" type="text/css" href="/css/cabsaas-innerPage.css">
        <link rel="stylesheet" type="text/css" href="/css/inner-responsive.css">
        <style>
            .tarifferror {
                background-color: #fff;
                color: #ff6601;
                float: left;
                font-size: small;
                height: 20px;
            }
            .error {
                border: 1px solid transparent;
                border-radius: 4px;
                padding: 5px;
                background-color: #f2dede;
                border-color: #ebccd1;
                color: #a94442;
            } 
        </style>
    </head>


    <body style="min-height:800px;">

        <!-- Left Sidebar Start -->
        <div class="sidebar sidebar-left" style="min-height: 100%;">
                        <!-- Logo Start -->
            <div class="logo-container img-responsive"><a  class="img-responsive" href="/owner/dashboard/dashboard"><img  src="/images/company/clogo/300x60/I_SQUARE_TAXI_20180928190218888619_logo.png" alt="I SQUARE TAXI"></a></div>


            <!-- Menu Start -->
            <ul class="main-menu">
                                        <li style="background-color: #0e9fce;"><a href="/owner/dashboard/dashboard"><i class="OverviewIcon"></i><span style="color:#FFF;">&nbsp;Dashboard</span></a></li>
                        
                                        <li class="has-submenu"><a href="#"><i class="BookingIcon"></i><span>&nbsp;Bookings</span></a>
                            <ul class="submenu"> 
        <!--                        <li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Overview</a></li>-->
                                                                    <li><a href="/owner/booking/bookings"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;View Bookings</a></li>
                                 
                              <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Website booking Enquiries</a></li>-->

                                                                    <li><a href="/owner/booking/cancelbookings"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Cancel Bookings</a></li>
                                                                                                    <li><a href="/owner/booking/closeduty"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Close Duty</a></li>
                                                    <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Confirm Booking</a></li>-->

                                                                    <li><a href="/owner/booking/enquirylist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Enquiries</a></li>
                                

                                                        <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Crm</a></li>-->
                                    <li><a href="/owner/analytics/bookedby"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Booked By</a></li>
                                    <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Package By</a></li>-->
                                                                <li><a href="/owner/booking/bookingsfollowup"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Follow Up</a></li>           
                            </ul>
                        </li>
                        
                                        <li class="has-submenu"><a href="#"><i class="DispatchMenuIcon"></i><span>&nbsp;Dispatch</span></a>
                            <ul class="submenu">
                                                                    <li><a href="/owner/dispatch/dispatch"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Dispatch Bookings</a></li>
                                                                                                    <li><a href="/owner/analytics/calandercar"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Booking Calendar</a></li>
                                                                                                    <li><a href="/owner/analytics/carcalender"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Vehicle Calendar</a></li>
                                                                                                    <li><a href="/owner/booking/issuelist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Booking Issues</a></li>  
                                                                                                    <li><a href="/owner/dispatch/bookingstatus"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Booking Reconfirm</a></li>  
                                                                                                    <li><a href="/owner/dispatch/dispatchdetails"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Dispatch Report</a></li>  
                                                            </ul>
                        </li>
                        

                                        <li class="has-submenu"><a href="#" class="close-child"><i class="TariffIcon"></i><span>&nbsp;Tariff</span></a>
                            <ul class="submenu">
                                                                                                            <li><a href="/owner/tariff/roundtrip"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Customer</a></li>
                                                                                                                <li><a href="/owner/ftariff/roundtrip"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Fleet Partner</a></li>
                                                                                                    <li><a href="/owner/tariff/roundtriptariffoffer"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Tariff offer</a></li>      

                                                                    <li><a href="/owner/ftariff/tariffmargin"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Tariff Margin</a></li>
                                                                                                    <li><a href="/owner/tariff/tariffnightcharges"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Night Charges Slot</a></li>  
                                                                                                    <li><a href="/owner/tariff/specialday"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;SpecialDay Tariff</a></li>  
                                                                                                    <li><a href="/owner/discount/list"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Discount</a></li>
                                                                    <li><a href="/owner/cancellation/policy"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Cancellation Policy</a></li>
                                                            </ul>
                        </li>
                        
                                        <li class="has-submenu"><a href="#"><i class="VehicleIcon"></i><span>&nbsp;Vehicle</span></a>
                            <ul class="submenu">
                                <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Overview</a></li>-->
                                                                    <li><a href="/owner/vehicle/vehicle"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;View Vehicle</a></li>
                                                                                                    <li><a href="/owner/vehicle/mastervehicletype"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Vehicle Type</a></li>
                                                                                                    <li><a href="/owner/vehicle/adminvehicle"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Master Vehicle</a></li>
                                

                                 
                                    <li><a href="/owner/gps/hitmap"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Hit Map</a></li> 
                                
                            </ul>
                        </li>

                                                                <li class="has-submenu"><a href="#"><i class="FleetpartnerIcon"></i><span>&nbsp;Fleetpartner</span></a>
                            <ul class="submenu">

                                                                    <li><a href="/owner/vehicle/vehiclelist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Available Inventory</a></li>
                                                                                                    <li><a href="/owner/address/address"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Garage Location</a></li>
                                
                                                                    <li><a href="/owner/verification/verification"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Doc Verification</a></li>
                                                                                                    <li><a href="/owner/booking/listfleetdetails"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;FP Status </a></li>
                                                                                                    <li><a href="/owner/verification/bankaccount"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;FP Bank A/c</a></li>
                                                   

                                                                    <li><a href="/owner/settings/agreement"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Agreements</a></li>
                                                      

                            </ul>
                        </li>

                                        


                          
                        <li class="has-submenu"><a href="#"><i class="UserIcon"></i><span>&nbsp;Users</span></a>
                            <ul class="submenu" style="display: none;">
                                <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Overview</a></li>-->
                                                                    <li><a href="/owner/user/customer"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;View Users</a></li>


                                

                                                                    <li><a href="/owner/user/dlogdetails"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Driver Log Details</a></li>
                                

                            </ul>
                        </li> 

                        

                            
                        <li class="has-submenu"><a href="#"><i class="FinanceIcon"></i><span>&nbsp;Finance</span></a> 
                            <ul class="submenu"> 
                                <!--<li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Overview</a></li>-->

                                                                    <li><a href="/owner/finance/creditlist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp; Billing Payment</a></li>  
                                                                                                    <li><a href="/owner/finance/onlinepgpending"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Online Payment</a></li> 
                                                                
                                    
                                        <li><a href="/owner/finance/paymentverify"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp; Pay Payment</a></li>          

                                                                                                                                        <li><a href="/owner/finance/payment"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Payment/Receipt</a></li>
                                 
                                                                    <li><a href="/owner/finance/purchase"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Purchase/Sales</a></li>
                                                                 
                                    <li><a href="/owner/finance/crdraccount"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Account Balance</a></li>  
                                                                                                    <li><a href="/owner/finance/cashaccount"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Ledger Account</a></li> 
                                                                                                    <li><a href="/owner/booking/bookingscommission"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Commission</a></li>
                                                                                                         <li><a href="/owner/finance/indirectexpenses"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Indirect Expenses</a></li>
                                 
                                    
                                                                           <li><a href="/owner/finance/bookingsincentive"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Incentive</a></li>
                                  
                                    
                                                                    <li><a href="/owner/bankaccount/bankaccount"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Bank Account</a></li> 
                                                                      
                                    <li><a href="/owner/finance/bankstatement"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Bank Statement</a></li> 
                                                                      
                                    <li><a href="/owner/finance/paymentgatewayac"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Mapping Bank/PG</a></li> 
                                                                                                    <li><a href="/owner/dispatch/bulkinvoice"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Bulk Invoice</a></li> 
                                                                                                    <li><a href="/owner/dispatch/custombulkinvoice"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Custom Bulk Invoice</a></li> 
                                                                                                    <li><a href="/owner/dispatch/monthlyfleet"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Fleet Monthly Invoice</a></li> 
                                                                                                    <li><a href="/owner/dispatch/dailyfleet"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Fleet Daily Invoice</a></li> 
                                                                                                    <li><a href="/owner/finance/report"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Export To Tally</a></li> 
                                                                                                        <li><a href="/owner/finance/bookingsbalance"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Bookings Balance</a></li> 
                                                                    

                            </ul> 
                        </li>   

                                    

                             
                         <li class="has-submenu"><a href="#"><i class="SalaryIcon"></i><span>&nbsp;Salary</span></a>
                            
                                                         <ul class="submenu">
                                    <li><a href="/owner/empsalary/salarydetails" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Salary Struct Details</a></li>
                            </ul>
                                                                                        <ul class="submenu">
                                    <li><a href="/owner/empsalary/advancedetails" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Advance Details</a></li>
                            </ul>
                                                                                    <ul class="submenu">
                                    <li><a href="/owner/empsalary/tripextrasdetails" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Trip Extras Details</a></li>
                            </ul>
                                                                                      <ul class="submenu">
                                    <li><a href="/owner/empsalary/index" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Salary Details</a></li>
                            </ul>
                                                                                      
                        </li>
                                     
                         
                        <li class="has-submenu"><a href="#"><i class="SetiingIcon"></i><span>&nbsp;Settings</span></a>
                            <ul class="submenu">
                            <!--<li><a href="#"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Overview</a></li>-->
                                <!--<li><a href="/owner/settings/changepassword"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Change Password</a></li>-->
                                                                    <li><a href="/cms/cms/setupoptions"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;SaaS Setup</a></li>
                                                                                                    <li><a href="/owner/settings/ipset"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Set Ips</a></li>
                                                                                                    <li><a href="/owner/mailerlist/index"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Mail Distribution List</a></li>
                                                                                                    <li><a href="/owner/geography/state"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;State List</a></li>
                                                                                                    <li><a href="/owner/geography/city"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;City List</a></li>
                                                                                                         <li><a href="/owner/settings/otherrequirements"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Other Req</a></li>
                                                                                                    <li><a href="/owner/geography/location"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Location List</a></li>
                                                                                                             <li><a href="/owner/tariff/outstationtype"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Outstation Distance</a></li>
                                                                                                                     <li><a href="/owner/tariff/transfertype"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Transfer Distance</a></li>
                                                                                                                    <li><a href="/owner/settings/otherstatekmrate"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Other State Rate</a></li>
                                                                                                                     <li><a href="/owner/geography/appoffer"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;App Offer</a></li>
                                        

                            </ul>
                        </li>
                                    
                <!--Profile-->
<!--                <li class="has-submenu"><a href="#"><i class="ProfileIcon"></i><span>&nbsp;Profile</span></a>
                    <ul class="submenu">
                       
                
                <li><a href=""><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Organisation</a></li>
                    </ul>
                </li>-->
                <!--End Profile-->

                <!--Website-->
                       
                        <li class="has-submenu"><a href="#"><i class="WebsiteIcon"></i><span>&nbsp;Website</span></a>
                            <ul class="submenu">

                                                                    <li><a href="/cms/cms/home" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Home</a></li>
                                
                                                                    <li><a href="/cms/cms/aboutus"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;About Us</a></li>
                                
                                                                    <li><a href="/cms/cms/contactus"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Contact Us</a></li>
                                 

                                                                    <li><a href="/cms/cms/tnc"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Term &amp; Conditions</a></li>
                                
                                                                    <li><a href="/cms/cms/services"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Services</a></li>
                                
                                                                    <li><a href="/cms/cms/privacypolicy"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Privacy Policy</a></li>
                                
                                                                    <li><a href="/cms/cms/social"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Social</a></li>
                                                                                                         <li><a href="/cms/cms/faqs"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;FAQ's</a></li>
                                
                                                                    <li><a href="/owner/widget/clientlist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Widget</a></li>
                                
                                                                    <li><a href="/cms/cms/templates"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Themes</a></li>
                                
                                                                    <li><a href="/cms/cms/custompages"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Custom Pages</a></li>
                                                                                                        <li><a href="/cms/cms/customizetooltip"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Customize Tooltip</a></li> 
                                

                            </ul>
                        </li>

                         
                <!--End Website-->
                         
                        <li class="has-submenu"><a href="#"><i class="AnalyticsIcon"></i><span>&nbsp;Analytics</span></a>
                            <ul class="submenu">
                                                                    <li><a href="/owner/analytics/analysebookings"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Analyse Bookings</a></li>
                                                                                                    <li><a href="/owner/analytics/marginreport"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Booking Margin</a></li> 
                                                                                                    <li><a href="/owner/analytics/bookinglist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Bookings</a></li>
                                                                                                    <li><a href="/owner/analytics/discountlist"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Discount</a></li>
                                                                                                    <li><a href="/owner/analytics/reports"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Booking BI</a></li>
                                
                                                                    <li><a href="/owner/reviews/reviews"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Reviews</a></li>

                                    <li><a href="/owner/tracking/overview"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Backlink</a></li>
                                  
                                    <li><a href="/owner/settings/activitylog"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Activity Log</a></li>
                                    <li><a href="/owner/analytics/customizebookings"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Customize Bookings</a></li>

                            </ul>
                        </li>
                         
                 
                        <li class="has-submenu"><a href="#"><i class="MessageIcon"></i><span>&nbsp;Message</span></a>
                            <ul class="submenu">
                                                                    <li><a href="/owner/messages/messagelist" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Inbox</a></li>
                                                                                                    <li><a href="/owner/messages/sentmessage" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Sent</a></li>
                                                            </ul>
                        </li>
                           
<li class="has-submenu"><a href="#"><i class="GpsNewIcon"></i><span>&nbsp;Gps</span></a>
                            <ul class="submenu">
                                    <li><a href="/owner/gps/overview" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;overview</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#"><i class="UtilityIcon"></i><span>&nbsp;Utility</span></a>
                                                        <ul class="submenu">
                                    <li><a href="/owner/messages/promotionalsms" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Bulk SMS</a></li>
                            </ul>
                            <ul class="submenu">
                                    <li><a href="/owner/otherservice/flightlist" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Flight</a></li>
                            </ul>
                            <ul class="submenu">
                                    <li><a href="/owner/otherservice/hotellist" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Hotel</a></li>
                            </ul>
                                                        <ul class="submenu">
                                    <li><a href="/owner/utility/courierlist" class="close-child"><img src="/images/right-arrow.png" align="absmiddle"> &nbsp;Courier</a></li>
                            </ul>
                        </li>
                     

                        <!--<li><a href=""><i class="ReviewIcon"></i><span>&nbsp;Review</span></a></li>-->

                   

            </ul>
            <!-- Menu End --> 
            <div class="inner">

                <!-- Separator -->



            </div>

        </div>
        <!-- Left Sidebar End -->

        <!-- Top Content Bar Start -->
        <div class="top-bar">
            <div class="main-container">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-sm-3 hidden-xs paddingLeft">
                            <ul class="left-icons icon-list">
                                <li><a href="#" class="sidebar-collapse">
                                        <div class="triggerIconDiv">                     
                                            <div class="triggerIcon"></div>
                                        </div>   
                                    </a>   
                                    <!--                                    <div class="colorThemeDiv"></div>-->
                                </li>                    

                            </ul>
                        </div>

                        <div class="col-lg-11 col-sm-9 col-xs-12">
                            <div class="universalSearchDiv RelDiv" >
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="searchByBtn">Booking Id<span class="caret"></span></button>
                                        <ul class="dropdown-menu" id="globalSearchBy">

                                            <li><a data-index="uid">User ID</a></li>
                                            <li><a data-index="bid" class="selected">Booking ID</a></li>
                                            <li><a data-index="mno">Mobile Number</a></li>
                                            <li><a data-index="email">Email</a></li>

                                        </ul>
                                    </div><!-- /btn-group -->
                                    <input type="text" class="form-control searchIcon" aria-label="..." placeholder="Search Here.." onkeyup="advanceSearch(this.value)">

                                    <div class="SearchBoxList" id="SearchBoxList">

                                    </div>

                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->


                            <div class="userProfileDiv"><div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Shimyon Parmar<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                                                                        <li><a href="/owner/basicdetails/basicdetails/1577">My Profile</a></li>
                                                                                        <li role="separator" class="divider"></li>
                                        <li><a href="/owner/settings/changepassword">Change Password</a></li> 
                                        <li role="separator" class="divider"></li>
                                        <li><a href="/signin/logout">Log Out</a></li>
                                    </ul>
                                </div></div>
                            <div id="ProfilePhotoDiv">
                                <!--                                <div class="avatar">
                                                                    <img src="/images/profile-pic.png" alt=" Samantha Wilson "> 
                                                                </div>-->
                            </div>
                            <div class="notificationDiv RelDiv">
                                <div class="NotificationCounter" style="display:none"></div>
                                <div class="NotificationContener" style="height:auto; display:none">
                                    <div class="NotificationHeader">Notification</div>
                                    <span id="notificationSpan"></span>
                                    <span id="notificationSpan1"></span>

                                    <!--    <div class="NotificationRow">
                                            <a href="/owner/booking/bookings">Booking</a>
    
                                            <div class="RowOvel OvelOne">0</div>
                                        </div>
    
                                        <div class="NotificationRow">
                                            <a href="/owner/messages/messagelist">Messages</a>
                                            <div class="RowOvel OvelTwo">0</div>
                                        </div>
    
                                        <div class="NotificationRow">
                                            <a href="/owner/reviews/reviews">Review</a>
                                            <div class="RowOvel OvelThree">0</div>
                                        </div>-->

                                    <!--<div class="NotificationRow">Row
                                    <div class="RowOvel OvelFour">10</div>
                                    </div>
                                    
                                    <div class="NotificationRow">Row
                                    <div class="RowOvel OvelFive">10</div>
                                    </div>
                                    
                                    <div class="NotificationRow">Row
                                    <div class="RowOvel OvelSix">10</div>
                                    </div>-->

                                </div>
                            </div>
                            <div class="productSupportBox"><div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><h4 style="font-size:15px;">For Product Support  <span class="caret"></span></h4></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;(Mon to Sat - 9:30 a.m to 6:30 p.m)</a></li>

                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;Mobile 9049222247 </a></li>
                                        <!--                                        <li role="separator" class="divider"></li>
                                                                                <li><a href="#"><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;Mobile 9049 2222 47</a></li>-->
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;cabsaas@infogird.com</a></li>
                                    </ul>
                                </div></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Content Bar End -->

        <!-- Content Start -->
        <div class="content">
            <div class="main-container">
                <div class="container">

                    
<!-- The Modal -->
<div id="myImgModal" class="modal fade imgModel">
    <span class="close">&times;</span>
    <div id="viewimg">
        <canvas id="imgview"></canvas>
    </div>
    <div id="caption"></div>
</div>
<div>
    <div>
        <a href="javascript:runCode()" style="position:fixed;"  class="supportIcon img-circle pointer"><span style="color:#FFF;font-size: 21px"  class="glyphicon glyphicon-envelope pointer" ></span></a>
    </div>
    <div class="modal fade" id="exampleModal_help" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">Help & Support</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="photoupload">
                        <div class="row">
                            <div class="col-sm-12"><strong class="blackColor">Subject</strong>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="feedBackSubject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12"><strong class="blackColor">Type</strong>
                            </div>
                            <div class="col-sm-8">
                                <select class="form-control" id="mailType">
                                    <option value="0">select Mail Type</option>
                                    <option value="1">Suggestion</option>
                                    <option value="2">Query</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12"><strong class="blackColor">Message</strong>
                            </div>
                            <div class="col-sm-12">
                                <textarea id="message" class="form-control" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row marginTop">
                            <div id="box1" style="width: 450px; height: 250px; border-style: solid; border-width: 2px;"></div>
                        </div>                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="submitgreebbtn" onclick="submitFeedBack()" >Submit</button>
                            <button type="button" class="btn btn-default" onclick="closemodel()">Cancel</button>
                        </div>
                    </form>
                </div> <!-- I am closing modal body here -->

            </div>
        </div>
    </div>
</div>
<a id="test"></a><style>
    .supportIcon {
        background: rgb(234, 66, 53) none repeat scroll 0% 0%;
        border: 2px solid rgb(191, 24, 11) !important;
        bottom: 45px;
        padding: 15px;
        position: absolute;
        right: 15px;
        z-index: 100000;
    }
    #myImg:hover {opacity: 0.7;}
</style>
<script>
    var photo;
    function runCode() {
        genScreenshot();
        $('#exampleModal_help').modal('show');
    }

    function submitFeedBack() {
        var feedBackSubject = $("#feedBackSubject").val();
        var feedBackMessage = $(".Editor-editor").html();
        var mailType = $("#mailType").val();
        $("#loaderdiv1").show();
        if (mailType==0 || mailType == " ") {
            swal('Please select Mail Type');
             return false;                
        }else{
        $.ajax({
            method: 'POST',
            url: '/owner/settings/sendmailwithimage',

            data: {
                photo: photo,
                feedBackSubject: feedBackSubject,
                feedBackMessage: feedBackMessage,
                mailType: mailType
            },
            success: function (data) {
                $("#loaderdiv1").hide();
                if(mailType==2)
                swal("success!", "Your Query Successfully Forwarded", "success");
                if(mailType==1)
                swal("success!", "Your Suggestion Successfully Forwarded", "success");
                $('#exampleModal_help').modal('hide');
            }
        });
       }
    }
    function closemodel() {
        $('#exampleModal_help').modal('hide');
    }

    $(document).ready(function () {
        $("#mailType").val(0);
// Get the modal
        var modal = document.getElementById('myImgModal');
        $("#box1").click(function () {
            $('#myImgModal').modal('show');
        });
// Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
        $("body").on('change', '#mailType', function () {
            var mailTypeId = $("#mailType").val();
            if (mailTypeId == 1) {
                $("#box1").hide();
            } else {
                $("#box1").show();
            }

        });
                $("#message").Editor({
            'aligneffects':true, //This just gave little space before inserting toolbar. Dont know what this actually does.
            'textformats':false,
            'fonteffects':false,
            'actions' : true, // I dont know what this line does.
            'insertoptions' : false,
            'extraeffects' : false,
            'advancedoptions' : false,
            'screeneffects':false,
            'bold': true,
            'italics': true,
            'underline':true,
            'ol':true,
            'ul':true,
            'undo':false,
            'redo':false,
            'l_align':false,
            'r_align':false,
            'c_align':false,
            'justify':false,
            'insert_link':false,
            'unlink':false,
            'insert_img':false,
            'hr_line':false,
            'block_quote':false,
            'source':false,
            'strikeout':false,
            'indent':true,
            'outdent':true,
            'fonts':false,
            'styles':false,
            'print':false,
            'rm_format':false,
            'status_bar':false,
            'font_size':false,
            'color':false,
            'splchars':false,
            'insert_table':false,
            'select_all':true,
            'togglescreen':false
        });  // We are displaying Editor on Pop up here. 

        // Code to clear modal content on modal hide
        $(".modal").on("hidden.bs.modal", function () {
            $("#feedBackSubject").val("");
            $(".Editor-editor").text("");
        });
        // With Following code I'm capitalizing first letter of Subject and message
        $("#feedBackSubject").keyup(function (event) {
            $(this).val(($(this).val().substr(0, 1).toUpperCase()) + ($(this).val().substr(1)));
        });
        $(".Editor-editor").keyup(function (event) {
            $(this).val(($(this).val().substr(0, 1).toUpperCase()) + ($(this).val().substr(1)));
        });
    });

    function genScreenshot() {
        html2canvas(document.body, {//html2canvas(document.body, {
            onrendered: function (canvas) {
                $('#box1').html("");
                $('#box1').append(canvas);
                $("canvas").css("max-width", "100%"); // When i didn't set max width and height to canvas it was taking very large area on screen and was going out of boundary of modal.
                $("canvas").css("max-height", "100%");
                $("canvas").attr('id', 'myImg');

                if (navigator.userAgent.indexOf("MSIE ") > 0 ||
                        navigator.userAgent.match(/Trident.*rv\:11\./)) {
                    var blob = canvas.msToBlob();
                    window.navigator.msSaveBlob(blob, 'Test file.png');
                } else {
                    $('#test').attr('href', canvas.toDataURL("image/png"));
                    window.photo = canvas.toDataURL('image/png'); // to make a global variable we use window.variableName.
                    $('#test').attr('download', 'Test file.png');
                }
            }
        });
    }
</script><div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Custom Pages</h4>
        </div>
        <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12 text-right">
            <a name="search" class="btn btn-primary" href="/cms/cms/custompage" target="_blank">Add New Page</a>
        </div>

    </div>



    <div class="row ">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 listingTableDiv">
           <div class="listingTableContainer">

        <div class="table-responsive">          
            <table id="pages" class="table table-hover" style="margin-bottom: 0;">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Page url</th>
                                <th>status</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        
                            <tr>
                                <td>   1 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-hosur" target="_blank"> outstation-one-way-drop-taxi-cabs-services-hosur</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat1" name="check" checked /><div class="slideThree"><label for="disccat1"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-hosur" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="1" ttl="outstation-one-way-drop-taxi-cabs-services-hosur" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   2 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-thanjavur" target="_blank"> outstation-one-way-drop-taxi-cabs-services-thanjavur</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat2" name="check" checked /><div class="slideThree"><label for="disccat2"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-thanjavur" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="2" ttl="outstation-one-way-drop-taxi-cabs-services-thanjavur" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   3 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-bengaluru" target="_blank"> outstation-one-way-drop-taxi-cabs-services-bengaluru</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat3" name="check" checked /><div class="slideThree"><label for="disccat3"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-bengaluru" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="3" ttl="outstation-one-way-drop-taxi-cabs-services-bengaluru" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   4 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-pondicherry" target="_blank"> outstation-one-way-drop-taxi-cabs-services-pondicherry</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat4" name="check" checked /><div class="slideThree"><label for="disccat4"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-pondicherry" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="4" ttl="outstation-one-way-drop-taxi-cabs-services-pondicherry" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   5 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-dindigul" target="_blank"> outstation-one-way-drop-taxi-cabs-services-dindigul</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat5" name="check" checked /><div class="slideThree"><label for="disccat5"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-dindigul" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="5" ttl="outstation-one-way-drop-taxi-cabs-services-dindigul" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   6 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-chennai" target="_blank"> outstation-one-way-drop-taxi-cabs-services-chennai</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat6" name="check" checked /><div class="slideThree"><label for="disccat6"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-chennai" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="6" ttl="outstation-one-way-drop-taxi-cabs-services-chennai" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   7 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-coimbatore" target="_blank"> outstation-one-way-drop-taxi-cabs-services-coimbatore</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat7" name="check" checked /><div class="slideThree"><label for="disccat7"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-coimbatore" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="7" ttl="outstation-one-way-drop-taxi-cabs-services-coimbatore" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   8 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-madurai" target="_blank"> outstation-one-way-drop-taxi-cabs-services-madurai</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat8" name="check" checked /><div class="slideThree"><label for="disccat8"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-madurai" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="8" ttl="outstation-one-way-drop-taxi-cabs-services-madurai" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   9 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-trichy-tiruchirappalli" target="_blank"> outstation-one-way-drop-taxi-cabs-services-trichy-tiruchirappalli</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat9" name="check" checked /><div class="slideThree"><label for="disccat9"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-trichy-tiruchirappalli" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="9" ttl="outstation-one-way-drop-taxi-cabs-services-trichy-tiruchirappalli" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   10 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-salem" target="_blank"> outstation-one-way-drop-taxi-cabs-services-salem</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat10" name="check" checked /><div class="slideThree"><label for="disccat10"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-salem" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="10" ttl="outstation-one-way-drop-taxi-cabs-services-salem" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   11 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-tirupur" target="_blank"> outstation-one-way-drop-taxi-cabs-services-tirupur</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat11" name="check" checked /><div class="slideThree"><label for="disccat11"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-tirupur" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="11" ttl="outstation-one-way-drop-taxi-cabs-services-tirupur" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   12 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-erode" target="_blank"> outstation-one-way-drop-taxi-cabs-services-erode</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat12" name="check" checked /><div class="slideThree"><label for="disccat12"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-erode" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="12" ttl="outstation-one-way-drop-taxi-cabs-services-erode" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   13 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-tirunelveli" target="_blank"> outstation-one-way-drop-taxi-cabs-services-tirunelveli</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat13" name="check" checked /><div class="slideThree"><label for="disccat13"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-tirunelveli" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="13" ttl="outstation-one-way-drop-taxi-cabs-services-tirunelveli" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   14 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-vellore" target="_blank"> outstation-one-way-drop-taxi-cabs-services-vellore</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat14" name="check" checked /><div class="slideThree"><label for="disccat14"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-vellore" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="14" ttl="outstation-one-way-drop-taxi-cabs-services-vellore" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   15 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-local-and-outstation-taxi-in-goa" target="_blank"> outstation-one-way-drop-taxi-cabs-services-local-and-outstation-taxi-in-goa</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat15" name="check" checked /><div class="slideThree"><label for="disccat15"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-local-and-outstation-taxi-in-goa" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="15" ttl="outstation-one-way-drop-taxi-cabs-services-local-and-outstation-taxi-in-goa" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   16 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-nagercoil" target="_blank"> outstation-one-way-drop-taxi-cabs-services-nagercoil</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat16" name="check" checked /><div class="slideThree"><label for="disccat16"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-nagercoil" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="16" ttl="outstation-one-way-drop-taxi-cabs-services-nagercoil" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   17 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-tuticorin-thoothukudi" target="_blank"> outstation-one-way-drop-taxi-cabs-services-tuticorin-thoothukudi</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat17" name="check" checked /><div class="slideThree"><label for="disccat17"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-tuticorin-thoothukudi" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="17" ttl="outstation-one-way-drop-taxi-cabs-services-tuticorin-thoothukudi" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   18 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-karur" target="_blank"> outstation-one-way-drop-taxi-cabs-services-karur</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat18" name="check" checked /><div class="slideThree"><label for="disccat18"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-karur" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="18" ttl="outstation-one-way-drop-taxi-cabs-services-karur" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                                            
                            <tr>
                                <td>   19 </td>
                                <td> <a href="/website/index/page/outstation-one-way-drop-taxi-cabs-services-ambur" target="_blank"> outstation-one-way-drop-taxi-cabs-services-ambur</a> </td>
                                <td>  
                                 
                                <input  class="newCheck" type="checkbox" value='1' id="disccat19" name="check" checked /><div class="slideThree"><label for="disccat19"></label></div>
                                </td>
                                <td>
                                    <a href="/cms/cms/custompage/outstation-one-way-drop-taxi-cabs-services-ambur" target="_blank" class="fa fa-edit"> Edit Page</a>   &nbsp;&nbsp;
                                    <a id="19" ttl="outstation-one-way-drop-taxi-cabs-services-ambur" class="fa fa-link editurl" href="javascript:;"> Edit url </a>   
                                </td>
                            
                            </tr> 
                                
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>  
    </div>

</div>

<div class="modal fade" id="editurlmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Url</h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-3 col-sm-12 col-xs-12"> Old Page Url :</div>
          <input type="hidden" id="pageid" value="0" name="pageid" >
          <strong class="col-lg-9 col-sm-12 col-xs-12" id="oldurl"> Old Url </strong>        
    </div>
        <div class="col-lg-12">
          <div class="col-lg-3 col-sm-12 col-xs-12"> New Page Url :</div>
          <div class="col-lg-9 col-sm-12 col-xs-12">
              <input name="pagetitle" id="pagetitle" placeholder="new url" class="form-control" autocomplete="off" value="" type="text">
               
          </div>        
    </div>
        <div class="col-lg-12">
          
            <div class="col-lg-9 col-sm-12 col-xs-12 pull-right"> <input name="submit" class="btn btn-md btn-primary" id="submit"  value="submit" type="submit" onclick="funcediturl()"></div>        
    </div>
        </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
                <script src="/datatables/js/jquery.dataTables.js"></script>
                <script src="/datatables/js/dataTables.bootstrap.js"></script>
                <script src="/js/dataTables.buttons.min.js"></script>


<script>
    $('#pages').DataTable({
        
            // stateSave: true,
            responsive: true,
            "language": {
					"processing": "<div></div><div></div><div></div><div></div><div></div>"
			},
            "processing": true, 
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                var $nRow = $(nRow); // cache the row wrapped up in jQuery
 
                $("#bookingTable_length").css('float', 'left');
                $("#bookingTable_info").css('float', 'left');
                $("#bookingTable_info").css('margin', '-3px 0 0 10px');

            },
            "sDom": 'f<"top">rt<"bottom listingTableFooter"<"listingPageCountDiv"li><"clear"><"listingPaginationDiv"p>><"clear">',
            
    });
    
    $(document).on('click','.newCheck',function(e){
        e.preventDefault();       
        ajaxindicatorstart('');               
      var  status=$(this).val();
      var  id=$(this).attr('id');
      var pageidT=id.split('disccat');
      var pageid=pageidT[1];
      var obj=$(this);     
       var myData = {pageid:pageid, status:status};
            $.ajax({
                type: "POST", 
                url: "/cms/cms/custompagestatuschage", // call to Action method in COntroller 
                data: myData,
                dataType: "JSON",
                success: function (data) {
                    ajaxindicatorstop();   
                    
                    if(data==0){
                        swal('error','Page Does Not Exists','error')
                   
                    }else{
                       if(status==1){
                          obj.val('0');
                              obj.prop('checked',false);
                     }else{
                          obj.val('1');      
                              obj.prop('checked',true);
                     }
                 }
                },
                failure: (function () {
                    alert("Failure!!");
                })
            }); 
    });
    
    $(document).on('click','.editurl',function(e){       
        $("#editurlmodal").modal("show");
        $("#oldurl").html($(this).attr('ttl'));
        $("#pageid").val($(this).attr('id'));
    });
    function funcediturl(){
        if($("#pagetitle").val()==$("#oldurl").html()){
            alert("new url cant be same as current url");
            return false;
        }
         var myData = {pageid:$("#pageid").val(), newurl: $("#pagetitle").val()};
            $.ajax({
                type: "POST", 
                url: "/cms/cms/custompageurlchage", // call to Action method in COntroller 
                data: myData,
                dataType: "text",
                success: function (data) {
                    ajaxindicatorstop();   
                    
                    if(data==0){
                        swal('error','Page Already Exists','error')
                   
                    }else if(data==1){
                         $("#editurlmodal").modal("hide");
                        swal({
                                    title: "success",
                                    text: "Update successfully",
                                    type: "success",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                  
                        });
                        
                       window.location.reload();
                 }else{
                       swal({
                                    title: "error",
                                    text: data,
                                    type: "error",
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                  
                        });
                 }
                },
                failure: (function () {
                    alert("Failure!!");
                })
            }); 
    }
    $('#editurlmodal').on('hidden.bs.modal', function () {
        $("#pagetitle").val('');
        $("#oldurl").html('');
    });
</script>

<style>
  
    
    .listingTableFooter{
        border-top: 1px solid #acacac;
    }
  
   /* From rhishi*/
   .newCheck {
        visibility: hidden;
    }
      .cstatcheck {
         visibility: hidden;  
         display:none; 
        
    }
     .shsstatcheck {
         display:none;
         visibility: hidden;   
    }
    .newtxtdiv{
        width: auto; height: 30px; line-height: 30px; margin:0px 10px; float:left;
    }

    /* SLIDE THREE */
    .slideThree {
        width: 70px;
        height: 24px;
        background: #ccc;
        margin: 0px;
        float:left;

        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        position: relative;

        -webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
        -moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
        box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,0.2);
    }


    .slideThree:after {
        content: 'OFF';
        font: 10px/26px Arial, sans-serif;
        color: #000;
        position: absolute;
        right: 10px;
        z-index: 0;
        font-weight: normal;
        text-shadow: 1px 1px 0px rgba(255,255,255,.95);
    }

    .slideThree:before {
        content: 'ON';
        font: 10px/26px Arial, sans-serif;
        color: #fff;
        position: absolute;
        left: 10px;
        z-index: 0;
        font-weight: normal;
         text-shadow: 1px 1px 0px rgba(0,0,0,.75);
    }

    .slideThree label {
        display: block;
        width: 34px;
        height: 18px;

        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;

        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -o-transition: all .4s ease;
        -ms-transition: all .4s ease;
        transition: all .4s ease;
        cursor: pointer;
        position: absolute;
        top: 3px;
        left: 3px;
        z-index: 1;

        -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
        box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.3);
        background: #fcfff4;

        background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
        background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
        background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
        background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
        background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
    }

    .newCheck:checked + div label {
        left: 33px;
    }
    .newCheck:checked  + div { background: #0e9fce !important; } 
    .cstatcheck:checked + div label {
        left: 35px;
    }
    .cstatcheck:checked  + div { background: #0e9fce !important; }  
    .shsstatcheck:checked + div label {
        left: 35px;
    }
    .shsstatcheck:checked  + div { background: #0e9fce !important; } 
    
    
</style>

                    <div class="innerFooter">© 2009 - 2020  Powered by <a target="_blank" href="http://www.cabsaas.com/">CabSaaS</a>. · All Right Reserved. <a target="_blank" href="http://www.cabsaas.com/terms-n-conditions">Terms of Services</a>  </div>

                </div>
            </div>
        </div>


        <!-- Content End -->

        <script type="text/javascript" src="/js/editor.js"></script>
<script type="text/javascript" src="/js/html2canvas.min.js"></script>
<script type="text/javascript" src="/js/all-pages.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/js/jszip_2.5.0_jszip.min.js"></script>
<script type="text/javascript" src="/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="/js/dataTables.buttons.min.js"></script>        <link rel="stylesheet" type="text/css" href="/css/buttons.dataTables.min.css"> 

        <script>
            $(document).ready(function () {
                notificationSummary();
                //MESSAGE EXECUTOR
                setInterval(function () {
                    notificationSummary();
                }, 600 * 60 * 1);  //CALL FUNCTION AFTER EVERY ONE MINUTE               
                // 600 * 60 * 1 = 36000
                // 36000 / 60 = 600ms
                // 600ms = 1 Minute
                // So the event will execute after every one minute  
                //END

                //HIDE SHOW MESSAGE BOARD
                jQuery(".notificationDiv").click(function (e) {
                    e.stopPropagation();
                    jQuery('.NotificationContener').slideToggle(400);
                });
                jQuery(".NotificationContener").click(function (e) {
                    e.stopPropagation();
                });
                jQuery("body").click(function () {
                    jQuery('.NotificationContener').slideUp(400);
                });

                function notificationSummary()
                {
                    var base_url = window.location.origin;

                    try {
                        var ovalTag = ["", "OvelOne", "OvelTwo", "OvelThree", "OvelFour", "OvelFive", "OvelSix"];
                        var activities = [1, 2, 3];
                        var fLinkRed;
                        //GET COUNT OF EXISTANING EMAIL COUNT                    
                        jQuery.ajax({
                            url: "/owner/dashboard/timon",
                            type: "POST",
                            data: {activities: activities},
                            success: function (msg) {
                                var jResp = JSON.parse(msg);
                                var countCC = 1, BoardTitle, BoardCount,BoardCount1, BoardLink, ovalC, billboard = 0,billboard1 = 0;
                                $("#notificationSpan").html("");
                                $("#notificationSpan1").html("");
                                //console.clear();
                                jQuery('.NotificationCounter').html("").hide();

                                for (var i = jResp.noti.length; i--; )
                                {
                                    ovalC = ovalTag[countCC];
                                    //var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
                                    BoardTitle = jResp.noti[i].NTFT_TITLE;
                                    BoardCount = jResp.noti[i].UNB_BRD_CNT;
                                    BoardLink = jResp.noti[i].NTFT_LINK;
                                    fLinkRed = base_url + "/owner" + BoardLink;
                                    var pBoard = '<div class="NotificationRow"><a href="' + fLinkRed + '">' + BoardTitle + '</a><div class="RowOvel ' + ovalC + '">' + BoardCount + '</div></div>';
//                                    var pBoard = '<div class="NotificationRow"><a href="' + fLinkRed + '">' + I + '</a><div class="RowOvel ' + ovalC + '">' + BoardCount + '</div></div>';

                                    $("#notificationSpan").append(pBoard);
                                    countCC++;
                                    billboard = billboard + parseInt(BoardCount1);

                                }
                                for (var i = jResp.inbox.length; i--; )
                                {
                                    ovalC = ovalTag[countCC];
                                    BoardCount1 = jResp.inbox[i].UNB_Note_CNT;
                                    fLinkRed = base_url + "/owner" + '/messages/messagelist';
                                    var pBoard1 = '<div class="NotificationRow"><a href="' + fLinkRed + '">' + 'Inbox' + '</a><div class="RowOvel ' + ovalC + '">' + BoardCount1 + '</div></div>';
//                                    var pBoard = '<div class="NotificationRow"><a href="' + fLinkRed + '">' + I + '</a><div class="RowOvel ' + ovalC + '">' + BoardCount + '</div></div>';

                                    $("#notificationSpan1").append(pBoard1);
                                    countCC++;
                                    billboard1 = billboard1 + parseInt(BoardCount1);

                                }

                                if (billboard1 > 0)
                                {
                                    jQuery('.NotificationCounter').html(billboard1).fadeIn(800);
                                }
                                if (billboard > 0)
                                {
                                    jQuery('.NotificationCounter').html(billboard).fadeIn(800);
                                }
                                //END               
                            },
                            error: function () {
                                //  alert('Unable to receive data from server.');
                            }
                        });
                    } catch (err) {//alert("Error: " + err);
                        console.error("inner", err);
                    }
                }
            });
            function  advanceSearch(value) {
                var minlength = 3;
                var searchBy = $("#globalSearchBy").find('.selected').attr('data-index');
                if (value.length >= minlength) {
                    $.ajax({
                        type: "POST",
                        url: '/owner/address/searchby',
                        data: {
                            'searchValue': value,
                            'searchByValue': searchBy
                        },
                        dataType: "json",
                        success: function (msg) {
                            $('#SearchBoxList').empty();
                            $.each(msg, function (k, v) {

                                $('#SearchBoxList').fadeIn(200).append('<a href="' + v['url'] + v['id'] + '"><div class="SearchBoxResultDiv">' + v['info'] + '</div></a>');
                            });
                        }
                    });
                }
            }
            $('.dropdown-menu li a').on('click', function () {
                var id = $(this).closest('ul').prev().attr('id');
                $("#" + id).html($(this).text() + '<span class="caret"></span>');
                var ulId = $(this).closest('ul').attr('id');
                $(this).closest('ul').find('.selected').removeClass('selected');
                $(this).addClass('selected');
                var selectIndexId = $("#" + ulId).find('.selected').attr('data-index');
            })
        </script></body></html>
