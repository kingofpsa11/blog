<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link rel="stylesheet" href="{!! url('public/hocsinh/css/bootstrap.min.css') !!}" type="text/css">
</head>
<body>
    <div class="container">
        <div class="card border-primary text-primary">
            <div class="card-header border-primary text-dark">
                Thêm mới
            </div>
            <div class="card-body">
                <form action="{!! route('hocsinh.store') !!}" method="POST" name="frmAdd">
                    @csrf
                    <div class="form-group">
                        <label for="txtHoTen">Họ Tên</label>
                        <input type="text" class="form-control" name="txtHoTen" id="txtHoTen">
                    </div>
                    <div class="form-group">
                        <label for="txtToan">Điểm Toán</label>
                        <input type="text" class="form-control" name="txtToan" id="txtToan">
                    </div>
                    <div class="form-group">
                        <label for="txtLy">Điểm Lý</label>
                        <input type="text" class="form-control" name="txtLy" id="txtLy">
                    </div>
                    <div class="form-group">
                        <label for="txtHoa">Điểm Hóa</label>
                        <input type="text" class="form-control" name="txtHoa" id="txtHoa">
                    </div>
                    <input type="submit" value="Thêm mới" class="btn btn-outline-success">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>