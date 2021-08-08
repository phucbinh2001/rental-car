@extends('admin.layout')
@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php use App\Http\Controllers\bookingController ?>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <h3><b>Thuê xe: {{bookingController::getNameCar($booking->VIN)}}</b> <span class="pull-right"
                        id="idDonHang">#{{$booking->id}}</span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left text-left" style="text-align: left;">
                            <address>
                                <img width="300px" src="./images/{{bookingController::getImg($booking->VIN)}}" alt="">
                            </address>
                        </div>
                        <div class="pull-right text-right" style="text-align: right;">
                            <address>
                                <h3 style="text-align: right;">Người thuê,</h3>
                                <h4 style="text-align: right;" id="nguoiNhan" class="font-bold">{{$booking->name}}</h4>
                                <p><b>Ngày nhận xe:</b> <i class="fa fa-calendar"></i> <span
                                        id="ngaydat">{{$booking->ngaylayxe}}</span></p>
                                <p><b>Địa chỉ lấy xe:</b>{{$booking->address_nhan}}</p>
                                <p><b>Địa chỉ trả xe:</b>{{$booking->address_tra}}</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right" style="float: right;" id="action">

                            <button onclick="xoa({{$booking->id}})" class="btn btn-danger" type="button"> <span><i
                                        class="fa fa-times"></i> Huỷ đơn</span> </button>
                            <button onclick="chotdon({{$booking->id}})" class="btn btn-success" type="button"> <span><i
                                        class="fa fa-check"></i> Chốt đơn</span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
            </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                    </li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                    </li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                class="img-circle"> <span>Varun Dhavan <small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                class="img-circle"> <span>Genelia Deshmukh <small
                                    class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                class="img-circle"> <span>Ritesh Deshmukh <small
                                    class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                class="img-circle"> <span>Arijit Sinh <small
                                    class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                class="img-circle"> <span>Govinda Star <small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                class="img-circle"> <span>John Abraham<small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                class="img-circle"> <span>Hritik Roshan<small
                                    class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                class="img-circle"> <span>Pwandeep rajan <small
                                    class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<script>
    function xoa(id) {
        Swal.fire({
            title: 'Bạn muốn huỷ đơn hàng này?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Huỷ ngay',
            cancelButtonText: "Đóng",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Đã huỷ!',
                    '',
                    'success'
                );
                setTimeout(() => {
                    window.location = "/huydon/" + id;
                }, 1500);

            }
        })
    }

    function chotdon(id) {

        Swal.fire(
            'Đã chốt đơn!',
            '',
            'success'
        );
        setTimeout(() => {
            window.location = "/chotdon/" + id;
        }, 1500);
    }
</script>
@endsection
