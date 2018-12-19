@extends('root.master')
@section('noidung')
    Day la content cua noidung
@endsection
@section('title','Sub title')
@section('sidebar')
    @parent
    Parent nam phia tren day
@endsection
<?php
$hoten = "Hom nay la thu 2";
?>

@if (strlen($hoten)<=10)
    {{ strlen($hoten) }}   
@elseif (strlen($hoten) > 10)
    Hom nay la thu 3
    {{ strlen($hoten) }}
@endif
{{ $diem or "Khong ton tai" }}
@php
    $count = 10
@endphp
{{-- @for ($i = 0; $i < $count; $i++)
    {!! 'So thu tu '.$i."</br>" !!}
@endfor --}}
@php
    $i=0
@endphp
@while ($i < $count)
    {{ 'So thu tu '.$i }} </br>
    @php
        $i++
    @endphp
@endwhile
@php
    $arr=["hom","nay","la","thu","hai"]
@endphp
@foreach ($arr as $item)
    {{ $item }} </br>
@endforeach