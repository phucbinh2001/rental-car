<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <div class="container">
        @if (count($errors) > 0)
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="/form">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensp" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="mota" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Giá</label>
                <input type="number" class="form-control" name="gia" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="tendangnhap" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
