<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="{!! url('public/hocsinh/css/bootstrap.min.css') !!}" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table  class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ho va ten</th>
                            <th>Diem Toan</th>
                            <th>Diem Ly</th>
                            <th>Diem Hoa</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0
                        @endphp
                        @foreach ($hocsinh as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->hoten }}</td>
                            <td>{{ $item->toan }}</td>
                            <td>{{ $item->ly }}</td>
                            <td>{{ $item->hoa }}</td>
                            <th>
                                {!! Form::open(['route'=>['hocsinh.destroy',$item->id],'method'=>'DELETE']) !!}
                                    <button type="submit" onclick="return confirm('Chac chan xoa <?php echo $item->hoten ?>')" class="btn btn-outline-danger">Xóa</button>
                                {!! Form::close() !!}                               
                            </th>
                            <th>
                                <a href="{!! route('hocsinh.edit',$item->id) !!}" class="btn btn-outline-info">Edit</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <a href="{!! route('hocsinh.create') !!}" class="btn btn-outline-primary">Them moi</a>
        </div>
    </div>
</body>
</html>
