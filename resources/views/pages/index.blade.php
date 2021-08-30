@extends('layouts.layout')
@section('header-button')
<button type="button" class="filter float-end d-md-none p-0" data-toggle="modal" data-target="#filter">
    <i class="bi bi-funnel"></i>
</button>
@endsection
@section('title')
Jaegar Resto
@endsection
@section('content')
<div class="row m-0">
    <div id="fixed-alert-box" class="hidden">
        <p></p>
    </div>
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
        <header>
            <div class="row align-items-center m-0 pt-3">
                <div class="col-sm-6 p-0">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg></a>
                    <h3>Jaegar Resto</h3>
                    <p>Tuesday, 2 Feb 2021</p>
                </div>
                <div class="col-sm-6 p-0 d-flex justify-content-end">
                    <div class="search">
                        <div class="search-bar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="text" v-model="search" class="form-control search-form-control  ml-lg-auto" placeholder="Search for food, Coffee, etc..">
                        </div>
                    </div>
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
                    <li class="nav-item">
                        <a class="nav-link" id="underline-contact-tab" data-toggle="tab" href="#underline-contact" role="tab" aria-controls="underline-contact" aria-selected="false">
                            Grill
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="underline-contact-tab" data-toggle="tab" href="#underline-contact" role="tab" aria-controls="underline-contact" aria-selected="false">
                            Appetizer
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="underline-contact-tab" data-toggle="tab" href="#underline-contact" role="tab" aria-controls="underline-contact" aria-selected="false">
                            Dessert
                        </a>
                    </li>
                </ul>

                <div class="tab-content w-100" id="lineTabContent-3">
                    <div class="tab-pane fade show active" id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab">
                        <div class="d-flex justify-content-between align-items-baseline mb-3">
                            <div>
                                <h4>Choose Dishes</h4>
                            </div>
                            <div class="d-flex justify-content-end">
                                <!-- TODO: input select -->
                                <select name="" id="" class="form-control" dir="rtl">
                                    <option value="">Dine In</option>
                                    <option value="">To Go</option>
                                    <option value="">Delivery</option>
                                </select>
                            </div>
                        </div>
                        {{-- <!-- Dishes --> --}}
                        <div>
                            <div class="empty-dishes-list" v-if="filteredDishes.length < 1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                </svg>
                                <p><strong>Sorray, there is no available dishes</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-4 col-lg-3" v-for="dish in filteredDishes" :key="dish['id']">
                                    <dish class="dish" :dish="dish" @click.native="addDish({'id': dish['id'],'name': dish['name'],'price': dish['price'],'image': dish['image'],'quantity': 1})"></dish>

                                    {{-- <div class="dish" v-on:click="addDish({'id': dish['id'],'name': dish['name'],'price': dish['price'],'image': dish['image']})">
                                        <div class="space">
                                            <div class="flout">
                                                <div class="image">
                                                    <img v-bind:src="dish['image']" v-bind:alt="dish['name']">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="desc">@{{ dish['name'] }}</p>
                                        <p class="price">$ @{{ dish['price'] }}</p>
                                        <p class="quantity">@{{ dish['quantity'] }} Bowels available</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-open-order-list" @click="openOrderList(true)">
            <button type="button">Open Order List</button>
        </div>
    </div>
    <div id="orders" class="col-md-4 p-0 hidden">
        <div class="container container-fluid d-flex flex-column">
            <div class="btn-close-order-list">
                <button type="button" @click="openOrderList(false)">
                    close
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg>
                </button>
            </div>
            <section class="header">
                <h4>Orders #2363</h4>
                <div class="d-flex">
                    <input type="radio" id="din" name="order" checked>
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
                <div class="header row m-0">
                    <div class="col-6 py-3">Item</div>
                    <div class="col-3 py-3 text-center">Qty</div>
                    <div class="col-3 py-3 text-center">Price</div>
                </div>
                <div class="items">
                    <order-item class="item pt-4" v-for="dish in selectedDishes" :dish="dish" :key="dish['id']" @delete-dish="deleteDish"></order-item>

                    {{-- <div class="item pt-4" v-for="dish in selectedDishes" :key="dish['id']">
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
                    </div> --}}
                    <div class="empty-order-list" v-if="selectedDishes.length < 1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                            <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z" />
                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z" />
                        </svg>
                        <p><strong>There is no items yet</strong></p>
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
                    <p>$ @{{ total }}</p>
                </div>
                <div class="d-flex justify-content-center position-relative">
                    <button type="button" class="btn-submit" @click="submitOrder" :disabled="total == 0 ? true : false">
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
@endsection
@section('style')
<link href="{{asset('assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/index.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('script')
{{-- <!-- VUE JS --> --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="{{asset('js/vue.min.js')}}" type="module"></script>
@endsection