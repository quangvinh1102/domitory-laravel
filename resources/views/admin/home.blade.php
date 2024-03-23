@extends('layout.admin-layout.layout')

@section('name', 'Trang chủ')

@section('content')

<section class="float-start w-100 banner-part1">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Trang chủ</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">

            <div class="side-nav-title side-nav-item">Số liệu sinh viên</div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Tổng số sinh viên</h5>
                                <h3 class="mt-3 mb-3">3</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-calendar-remove widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Sinh viên hết hạn</h5>
                                <h3 class="mt-3 mb-3">5</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="side-nav-title side-nav-item">Số liệu phòng</div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-home widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Tổng số phòng</h5>
                                <h3 class="mt-3 mb-3">5</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-home-remove widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Số phòng trống</h5>
                                <h3 class="mt-3 mb-3">4</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-home-plus widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Phòng chưa ghép đủ </h5>
                                <h3 class="mt-3 mb-3">4</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="side-nav-title side-nav-item">Số liệu người dùng</div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-home widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Tổng số người dùng
                                </h5>
                                <h3 class="mt-3 mb-3">22</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-home-remove widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Số tài khoản bị khóa</h5>
                                <h3 class="mt-3 mb-3">15</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card widget-flat">
                        <a href="">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-home-plus widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Số tài khoản hoạt động
                                </h5>
                                <h3 class="mt-3 mb-3">4</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection