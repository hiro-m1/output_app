@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<h1 class="col-md-12">検索条件を入力してください</h1>
<form action="{{ url('/route/serch')}}" method="post" class="form-group">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label class="col-md-12">路線名（部分一致）</label>
    <input type="text" class="form-control col-md-12" placeholder="路線を入力してください" name="route_name">
    @if ($errors->has('route_name'))
    <li class="list-group-item list-group-item-danger">{{$errors->first('route_name')}}</li>
    @endif
  </div>
    <button type="submit" class="btn btn-primary col-md-12">検索</button>
</form>
<form action="{{ url('/station/serch')}}" method="post" class="form-group">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label class="col-md-12">駅名（完全一致）</label>
    <input type="text" class="form-control col-md-12" placeholder="駅名を入力してください" name="station_name">
    @if ($errors->has('station_name'))
    <li class="list-group-item list-group-item-danger">{{$errors->first('station_name')}}</li>
    @endif
   </div>
  <button type="submit" class="btn btn-primary col-md-12">検索</button>
</form>
<form action="{{ url('/prefecture/serch')}}" method="post" class="form-group">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label class="col-md-12">都道府県名（部分一致）</label>
    <input type="text" class="form-control col-md-12" placeholder="都道府県を入力してください" name="prefecture_name">
    @if ($errors->has('prefecture_name'))
    <li class="list-group-item list-group-item-danger">{{$errors->first('prefecture_name')}}</li>
    @endif
   </div>
  <button type="submit" class="btn btn-primary col-md-12">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
</div>
</div>
</div>
@endif
@endsection
