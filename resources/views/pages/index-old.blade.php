<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Jaegar Resto</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}" />
    <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL ASSETS CUSTOM STYLES -->
    <link href="{{asset('assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL ASSETS CUSTOM STYLES -->

    <link href="{{asset('css/custom-style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/index.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="dashboard-analytics">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="compactSidebar">

                <div class="theme-logo">
                    <a href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </a>
                </div>

                <ul class="menu-categories">
                    <li class="menu active">
                        <a href="#dashboard" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Dashboard</span></div>
                    </li>

                    <li class="menu">
                        <a href="#app" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <rect x="9" y="9" width="6" height="6"></rect>
                                        <line x1="9" y1="1" x2="9" y2="4"></line>
                                        <line x1="15" y1="1" x2="15" y2="4"></line>
                                        <line x1="9" y1="20" x2="9" y2="23"></line>
                                        <line x1="15" y1="20" x2="15" y2="23"></line>
                                        <line x1="20" y1="9" x2="23" y2="9"></line>
                                        <line x1="20" y1="14" x2="23" y2="14"></line>
                                        <line x1="1" y1="9" x2="4" y2="9"></line>
                                        <line x1="1" y1="14" x2="4" y2="14"></line>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Apps</span></div>
                    </li>

                    <li class="menu">
                        <a href="#uiKit" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>UI Kit</span></div>
                    </li>

                    <li class="menu">
                        <a href="#components" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Components</span></div>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Forms</span></div>
                    </li>

                    <li class="menu">
                        <a href="#tables" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Tables</span></div>
                    </li>

                </ul>

                <div class="external-links">
                    <a href="../../documentation/index.html" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                        <div class="tooltip"><span>Documentation</span></div>
                    </a>
                </div>
            </nav>


        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="row m-0">
                <div class="modal fade" id="exampleModali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="orderSubmissionAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <h3 class="mt-3">Thank you, your order has been successfully completed!</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="items" class="col-md-8">
                    <header class="navbar w-100">
                        <div class="row w-100 p-0">
                            <div class="col-md-6 p-0">
                                <h3>Jaegar Resto</h3>
                                <p>Tuesday, 2 Feb 2021</p>
                            </div>
                            <div class="col-md-6 p-0 d-flex justify-content-end">
                                <ul class="navbar-item flex-row search-ul m-0">
                                    <li class="nav-item align-self-center search-animated">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                        <form class="form-inline search-full form-inline search" role="search">
                                            <div class="search-bar">
                                                <input type="text" v-model="search" class="form-control search-form-control  ml-lg-auto" placeholder="Search for food, Coffee, etc..">
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <section>
                        <div class="row m-0">
                            <ul class="nav nav-tabs w-100 mb-3" id="lineTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="underline-home-tab" data-toggle="tab" href="#underline-home" role="tab" aria-controls="underline-home" aria-selected="true">
                                        Hot Dishes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="underline-profile-tab" data-toggle="tab" href="#underline-profile" role="tab" aria-controls="underline-profile" aria-selected="false">
                                        Cold Dishes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="underline-contact-tab" data-toggle="tab" href="#underline-contact" role="tab" aria-controls="underline-contact" aria-selected="false">
                                        Soup
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content w-100" id="lineTabContent-3">
                                <div class="tab-pane fade show active" id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Choose Dishes</h4>
                                        </div>
                                        <div>
                                            <!-- TODO: input select -->
                                        </div>
                                    </div>
                                    <!-- Dishes -->
                                    <div>
                                        <div class="row">
                                            <!-- <div class="col-6 col-md-4 col-lg-3">
                                                <a href="">
                                                    <div class="dish">
                                                        <div class="space">
                                                            <div class="flout">
                                                                <div class="image">
                                                                    <img src="https://purepng.com/public/uploads/large/purepng.com-plateplatedishplattertrencherflat-dishflat-vesseldishwaretableware-1701528276116lqf62.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Lorem ipsum dolor sit amet !</p>
                                                        <p class="price">3.29 $</p>
                                                        <p class="quantity">Lorem ipsum dolor sit</p>
                                                    </div>
                                                </a>
                                            </div> -->
                                            <div class="col-6 col-md-4 col-lg-3" v-for="dish in filteredDishes" :key="dish['id']">
                                                <a href="javascript:void()" v-on:click="addDish({'id': dish['id'],'name': dish['name'],'price': dish['price'],'image': dish['image']})">
                                                    <div class="dish">
                                                        <div class="space">
                                                            <div class="flout">
                                                                <div class="image">
                                                                    <img v-bind:src="dish['image']" v-bind:alt="dish['name']">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="desc">@{{ dish['name'] }}</p>
                                                        <p class="price">@{{ dish['price'] }} $</p>
                                                        <p class="quantity">@{{ dish['quantity'] }} Bowels available</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="underline-profile" role="tabpanel" aria-labelledby="underline-profile-tab">
                                    <div class="media">
                                        <img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="underline-contact" role="tabpanel" aria-labelledby="underline-contact-tab">
                                    <p class="dropcap  dc-outline-primary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div> -->
                            </div>
                        </div>
                    </section>
                </div>
                <div id="orders" class="col-4 p-0">
                    <div class="container container-fluid d-flex h-100 flex-column">
                        <section class="header">
                            <h4>Orders #2363</h4>
                            <div class="d-flex">
                                <input type="radio" id="din" name="order">
                                <input type="radio" id="go" name="order">
                                <input type="radio" id="dis" name="order">
                                <div>
                                    <label for="din" class="din">Dine In</label>
                                    <label for="go" class="go">To Go</label>
                                    <label for="dis" class="dis">Disabled</label>
                                </div>
                            </div>
                        </section>
                        <section class="list flex-fill">
                            <div class="row header m-0">
                                <div class="col-6 py-3">Item</div>
                                <div class="col-3 py-3 text-center">Qty</div>
                                <div class="col-3 py-3 text-center">Price</div>
                            </div>
                            <div class="items">
                                <div class="item pt-4" v-for="dish in selectedDishes" :key="dish['id']">
                                    <div class="row m-0 align-items-center">
                                        <div class="col-6 d-flex p-0">
                                            <div>
                                                <img v-bind:src="dish['image']" alt="">
                                            </div>
                                            <div class="mx-2">
                                                <p class="m-0 name">@{{ dish['name'] }} </p>
                                                <p class="price">@{{ dish['price'] }} $</p>
                                            </div>
                                        </div>
                                        <div class="col-3 pr-0 text-center">
                                            <input type="text" v-model="dish['quantity']" @keypress="isNumber($event)">
                                        </div>
                                        <div class="col-3 text-center">
                                            <p class="sub-price">$ @{{ countSubTotal(dish['price'], dish['quantity']) }}</p>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                    <div class="row m-0 align-items-center pt-2">
                                        <div class="col-9 p-0">
                                            <input type="text" class="text-justify" placeholder="Please, just a little bit spicy only.">
                                        </div>
                                        <div class="col-3 text-center">
                                            <button type="button" class="delete-item" v-on:click="deleteDish(dish['id'])">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="total pt-3">
                            <div class="d-flex justify-content-between">
                                <p>Discount</p>
                                <p>$ 0.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Sub total</p>
                                <p>$ @{{ subTotal }}</p>
                            </div>
                            <div class="d-flex justify-content-center position-relative">
                                <button type="button" class="btn-submit" @click="submitOrder" :disabled="subTotal == 0 ? true : false">
                                    Continue to Payment
                                </button>
                                <div class="loader">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin mr-2">
                                        <line x1="12" y1="2" x2="12" y2="6"></line>
                                        <line x1="12" y1="18" x2="12" y2="22"></line>
                                        <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                        <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                        <line x1="2" y1="12" x2="6" y2="12"></line>
                                        <line x1="18" y1="12" x2="22" y2="12"></line>
                                        <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                        <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                    </svg>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL ASSETS CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
    <!-- BEGIN PAGE LEVEL ASSETS CUSTOM SCRIPTS -->

    <script>
        // console.log(window.location.href);
        // // fetch({{  Request::url() }}+'/api/data')
        // fetch(window.location.href + 'api/data')
        //     .then(response => response.json())
        //     .then(data => console.log(data['01']['name']));
    </script>

    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{asset('js/vue.js')}}" type="module"></script>
</body>

</html>