@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <div class="card">
      <div class="card-header"><h4>Ajouter une région</h4></div>
      <div class="card-body">

        <form class="form-horizontal" method="POST" action="{{url('/regions')}}/{{ $region->id }}">
            @method('PATCH')
            @include('includes.form-regions')
          <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" class="btn btn-primary float-right">
                Enregistrer
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection