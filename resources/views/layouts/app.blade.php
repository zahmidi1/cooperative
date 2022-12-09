 <!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- mobile metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">
     <!-- site metas -->
     <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">
     <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
     <title>AnNassim Al Akhdar</title>
     <meta name="keywords" content="Annassim Al Akhdar">
     <meta name="keywords" content="النسيم الاخضر">
     <meta name="description"
         content="annassim al akhdar est une coopérative qui fournit une gamme de services, tels que l'achat et la vente de lait naturel et de ses dérivés">
     <meta name="description" content="النسيم الاخضر هي تعاونية تقدم مجموع من الخدمات كبيع وشراء حليب طبيعي و مشتقاته">
     <meta name="author" content="annassim al akhdar">
     <meta name="author" content="annassim al akhdar,nassimalakhdar,anassimalakhdar,coopérative">
     <!-- FAVICONS ICON -->



     <!-- FAVICONS ICON -->
     <link rel="shortcut icon" type="image/png"
         href="{{ url('https://anassimalakhdar.com/assets/images/favicon.png') }}">
     <!-- Datatable -->
     <link href=" {{ url('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
     <!-- Custom Stylesheet -->
     <link href="{{ url('vendor/jquery-nice-select/css/nice-select.css') }} " rel="stylesheet">
     <link href="{{ url('css/style.css') }}" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
         integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Form step -->
     <link href="vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">



 </head>





 <body>

     <!--*******************
        Preloader start
    ********************-->
     <div id="preloader">
         <div class="waviy">
             <span style="--i:1">L</span>
             <span style="--i:2">o</span>
             <span style="--i:3">a</span>
             <span style="--i:4">d</span>
             <span style="--i:5">i</span>
             <span style="--i:6">n</span>
             <span style="--i:7">g</span>
             <span style="--i:8">.</span>
             <span style="--i:9">.</span>
             <span style="--i:10">.</span>
         </div>
     </div>
     <!--*******************
        Preloader end
    ********************-->


     <!--**********************************
        Main wrapper start
    ***********************************-->
     <div id="main-wrapper">

         <!--**********************************
            Nav header start
        ***********************************-->
         <div class="nav-header">
             <a href="index.html" class="brand-logo">


                 <img width="60px" height="60px"
                     src="{{ url('https://anassimalakhdar.com/assets/images/favicon.png') }}" alt="">

                 <div class="brand-title fs-3">
                     Annassim al akhdar
                 </div>
             </a>
             <div class="nav-control">
                 <div class="hamburger">
                     <span class="line"></span><span class="line"></span><span class="line"></span>
                 </div>
             </div>
         </div>

         <div class="header">
             <div class="header-content">
                 <nav class="navbar navbar-expand">
                     <div class="collapse navbar-collapse justify-content-between">
                         <div class="header-left">
                             <div class="dashboard_bar">
                                 @yield('namePage')
                             </div>
                         </div>
                         <ul class="navbar-nav header-right">
                             <li class="nav-item">
                                 <div class="input-group search-area">
                                     <input type="text" class="form-control" placeholder="Search here...">
                                     <span class="input-group-text"><a href="javascript:void(0)"><i
                                                 class="flaticon-381-search-2"></i></a></span>
                                 </div>
                             </li>




                         </ul>
                     </div>
                 </nav>
             </div>
         </div>

         <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
         <!-- Modal -->


         <!--**********************************
            Sidebar start
        ***********************************-->

         <div class="dlabnav">
             <div class="dlabnav-scroll">
                 <ul class="metismenu" id="menu">
                     <li class="dropdown header-profile">
                         <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
                             aria-expanded="false" aria-controls="collapseExample">
                             <!-- <img src="{{ url('https://anassimalakhdar.com/assets/images/favicon.png') }}" width="20" alt=""> -->
                             <div class="header-info ms-3">

                                 <span class="font-w600 "><b>{{ Auth::user()->name }}</b></span>
                                 <small class="text-end font-w400">{{ Auth::user()->email }}</small>

                             </div>
                         </a>

                         <div class="dropdown-menu dropdown-menu-end" id="collapseExample">
                             <a href="app-profile.html" class="dropdown-item ai-icon">
                                 <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                     width="18" height="18" viewbox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                     <circle cx="12" cy="7" r="4"></circle>
                                 </svg>
                                 <span class="ms-2">Profile </span>
                             </a>


                             <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                 <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                     width="18" height="18" viewbox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                     <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                     <polyline points="16 17 21 12 16 7"></polyline>
                                     <line x1="21" y1="12" x2="9" y2="12"></line>
                                 </svg>


                                 {{ __('Logout') }}
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>


                         </div>
                     </li>
                     @yield('nav')
                 </ul>

                 <div class="copyright">
                     <p>Copyright © cooperative annassim al akhdar &amp; Developed by <a href=""
                             target="_blank">zahmidi</a>
                         2022</p>
                 </div>

             </div>


         </div>


         <div class="content-body">
             <!-- row -->
             <div class="container-fluid">
                 @yield('content')
             </div>
         </div>

         <!--**********************************
            Footer start
        ***********************************-->
         <div class="footer">
             <div class="copyright">
                 <p>Copyright © cooperative annassim al akhdar &amp; Developed by <a href=""
                         target="_blank">zahmidi</a>
                     2022</p>
             </div>
         </div>
         <!--**********************************
            Footer end
        ***********************************-->

         <!--**********************************
           Support ticket button start
        ***********************************-->

         <!--**********************************
           Support ticket button end
        ***********************************-->


     </div>
     <!--**********************************
        Main wrapper end
    ***********************************-->

     <!--**********************************
        Scripts
    ***********************************-->
     <!-- Required vendors -->
     <script src="{{ url('vendor/global/global.min.js') }}"></script>
     <script src="{{ url('vendor/chart.js/Chart.bundle.min.js') }}"></script>
     <!-- Apex Chart -->
     <script src="{{ url('vendor/apexchart/apexchart.js') }}"></script>

     <!-- Datatable -->
     <script src="{{ url('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ url('js/plugins-init/datatables.init.js') }}"></script>

     <script src="{{ url('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

     <script src="{{ url('js/custom.min.js') }}"></script>
     <script src="{{ url('js/dlabnav-init.js') }}"></script>
     <script src="{{ url('js/demo.js') }}"></script>

     <!-- Required vendors -->
     <script src={{ url('vendor/global/global.min.js') }}></script>

     <!-- Toastr -->
     <script src={{ url('vendor/toastr/js/toastr.min.js') }}></script>

     <!-- All init script -->


     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
         integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
         crossorigin="anonymous" referrerpolicy="no-referrer"></script>


     @if (session('status'))
         <script>
             toastr.success("{{ session('status') }}", "Top Right", {
                 timeOut: 5e3,
                 closeButton: !0,
                 debug: !1,
                 newestOnTop: !0,
                 progressBar: !0,

                 preventDuplicates: !0,
                 onclick: null,
                 showDuration: "300",
                 hideDuration: "1000",
                 extendedTimeOut: "1000",
                 showEasing: "swing",
                 hideEasing: "linear",
                 showMethod: "fadeIn",
                 hideMethod: "fadeOut",
                 tapToDismiss: !1
             })
         </script>
     @endif





     @error('id_client')
         <script>
             toastr.error("This Is error {{ $message }}", "Top Right", {
                 positionClass: "toast-top-right",
                 timeOut: 5e3,
                 closeButton: !0,
                 debug: !1,
                 newestOnTop: !0,
                 progressBar: !0,
                 preventDuplicates: !0,
                 onclick: null,
                 showDuration: "300",
                 hideDuration: "1000",
                 extendedTimeOut: "1000",
                 showEasing: "swing",
                 hideEasing: "linear",
                 showMethod: "fadeIn",
                 hideMethod: "fadeOut",
                 tapToDismiss: !1
             })
         </script>
     @enderror
     @error('period')
         <script>
             toastr.error("This Is error {{ $message }}", "Top Right", {
                 positionClass: "toast-top-right",
                 timeOut: 5e3,
                 closeButton: !0,
                 debug: !1,
                 newestOnTop: !0,
                 progressBar: !0,
                 preventDuplicates: !0,
                 onclick: null,
                 showDuration: "300",
                 hideDuration: "1000",
                 extendedTimeOut: "1000",
                 showEasing: "swing",
                 hideEasing: "linear",
                 showMethod: "fadeIn",
                 hideMethod: "fadeOut",
                 tapToDismiss: !1
             })
         </script>
     @enderror

     @error('quantity')
         <script>
             toastr.error("This Is error {{ $message }}", "Top Right", {
                 positionClass: "toast-top-right",
                 timeOut: 5e3,
                 closeButton: !0,
                 debug: !1,
                 newestOnTop: !0,
                 progressBar: !0,
                 preventDuplicates: !0,
                 onclick: null,
                 showDuration: "300",
                 hideDuration: "1000",
                 extendedTimeOut: "1000",
                 showEasing: "swing",
                 hideEasing: "linear",
                 showMethod: "fadeIn",
                 hideMethod: "fadeOut",
                 tapToDismiss: !1
             })
         </script>
     @enderror
     @error('heat')
         density
         <script>
             toastr.error("This Is error {{ $message }}", "Top Right", {
                 positionClass: "toast-top-right",
                 timeOut: 5e3,
                 closeButton: !0,
                 debug: !1,
                 newestOnTop: !0,
                 progressBar: !0,
                 preventDuplicates: !0,
                 onclick: null,
                 showDuration: "300",
                 hideDuration: "1000",
                 extendedTimeOut: "1000",
                 showEasing: "swing",
                 hideEasing: "linear",
                 showMethod: "fadeIn",
                 hideMethod: "fadeOut",
                 tapToDismiss: !1
             })
         </script>
     @enderror
     @error('density')
         <script>
             toastr.error("This Is error {{ $message }}", "Top Right", {
                 positionClass: "toast-top-right",
                 timeOut: 5e3,
                 closeButton: !0,
                 debug: !1,
                 newestOnTop: !0,
                 progressBar: !0,
                 preventDuplicates: !0,
                 onclick: null,
                 showDuration: "300",
                 hideDuration: "1000",
                 extendedTimeOut: "1000",
                 showEasing: "swing",
                 hideEasing: "linear",
                 showMethod: "fadeIn",
                 hideMethod: "fadeOut",
                 tapToDismiss: !1
             })
         </script>
     @enderror
     @yield('secript')
 </body>

 </html>
