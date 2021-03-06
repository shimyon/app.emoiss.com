
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
            <div class="row">
            <div class="col-lg-6"> 
            <div class="innerPageTitleDiv">
              <h1>Term & Conditions</h1>
       <span class="innerPageSubTitle"></span>

            </div>
            </div>

<div class="col-lg-6">  
<div class="CalenderOuter"></div>
</div>
 
</div>
<div class="listingTableDiv">
     <form method="post" name="tnc" class="form-horizontal" id="tnc"><div class="HundredPercentClass MarginTopBox">
<div class="col-lg-2 col-sm-6">
  <h5><strong class="BlackColor">Term &amp; Conditions Content</strong></h5>
</div>
<div class="col-lg-7 col-sm-6">
 <div style="clear: both;"></div>
<textarea name="tnc" class="jqte-test" placeholder="Tnc&#x20;Page&#x20;Info">&lt;p&gt;The use of this website is subject to the following&amp;nbsp;&lt;strong class=&quot;BlackColor&quot;&gt;Term &amp;amp; Conditions&lt;/strong&gt;:&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;bold&quot;&gt;Site and Contents&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;The content of the pages of this website is for your general information and use only. It is subject to change without prior notice. Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;bold&quot;&gt;Ownership&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.&lt;/p&gt;
&lt;p&gt;Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offence.&lt;/p&gt;
&lt;p&gt;From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).&lt;/p&gt;
&lt;p&gt;You may not create a link to this website from another website or document without www.isquaretaxi.in prior written consent. Your use of this website and any dispute arising out of such use of the website is subject to the laws of India or other regulatory authority.&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;bold&quot;&gt;User Content&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;You are prohibited from posting defamatory, obscene, pornographic, profane, threatening or unlawful material in our forums or our user feedback sections.&lt;/p&gt;
&lt;p&gt;www.isquaretaxi.in will fully cooperate with any law enforcement authorities or court order requesting or directing www.isquaretaxi.in to disclose the identity of anyone posting such materials.&lt;/p&gt;
&lt;p&gt;www.isquaretaxi.in may change, edit, or remove any user material or conversations that are illegal, indecent, obscene or offensive, or that violates www.isquaretaxi.in policies in any way.&lt;/p&gt;
&lt;ul id=&quot;termslist&quot;&gt;
&lt;li&gt;A booking ID No (confirmation) will be sent to the traveller over email when he completes an online car booking with &quot; I SQUARE TAXI &quot; along with an SMS update on the same.&lt;/li&gt;
&lt;li&gt;Producing the booking ID No provided earlier is mandatory to avail the car rental services by &quot; I SQUARE TAXI &quot;. If this is not done it entitles the driver to refuse service delivery without any liability to us.&lt;/li&gt;
&lt;li&gt;When a customer produces the booking ID No provided to him it earlier, it implies that we have read and understood all terms and conditions mentioned herewith and agrees on all of them.&lt;/li&gt;
&lt;li&gt;The start and end distance in Kms will be calculated from travellers pickup place. Driving speed of the vehicle as per the directions of the local transport authority only.&lt;span class=&quot;bold&quot;&gt; Parking charges, Toll charges, State Taxes and Entry Fees etc. to be paid by the customer.&lt;/span&gt;&lt;/li&gt;
&lt;li&gt;Distances between two locations (points) be it an intercity distance or from travellers pickup place etc &lt;span class=&quot;bold&quot;&gt;mentioned on the website are approximate&lt;/span&gt;. Actual distance may differ depending on the exact geographical location of the points under consideration.&lt;/li&gt;
&lt;li&gt;Car air-conditioner&lt;span class=&quot;bold&quot;&gt; will not work on hilly routes &amp;amp; also when the vehicle is not in motion&lt;/span&gt;. The customer is also not expected to request the driver to make the air condition operational in the aforementioned cases.&lt;/li&gt;
&lt;li&gt;Any form of discounts are only applicable only on the basic fare and cannot be made available on extra charges like toll, taxes, charges on for extra Kms consumed if applicable, charges for extra hours consumed if applicable, driver allowance, parking, night charges, unless specified.&lt;/li&gt;
&lt;li&gt;The vehicle booked will be subject to availability. In a case where the car booked is not available on the day of travel the customer will be provided with an &lt;span class=&quot;bold&quot;&gt;alternative equivalent vehicle&lt;/span&gt; in the similar segment as applicable.&lt;/li&gt;
&lt;li&gt;The customer can request for amendments to a booking made earlier by him only if the request is&lt;span class=&quot;bold&quot;&gt; done 10 hours before the pick-up time&lt;/span&gt;. No changes will be done within 10 hours of the time of pick up time. In cases where amendments are requested on cab type, the cab type requested is subject to availability. In case of a no show where the customer has not informed &quot; I SQUARE TAXI &quot; on the changes on his schedule 10 hours before the pick-up no refunds will be made. The amendments can be done by contacting the support team of &quot; I SQUARE TAXI &quot; on 9043-99-6699 and mention the booking ID No for references.&lt;/li&gt;
&lt;li&gt;The customer is liable to pay &lt;span class=&quot;bold&quot;&gt;waiting charges&lt;/span&gt; in the case of delay (be it for any reason) exceeding more than 15 minutes from the scheduled pick up time.&lt;/li&gt;
&lt;li&gt;The customer is liable to pay for any additional distance travelled and also for additional hourly charges if applicable. Any unscheduled changes will attract additional charges as applicable.&lt;/li&gt;
&lt;li&gt;All bookings under consideration are on a calendar day basis i.e from &lt;span class=&quot;bold&quot;&gt;midnight 12:00 to midnight 12:00&lt;/span&gt;. As an example for a cab booked for 4th July where the pick-up time is 4:00 p.m, the booking will be valid till 14th Apr 11:59 p.m and not 5th July 4:00 p.m.&lt;/li&gt;
&lt;li&gt;Cabs that are booked for outstation (any or all of Oneway, round trip &amp;amp; multicity) &lt;span class=&quot;bold&quot;&gt;cannot be used for local travel&lt;/span&gt;. As an example if a customer books a cab from Chennai to Bangalore then to Nandi Hills and back to Chennai for a period of 3 days in total &amp;amp; has a predefined Km limit of 800 Kms and he returns back to Chennai on the second day &amp;amp; has a balance Km limit of 50 with one day remaining, in spite of this he is not entitled to consume this 50Kms for local travel in Chennai (From city), however the customer can travel from Chennai to some other city outside city limits of Chennai (say Chengalpet) &amp;amp; consume the remaining 50 Kms or more than this by paying additional charges.&lt;/li&gt;
&lt;li&gt;If needed, a customer can amend his booking from one way to round trip or from one way to multi-city while his travel is in progress. A request for the amendment while mentioning the booking ID number &amp;amp; reason for amendment has to be made to the support team at &quot; I SQUARE TAXI &quot; by reaching them on 9043-99-6699. Whether or not to make an amendment as per the request of the customer solely rests with our support team. If the amendment request by the customer is approved our support team they will guide on the difference amount to be paid to the driver as to make the amendment a reality. This amount has to be paid immediately to the driver in cash after our team makes an amendment, failure to do so will not make the requested amendment a reality.&lt;/li&gt;
&lt;li&gt;For all travel types (one way, round trip) customer has to bear all extra charges like driver allowance, toll, taxes, charges on for extra Kms consumed if applicable, charges for extra hours consumed if applicable, parking charges, night charges and any other charges applicable as &lt;span class=&quot;bold&quot;&gt;mentioned at the time of booking.&lt;/span&gt;&lt;/li&gt;
&lt;li&gt;For one way outstation trips the customer will pay for any additional charges in the case where the driver needs to cover the additional distance (or) needs additional duration to complete his return journey (whichever of these two higher).&lt;/li&gt;
&lt;li&gt;Transfers with unspecified distance coverage will only include one-way transfer either from airport or railway station to a single location or vice versa. Pick-ups or drops from multiple locations are not included in such bookings.&lt;/li&gt;
&lt;li&gt;&quot; I SQUARE TAXI &quot; cannot be held accountable for any delay or consequential loss caused to the customer due to traffic jam or reasons beyond the reasonable control of the driver or lapses on the part of the driver.&lt;/li&gt;
&lt;li&gt;&quot; I SQUARE TAXI &quot; cannot be held accountable for any loss, damage, physical injury etc suffered by the customer while availing its services.&lt;/li&gt;
&lt;li&gt;In case of any &lt;span class=&quot;bold&quot;&gt;misconduct or misbehaviour by the driver&lt;/span&gt;, the customer should &lt;span class=&quot;bold&quot;&gt;immediately report to the support team of &quot; I SQUARE TAXI &quot;&lt;/span&gt; at 9043-99-6699 and share the experience while mentioning the booking ID No for reference.&lt;/li&gt;
&lt;li&gt;&quot; I SQUARE TAXI &quot; cannot be held accountable for any loss, damage or delay suffered by the customer due to force majeure events.&lt;/li&gt;
&lt;li&gt;In case of any dispute, parties agree to the exclusive jurisdiction of courts of Tamilnadu.&lt;/li&gt;
&lt;li&gt;In addition to all the above-mentioned terms &amp;amp; conditions, user terms mentioned on the website apply.&lt;/li&gt;
&lt;li&gt;In a scenario, wherein a customer already has received the driver &amp;amp; cab details and the cab hired does not show up on the day of travel, it will be considered as the failure of the fleet partner of &quot; I SQUARE TAXI &quot;. &quot; I SQUARE TAXI &quot; being a Taxi Booking Facilitator will take all necessary efforts to provide the customer with an alternative mode of transport immediately, in the shortest possible time. &quot; I SQUARE TAXI &quot; is not liable to reimburse its customer for any expenses&lt;span class=&quot;bold&quot;&gt; like hotel stay charges, flight ticket charges or any other type of monetary expenses&lt;/span&gt; which the customer had to bear as a result of no show of the cab on the day of planned cab travel.&lt;/li&gt;
&lt;/ul&gt;
&lt;p&gt;&lt;span class=&quot;bold&quot;&gt;Special instructions&lt;/span&gt;&lt;/p&gt;
&lt;ul id=&quot;termsspecial&quot;&gt;
&lt;li&gt;Driver &amp;amp; car details - These details will be sent to the customer by &quot; I SQUARE TAXI &quot; &lt;span class=&quot;bold&quot;&gt;approximately before 4 hours from the pick-up time by SMS and email.&lt;/span&gt; In some cases, the driver or an associate of &quot; I SQUARE TAXI &quot; may also call in advance to reconfirm with the customer.&lt;/li&gt;
&lt;li&gt;Non-receipt of the driver and car details - In such cases the customer needs to contact the support team at &quot; I SQUARE TAXI &quot; on 9043-99-6699 and mention the booking ID number.&lt;/li&gt;
&lt;li&gt;The demand of money by the driver- The booking ID provided to the customer clearly indicates the items including on his booking. Any amount over and above this both in terms of distance and duration and other items such as night charges, driver allowance, toll, taxes, state taxes, charges on for extra Kms consumed if applicable, charges for extra hours consumed if applicable, parking charges etc have to be paid directly to the driver in cash. In case of any dispute with the driver, the customer should reach the support team of &quot; I SQUARE TAXI &quot; at 9043-99-6699 and mention the booking ID details for reference and mention the subject of dispute.&lt;/li&gt;
&lt;li&gt;Refusal by the driver to deliver services - The customer to contact the support team at &quot; I SQUARE TAXI &quot; on 9043-99-6699 and mention the booking ID number for reference.&lt;/li&gt;
&lt;/ul&gt;</textarea></div>
</div>
<div class="HundredPercentClass MarginTopBox">
<div class="col-lg-2 col-sm-3">
  <h5><strong class="BlackColor">&nbsp;</strong></h5>
</div>
<div class="col-lg-3 col-sm-3">
   <input type="submit" name="submit" class="btn&#x20;btn-primary&#x20;ButtonCommon" value="Update">   
<!--<button class="btn btn-primary ButtonCommon" type="button">Updates</button>&nbsp;
<button class="btn btn-primary ButtonCommon" type="button">Cancel</button>-->
</div>
</div>
</form></div>
<!-- TinyMCE -->
<script type="text/javascript" src="/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="/tinymce/tinyinit.js"></script>
<!-- /TinyMCE --> 



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
