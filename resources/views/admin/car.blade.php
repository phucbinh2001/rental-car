<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<?php use \app\Http\Controllers\carController; ?>
@extends('admin.layout')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="{{route('carlist.create')}}" class="btn btn-primary waves-effect w-md waves-light m-b-5">Thêm
                    sản phẩm</a>
                @if(isset($flag)&&$flag=='hot')
                <div>
                    <a href="/" class="btn btn-outline-info waves-effect w-md waves-light m-b-5">Tất
                        cả</a>
                    <a href="/san-pham-hot" class="btn btn-outline-danger waves-effect w-md waves-light m-b-5 active"
                        style="color: #fff;">HOT</a>
                </div>
                @else
                <div>
                    <a href="/" class="btn btn-outline-info waves-effect w-md waves-light m-b-5 active"
                        style="color: #fff;">Tất
                        cả</a>
                    <a href="/san-pham-hot" class="btn btn-outline-danger waves-effect w-md waves-light m-b-5">HOT</a>
                </div>
                @endif

            </div>
            <table class="table color-bordered-table info-bordered-table table-hover">
                <thead>
                    <tr style="text-align: center;">
                        <th>ID</th>
                        <th width="15%">Tên xe</th>
                        <th>Ảnh</th>
                        <th style="text-align: center;">Giá thuê</th>
                        <!-- <th style="width: 400px;text-align: center;">Mô tả</th> -->
                        <!-- <th style="text-align: center;">Thông tin</th> -->
                        <th style="text-align: center;">Sửa</th>
                        <th style="text-align: center;">Xoá</th>
                    </tr>
                </thead>
                <tbody id="tableProducts">
                    @foreach($carList as $car)
                    <tr>
                        <td class="text-center">{{$car->VIN}}</td>
                        <td><b>{{$car->Model}}</b><br>
                            @if($car->hot===1)
                            <span class='label label-rouded label-danger '>HOT</span><br>
                            @endif
                            <b>{{carController::getBranName($car->BrandID)}}</b>
                        </td>
                        <td class="align-middle text-center"><img width=" 80px" src="images/{{$car->img}}" alt="">
                        </td>
                        <td style="text-align: center;">{{ number_format($car->price, 0, ',', '.') }} VND / ngày</td>
                        <!-- <td>${mota.substring(0, Math.min(mota.length, 180))}</td> -->
                        <!-- <td>
                            <p>Lượt mua: ${product.luotmua}</p>
                            <p>Ngày nhập: ${moment(product.ngaynhap).format("DD/MM/YYYY")}</p>
                        </td> -->
                        <td style="text-align: center;"><a href="{{route('carlist.edit',$car->VIN)}}"><i
                                    class="mdi mdi-lead-pencil .md-24"></i></a>
                        </td>
                        <td style="text-align: center; cursor: pointer; color: #ef5350"><a onclick="xoa({{$car->VIN}})"
                                style="color: crimson;"><i class="mdi mdi-delete md-24"></i></a></td>
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
</div>
<script>
    function xoa(id) {
        Swal.fire({
            title: 'Bạn muốn xoá xe này?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xoá ngay',
            cancelButtonText: "Huỷ",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Đã xoá!',
                    '',
                    'success'
                );
                setTimeout(() => {
                    window.location = "/xoa-xe/" + id;
                }, 1500);

            }
        })
    }
</script>
@endsection
