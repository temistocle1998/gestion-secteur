@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-6">
    <div class="card">
      <div class="card-header"><h4>affecter un secteur</h4></div>
      <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ url('/regions') }}">
            <div class="form-group">
                <select class="form-control @error('secteur_id') is-invalid @enderror" name="secteur_id" id="">
                    @foreach ($secteurs as $secteur)
                        <option value="{{ $secteur->id }}" {{ $secteur->id ? 'selected' : '' }}>{{ $secteur->nom }}</option>
                    @endforeach
                </select>
                @error('secteur_id')
                    <div class="invalid-feedback">
                        {{$errors->first('secteur_id')}}
                    </div>
                @enderror
            </div>
          <div class="form-group">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" (click)="onSubmit()" class="btn btn-primary float-right">
                Enregistrer
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection