
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
</script>
<script src="/ckeditor/js/ckeditor.js"></script>
<script src="/ckeditor/js/sample.js"></script>
<link rel="stylesheet" href="/ckeditor/css/samples.css">
<link rel="stylesheet" href="/ckeditor/toolbarconfigurator/lib/codemirror/neo.css">

 
    <div class="row">
            <div class="col-lg-6"> 
            <div class="innerPageTitleDiv">
                <h2 style="margin: -25px 0 -10px 0px">FAQ'S</h2>
       <span class="innerPageSubTitle"></span>

            </div>
            </div>

<div class="col-lg-6">  
<div class="CalenderOuter"></div>
</div>
 
</div>
    <div class="container col-md-12 col-lg-12 col-sm-12 col-xs-12 p-b-20 listingTableDiv">
 
           
                                      <div class="HundredPercentClass MarginTopBox border-bottom">
                                          <div class="col-sm-12">
                                              <h5><strong class="BlackColor">Frequently Asked Questions And Answer:</strong></h5>
                                              
                                          </div>
                                            <div class="col-sm-12">
                                        <textarea name="question" id="question" rows="5" cols="50">
                                         <h2>FREQUENTLY ASKED QUESTIONS (FAQS)</h2>

<p><strong>Can I cancel my booking?</strong><br />
Yes. You can cancel your booking. However, if you cancel the booking after the driver has already reached your destination an amount of Rs.300 needs to be paid to him.</p>

<p><strong>Can I modify my journey?&nbsp;</strong><br />
Yes.&nbsp; Before 8 hours of the journey.<br />
You can modify the date, time, destination, and type of vehicle.<br />
However, within 8 hours to the journey, the modification cannot be done.</p>

<p><strong>Do you assure the Type of Taxi I had booked?</strong><br />
Yes. However in some rare cases, we are not able to provide you with the exact type of vehicle, we shall offer you a similar type of alternate vehicle. For example, if you have booked an Innova. If it is not available we may offer you Xylo.</p>

<p><strong>What are the waiting charges?</strong><br />
For Round Trip, there are no waiting charges.<br />
For drop trips&nbsp;Waiting charges will be Rs.100 for one hour.<br />
We all know and agree, Long distance travel generally needs a refreshment break and a couple of small breaks, especially when we travel with kids. These breaks are acceptable. Waiting charges apply only when the break is beyond such acceptable limits. Remember, time is money for the Taxi operator too...</p>

<p><strong>What happens if the Taxi breaks down midway?</strong><br />
As a policy, we contract only Taxis which are in very good running condition. Minor repairs like tyre deflation etc can be rectified in minutes. In case of major break down, we shall arrange an alternative taxi. It is our endeavour to ensure you reach your destination with minimal loss of time and comfort.</p>

<p><strong>What about rude behaviour of the Taxi driver?</strong><br />
We contract well-behaved drivers only.&nbsp; We instruct and train them the importance of polite and respectful behaviour towards customers. In case you find some of them are rude and impolite &ndash; pls do not hesitate to call us at 9043-99-6699. We shall initiate suitable action and keep you informed.</p>

<p><strong>What if I miss my connecting flight or train at the destination city?</strong><br />
With ever-growing traffic in all cities, it is prudent on the part of the customer to plan such trips well in advance. You will agree these factors are beyond our control. &quot; I SQUARE TAXI &quot;&nbsp;&nbsp;is not liable for any compensation whatsoever in such instances.</p>

<p><strong>In case of any disputes or misunderstanding on the fare OR services rendered kindly do not hesitate to contact us on our 24x7 Call centre (041-6699-6699) or write to us at support@isquaretaxi.in.</strong></p>
                                          </textarea>
                                             </div>  
                                        </div>
             <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="alert alert-danger " style="font-size:12px; clear:both; display:none;" id="reqerror">  
                           FAQ'S Are Required Can't Be Empty!   
                        </div>
                                            </div>
                 
             </div>             
             
<div class="row">
                                            <div class="col-sm-6">
                                                 <div class="" style="padding:20px 0;">
                                                <button class="btn btn-primary" name="add" id="add" >Save Changes</button>
                                                
                                                 </div>  
                                            </div>
                                            
                                        </div>
 
        
       
    </div>

<div class="clearfix"></div>
     <script>
        CKEDITOR.replace('question');  
        </script>  
<script>  
    
 $("#add").click(function(){
     $("#reqerror").hide();
         var data = CKEDITOR.instances.question.getData();  
         if(data.length!=0){
         
    $.ajax({
         url:"/cms/cms/ajaxaddfaqs", 
    type: 'POST',
    data: {postdata:data},    
    success: function (returndata) {
        swal('Success',"Changes Saved",'success'); 
         ajaxindicatorstop();
       
    },failure: (function () {
                          ajaxindicatorstop();
                                       alert("Failure!!");
                                       
                                   }) 
    });
         }else{
             
             $("#reqerror").show();
         } 
});


</script>
            

<style>
  
    body, html {
            font-family: "OpenSansRegular";
            font-size: 13px;
        }
            .form-control {
          
            min-height: 40px !important;
            line-height: 0;
          
        }
   
        .universalSearchDiv{
            margin: 16px 0;
        }
        .productSupportBox{
            margin-top: 13px;
        }


        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{
            padding-bottom: 0;
        }
        .content ul, .content ol, .content pre, .content blockquote, .content textarea:not([class^="cke"]), .content .cke{
            margin: 0.875em 0;
        }

        .content input, .content select, .content textarea:not([class^="cke"]){
            font-size: 15px;
        }
        #cke_editor{
            float: left;
        }
        .btn-primary {
    background-color: #0e9fce !important;
    border-color: #0090bf !important;
    color: #fff !important;
}
.btn {
    -moz-user-select: none;
    background-image: none !important;
    border: 1px solid transparent !important;
    border-radius: 4px !important;
    cursor: pointer !important;
    display: inline-block;
    font-size: 14px !important;
    font-weight: normal !important;
    line-height: 28px !important;
    margin-bottom: 0;
    padding: 6px 12px !important;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}
.SearchBoxList{
    position: static;
}   
    
   
    
    
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
