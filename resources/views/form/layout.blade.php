{!! Form::open() !!}

{!! Form::label('name', 'Họ tên') !!}

{!! Form::text('name', '', ['placeholder' => 'Nhập vào đây']) !!}<br/>

{!! Form::label('password', 'Mật khẩu') !!}

{!! Form::password('password') !!}

{!! Form::label('email', 'Email') !!} <br/>

{!! Form::email('email') !!}

{!! Form::close() !!}