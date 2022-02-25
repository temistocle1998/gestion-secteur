@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-6">
    <div class="card">
      <div class="card-header"><h4>Formulaire de sondage</h4></div>
      <div class="card-body">

        @if (!session()->has('message'))
            
        <form class="form-horizontal" method="POST" action="{{ route('travailleurs.store') }}">
          @include('includes.form-travailleurs')
          <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" class="btn btn-primary float-right">
                Enregistrer
              </button>
            </div>
          </div>
        </form>
        @endif

      </div>
    </div>
  </div>
</div>
@endsection