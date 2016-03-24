@extends('home.master')
@section('title')Giới thiệu {!!getOption('sitename')!!} @stop
@section('description'){!!getOption('description')!!}@stop
@section('image'){!!getOption('image')!!}@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/home/css/order.css')}}" />

<div id="wrap-order" class="full arial" style="height: 600px;">
    <h2 class="title">Giới thiệu {!!getOption('sitename')!!}</h2>
	<div style="padding: 40px;">
	{!!getOption('gioithieu')!!}
    </div>
</div>

@endsection