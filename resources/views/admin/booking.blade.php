@extends('admin.layout')
@section('content')
<?php use App\Http\Controllers\bookingController ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container-fluid">
    <style>
        td i {
            font-size: 25px;
        }

        button:disabled {
            cursor: no-drop;
        }
    </style>

    <div class="card">
        <div class="card-body">


            <table class="table color-bordered-table info-bordered-table table-hover">
                <thead>
                    <tr style="text-align: center;">
                        <th>ID</th>
                        <th>Khách hàng</th>
                        <th>Thông tin thêm</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody id="tabledonHang">
                    @foreach($booking as $bk)
                    <tr>
                        <td>#{{$bk->id}}</td>
                        <td>
                            <a href="{{route('booking.show',$bk->id)}}" style="color: unset;">
                                <b>Khách hàng:</b> {{$bk->name}}
                                <br><b>Liên hệ:</b> {{$bk->phone_number}}
                                <br><b>Email:</b> {{$bk->email}}
                                <br>
                                @if($bk->isAccept === 0)
                                <span class="label label-rouded label-danger ">Đã huỷ</span>
                                @elseif($bk->isAccept === 1)
                                <span class="label label-rouded label-success ">Đã chốt đơn</span>
                                @else
                                <span class="label label-rouded label-warning ">Chờ duyệt</span>
                                @endif
                            </a>
                        </td>
                        <td>
                            <b>Xe muốn thuê:</b> {{bookingController::getNameCar($bk->VIN)}}
                            <br>
                            <b>Địa chỉ nhận:</b> {{$bk->address_nhan}}<br>
                            <b>Địa chỉ trả:</b> {{$bk->address_tra}}
                            <br><b>Ngày thuê xe:</b> {{$bk->ngaylayxe}}


                        </td>
                        <td class="align-middle text-center">
                            <button onclick="chotdon({{$bk->id}})" class="btn btn-success btn-circle btn-lg"><i
                                    class="fa fa-check"></i></button>
                            <button onclick="xoa({{$bk->id}})" class="btn btn-danger btn-circle btn-lg"><i
                                    class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Phân trang -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            << </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"> >> </a>
                    </li>
                </ul>
            </nav>
            <!-- End Phaan trang -->
        </div>
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

</div>
@endsection
