<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
</head>
<body>
    <form action="{!! route('postDangKy') !!}" method="POST" name="frmThem" enctype="multipart/form-data">
        {{--  Phải có token  --}}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <label for="txtMonhoc">Môn học</label>
        <input type="text" name="txtMonhoc" id="monhoc">{!! $errors->first('txtMonhoc') !!}<br/>

        <label for="txtGiatien">Giá tiền</label>
        <input type="text" name="txtGiatien" id="giatien">{!! $errors->first('txtGiatien') !!}<br/>

        <label for="txtGiangvien">Giảng Viên</label>
        <input type="text" name="txtGiangvien">{!! $errors->first('txtGiangvien') !!}<br/>

        <label for="Fimages">File</label>
        <input type="file" name="Fimages" id="Fimages">{!! $errors->first('Fimages') !!}<br/>

        <input type="submit" value="Thêm">
    </form>
</body>
</html>