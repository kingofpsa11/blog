<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
</head>
<body>
    @if (count($errors) > 0)
        <ul>
        @foreach ($errors->all() as $error)
            <li>
            {!! $error !!}
            </li>
        @endforeach     
        </ul>
    @endif
    <form action="{!! route('postDangKy') !!}" method="POST" name="frmThem" enctype="multipart/form-data">
        {{--  Phải có token  --}}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

        <label for="txtMonhoc">Môn học</label>
        <input type="text" name="txtMonhoc" id="monhoc"><br/>

        <label for="txtGiatien">Giá tiền</label>
        <input type="text" name="txtGiatien" id="giatien"><br/>

        <label for="txtGiangvien">Giảng Viên</label>
        <input type="text" name="txtGiangvien"><br/>

        <label for="fImages">File</label>
        <input type="file" name="fImages" id="fImages"><br/>

        <input type="submit" value="Thêm">
    </form>
</body>
</html>