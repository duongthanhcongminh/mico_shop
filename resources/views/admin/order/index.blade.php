@extends('admin.layout.master')

@section('title', 'Order')

@section('body')

                <!-- Main -->
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>
                                    Order
                                    <div class="page-title-subheading">
                                        View, create, update, delete and manage.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">

                                <div class="card-header">

                                    <form>
                                        <div class="input-group">
                                            <input type="search" name="search" id="search" value="{{ request('search') }}"
                                                placeholder="Search everything" class="form-control">
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-search"></i>&nbsp;
                                                    Search
                                                </button>
                                            </span>
                                        </div>
                                    </form>

                                </div>

                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Customer's name</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Customer's phone</th>
                                                <th class="text-center">Payment</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)

                                            <tr>
                                                <td class="text-center text-muted">#{{$order->id}}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{$order->name}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    {{$order->street_address . ' - ' . $order->town_city . ' - ' . $order->country}}
                                                </td>
                                                <td class="text-center">
                                                    {{$order->phone}}
                                                </td>
                                                <td class="text-center">
                                                    {{$order->payment_type}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge badge-dark">
                                                        {{ App\Utilities\Constant::$order_status[$order->status] }}
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="./admin/order/{{$order->id}}"
                                                        class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                        Details
                                                    </a>
                                                    <a href="./admin/order/{{ $order->id }}/edit" data-toggle="tooltip" title="Edit"
                                                       data-placement="bottom" class="btn btn-outline-warning border-0 btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                                    </a>
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-block card-footer">
                                    {{ $orders->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main -->

@endsection
