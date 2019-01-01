<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{!! url('public/hocsinh/css/bootstrap.min.css') !!}" type="text/css">
</head>
<body>
    <div class="container">
        <div class="card ">
            <div class="card-header bg-primary text-white">
                Edit {!! isset($hocsinh->hoten) ? $hocsinh->hoten : null !!}
                
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['hocsinh.update',$hocsinh->id],'method'=>'PUT']) !!}
                    <div class="form-group">
                        <label for="txtHoTen">Họ Tên</label>
                        <input type="text" class="form-control" name="txtHoTen" id="txtHoTen" value="{!! old('txtHoTen',isset($hocsinh->hoten) ? $hocsinh->hoten : null) !!}">
                    </div>
                    <div class="form-group">
                        <label for="txtToan">Điểm Toán</label>
                        <input type="text" class="form-control" name="txtToan" id="txtToan" value="{!! old('txtToan',isset($hocsinh->toan) ? $hocsinh->toan : null) !!}">
                    </div>
                    <div class="form-group">
                        <label for="txtLy">Điểm Lý</label>
                        <input type="text" class="form-control" name="txtLy" id="txtLy" value="{!! old('txtLy',isset($hocsinh->ly) ? $hocsinh->ly : null) !!}">
                    </div>
                    <div class="form-group">
                        <label for="txtHoa">Điểm Hóa</label>
                        <input type="text" class="form-control" name="txtHoa" id="txtHoa" value="{!! old('txtHoa',isset($hocsinh->hoa) ? $hocsinh->hoa : null) !!}">
                    </div>
                    <input type="submit" value="Edit" class="btn btn-outline-success">
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
</body>
</html>