@extends('admin.layout')
@section('content')
<div class="container-fluid card-body">
    <div class="row">

        <div class="card col-12">
            <div class="card-body">
                <form method="post" action="{{route('carlist.update',$car->VIN)}}">
                    @csrf
                    {!! method_field('patch') !!}
                    <div class="form-group">
                        <label for="emailAddress">Tên xe</label>
                        <input value="{{$car->Model}}" type="text" id="tendt" name="tenxe" parsley-trigger="change"
                            class="form-control">
                    </div>
                    <!-- <div class="form-group">
                        <label for="emailAddress">Biển số xe</label>
                        <input value="{{$car->VIN}}" type="number" id="tendt" name="bienso" parsley-trigger="change"
                            class="form-control">
                    </div> -->
                    <div class="d-flex align-items-center form-group">
                        <!-- <div class="btn-switch btn-switch-custom">
                            <input type="checkbox" name="anhien" id="anhien">
                            <label for="anhien" class="btn btn-rounded btn-custom waves-effect waves-light"
                                style="display: flex;align-items: center;">
                                <em class="glyphicon glyphicon-ok"></em>
                                <strong> Ẩn sản phẩm</strong>
                            </label>
                        </div> -->
                        <div class="btn-switch btn-switch-custom">
                            @if($car->hot===1)
                            <input type="checkbox" checked name="hot" id="hot">
                            <label for="hot" class="btn btn-rounded btn-custom waves-effect waves-light"
                                style="display: flex;align-items: center;">
                                <em class="glyphicon glyphicon-ok"></em>
                                <strong> HOT</strong>
                            </label>
                            @else
                            <input type="checkbox" name="hot" id="hot">
                            <label for="hot" class="btn btn-rounded btn-custom waves-effect waves-light"
                                style="display: flex;align-items: center;">
                                <em class="glyphicon glyphicon-ok"></em>
                                <strong> HOT</strong>
                            </label>
                            @endif
                        </div>

                    </div>
                    <!-- <div class="form-group">
                        <label for="emailAddress">Số lượng hàng</label>
                        <input type="number" name="soluong" parsley-trigger="change" placeholder="" class="form-control"
                            id="soluong">
                    </div> -->
                    <div class="form-group">
                        <label class="control-label">Ảnh sản phẩm</label><br>
                        <img width="500px" id="anhsp" src="images/{{$car->img}}" alt=""><br>
                        <input type="file" name="anh" class="filestyle" data-buttonname="btn-default">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Thương hiệu</label><br>
                        <div class="">
                            <select class="form-control" id="thuonghieu" name="thuonghieu">
                                <option value="">Mời chọn thương hiệu</option>
                                @foreach($brand as $th)
                                @if($car->BrandID==$th->id)
                                <option selected value="{{$th->id}}">{{$th->name}}</option>
                                @else
                                <option value="{{$th->id}}">{{$th->name}}</option>
                                @endif
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Loại xe</label><br>
                        <div class="">
                            <select class="form-control" id="thuonghieu" name="category">
                                <option value="">Mời chọn loại xe</option>
                                @foreach($cate as $cate)
                                @if($car->Category_id==$cate->Category_id)
                                <option selected value="{{$cate->Category_id}}">{{$cate->Label}}</option>
                                @else
                                <option value="{{$cate->Category_id}}">{{$cate->Label}}</option>
                                @endif
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Giá</label>
                        <input value="{{$car->price}}" type="number" name="gia" parsley-trigger="change" placeholder=""
                            class="form-control" id="gia">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mô tả</label>
                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3">
                            {{$car->Description}}
                        </textarea>
                    </div>
                    <!-- <div class="form-group">
                    <label for="emailAddress">Giá khuyến mãi</label>
                    <input type="number" name="giakm" parsley-trigger="change" placeholder="Có thể để trống" class="form-control" id="emailAddress">
                </div> -->
                    <!-- <textarea id="elm1" name="mota"
                        style="width: 100%; height:150px; border-color: #ced4da; color: #67757c;">Mô tả sản phẩm</textarea> -->
                    <div class="form-group text-right m-b-0 mt-3">
                        <button class="btn btn-primary waves-effect waves-light" name="them" type="submit">
                            Sửa
                        </button>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
