@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-toolbar clearfix">
        <div class="toolbar-btn-action">
          <a class="btn btn-primary m-r-5" href="{{ url('/secteurs/create')}}"><i class="mdi mdi-plus"></i>Ajouter un secteur</a>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($secteurs as $secteur)
              <tr>
                  <td>{{$secteur->id}}</td>
                  <td>{{$secteur->nom}}</td>
                  <td>
                    <div class="btn-group">
                      <a href="/secteurs/{{ $secteur->id }}/edit" class="btn btn-xs btn-default" type="button" title="editer" data-toggle="modal"><i class="mdi mdi-pencil"></i></a>
                      <a href="#" class="btn btn-xs btn-default" type="button"  title="supprimer" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>  
@endsection