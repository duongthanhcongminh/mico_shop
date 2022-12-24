@extends('front.layout.master')

@section('title', 'Login')

@section('body')


    <section class = "checkout">
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-12 main-info order-2 order-lg-1">
                    <h2 class="mb-5">Your Information</h2>
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                    <li class="nav-item">
                        <a href="./front/account/{{ $user[0]->id }}/edit-info" class="nav-link">
                                <span class="btn-icon-wrapper pr-2 opacity-8">
                                    <i class="fa fa-edit fa-w-20"></i>
                                </span>
                            <span>Edit</span>
                        </a>
                    </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body display_data">
                                    <div class="position-relative row form-group">
                                        <label for="image" class="col-md-3 text-md-right col-form-label">Avatar</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>
                                                <img style="height: 200px;" class="rounded-circle" data-toggle="tooltip"
                                                     title="Avatar" data-placement="bottom"
                                                     src="front/img/user/{{ $user[0]->avatar ?? 'default-avatar.png' }}" alt="Avatar">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="name" class="col-md-3 text-md-right col-form-label">
                                            Name
                                        </label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->name }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->email }}</p>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="company_name" class="col-md-3 text-md-right col-form-label">
                                            Password
                                        </label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->password }}</p>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="company_name" class="col-md-3 text-md-right col-form-label">
                                            Description
                                        </label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->description }}</p>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="company_name" class="col-md-3 text-md-right col-form-label">
                                            Company Name
                                        </label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->company_name }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="country"
                                               class="col-md-3 text-md-right col-form-label">Country</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->country }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="street_address" class="col-md-3 text-md-right col-form-label">
                                            Street Address</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->street_address }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="postcode_zip" class="col-md-3 text-md-right col-form-label">
                                            Postcode Zip</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->postcode_zip }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="town_city" class="col-md-3 text-md-right col-form-label">
                                            Town City</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->town_city }}</p>
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="phone" class="col-md-3 text-md-right col-form-label">Phone</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $user[0]->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <!-- End Main -->--}}

@endsection

