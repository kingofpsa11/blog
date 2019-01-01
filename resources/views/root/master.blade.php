@extends('root.layout')

@section('title')
    This is master
@endsection
<br/>
@section('content')
    @parent
    <br/>
    This is content of Master<br/>
    @parent
@endsection