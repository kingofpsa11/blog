<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @if (count($errors)>0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    @endif
    <form action="{!! route('postLogin') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="txtUsername" id="txtUsername"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="txtPassword" id="txtPassword"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login" name="btnSubmit"></td>
            </tr>
        </table>
    </form>
</body>
</html>