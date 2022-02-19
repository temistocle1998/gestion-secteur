@extends('layouts.app')
@section('content')
<div class="col-sm-6 col-md-3">
  <div class="card bg-primary">
    <div class="card-body clearfix">
      <div class="pull-right">
        <p class="h6 text-white m-t-0">Nombre de secteurs</p>
        <p class="h3 text-white m-b-0 fa-1-5x"> {{$secteurCount}}</p>
      </div>
      <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-cash-multiple fa-1-5x"></i></span> </div>
    </div>
  </div>
</div>

<div class="col-sm-6 col-md-3">
  <div class="card bg-danger">
    <div class="card-body clearfix">
      <div class="pull-right">
        <p class="h6 text-white m-t-0">Budget annuel</p>
        <p class="h3 text-white m-b-0 fa-1-5x">{{$budgetCount}} XOF</p>
      </div>
      <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-cart-outline fa-1-5x"></i></span> </div>
    </div>
  </div>
</div>

<div class="col-sm-6 col-md-3">
  <div class="card bg-success">
    <div class="card-body clearfix">
      <div class="pull-right">
        <p class="h6 text-white m-t-0">Utilisateurs</p>
        <p class="h3 text-white m-b-0 fa-1-5x">{{$userCount}}</p>
      </div>
      <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-account fa-1-5x"></i></span> </div>
    </div>
  </div>
</div>

<div class="col-sm-6 col-md-3">
  <div class="card bg-purple">
    <div class="card-body clearfix">
      <div class="pull-right">
        <p class="h6 text-white m-t-0">Regions</p>
        <p class="h3 text-white m-b-0 fa-1-5x">{{$regionCount}}</p>
      </div>
      <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-city fa-1-5x"></i></span> </div>
    </div>
  </div>
</div>
</div>
@endsection