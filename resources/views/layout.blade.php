<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restaurant Dashboard </title>

    @if(!Session::has('adminData'))
        <script type="text/javascript">
            window.location.href="{{url('admin/login')}}";
        </script>
    @endif

    <link rel="icon" href="favicon.ico" type="{{asset('public')}}/image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/my-task.style.min.css">

    
</head>
<body>

<div id="mytask-layout" class="theme-indigo">
    
    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
                <span class="logo-text">Restaurant</span>
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link active" href="{{url('admin')}}">
                    <i class="icofont-speed-meter icofont-md"></i> <span>Dashboard</span></a>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#tikit-Components-2" href="3">
                    <i class="icofont-food-cart icofont-md"></i> <span>Food Categories</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="tikit-Components-2">
                        <li><a class="ms-link" href="{{url('category/create')}}"> <span>Add Food Categories</span></a></li>
                        <li><a class="ms-link" href="{{url('category')}}"> <span>View Food Categories</span></a></li>
                    </ul>
                </li>
                
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#tikit-Components-1" href="#">
                        <i class="icofont-food-basket icofont-md"></i> <span>Food</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="tikit-Components-1">
                        <li><a class="ms-link" href="{{url('food/create')}}"> <span>Add New Food</span></a></li>
                        <li><a class="ms-link" href="{{url('food')}}"> <span>View All Food</span></a></li>
                    </ul>
                </li>
                
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components-1" href="#">
                    <i class="icofont-users-social icofont-md"></i><span>Customers</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components-1">
                        <li><a class="ms-link" href="{{url('customer')}}"> <span>View All Customers</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components-2" href="#">
                    <i class="icofont-fast-food icofont-md"></i></i> <span>Orders</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components-2">
                        <li><a class="ms-link" href="{{url('orders/create')}}"> <span>Add New Order</span></a></li>
                        <li><a class="ms-link" href="{{url('orders')}}"> <span>View All Orders</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components-4" href="#">
                        <i class="icofont-hotel-boy-alt icofont-md"></i> <span>Departments</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components-4">
                        <li><a class="ms-link" href="{{url('department/create')}}"> <span>Add New Departments</span></a></li>
                        <li><a class="ms-link" href="{{url('department')}}"> <span>View All Departments</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components-5" href="#">
                        <i class="icofont-hotel-boy-alt icofont-md"></i> <span>Managers</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components-5">
                        <li><a class="ms-link" href="{{url('manager/create')}}"> <span>Add New Manager</span></a></li>
                        <li><a class="ms-link" href="{{url('manager')}}"> <span>View All Managers</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components-3" href="#">
                        <i class="icofont-hotel-boy-alt icofont-md"></i> <span>Staffs</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components-3">
                        <li><a class="ms-link" href="{{url('staff/create')}}"> <span>Add New Staffs</span></a></li>
                        <li><a class="ms-link" href="{{url('staff')}}"> <span>View All Staffs</span></a></li>
                    </ul>
                </li>
               
               
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                            class="icofont-ui-calculator icofont-md"></i> <span>Accounts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsone">
                        <li><a class="ms-link" href="invoices.html"><span>Invoices</span> </a></li>
                        <li><a class="ms-link" href="payments.html"><span>Payments</span> </a></li>
                        <li><a class="ms-link" href="expenses.html"><span>Expenses</span> </a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#payroll-Components" href="#"><i
                            class="icofont-users-alt-5 icofont-md"></i> <span>Payroll</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="payroll-Components">
                        <li><a class="ms-link" href="salaryslip.html"><span>Employee Salary</span> </a></li>
                        
                    </ul>
                </li>
                    
                            <li><a class="ms-link" href="{{url('admin/logout')}}"><i class="icofont-sign-out icofont-md"></i><span>Logout</span> </a></li>
                            
                        
                <li>

                </li>
               
            </ul>

            <!-- Theme: Switch Theme -->
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-rtl">
                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                    </div>
                </li>
            </ul>
            
            <!-- Menu: menu collapse btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="dropdown notifications zindex-popover">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan Hunter</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="{{asset('public')}}/assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="{{asset('public')}}/assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                <small class="">Dylan.hunter@gmail.com</small>
                                            </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <li><a class="ms-link" href="{{url('admin/logout')}}"><span>Logout</span> </a></li>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
    
                </div>
            </nav>
        </div>

        @yield('content')
    
        </div>

</div>

<!-- Jquery Core Js -->
<script src="{{asset('public')}}/assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="{{asset('public')}}/assets/bundles/apexcharts.bundle.js"></script>
<script src="{{asset('public')}}/assets/bundles/dataTables.bundle.js"></script>
<script src="{{asset('public')}}/assets/bundles/nestable.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="{{asset('public')}}/js/template.js"></script>
<script src="{{asset('publics')}}/js/page/hr.js"></script>
<script src="{{asset('publics')}}/js/page/chart-apex.js"></script>
<script src="{{asset('publics')}}/js/page/index.js"></script>
<script src="{{asset('publics')}}/js/page/tasks.js"></script>
</body>
</html> 