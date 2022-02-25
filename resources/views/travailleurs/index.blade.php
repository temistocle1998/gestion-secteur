@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
      <div class="card-toolbar clearfix">
        <div class="toolbar-btn-action">
          <a class="btn btn-primary m-r-5" href="{{ url('/travailleurs/create')}}"><i class="mdi mdi-plus"></i>Ajouter un travailleur</a>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>Age</th>
                <th>Sexe</th>
                <th>TELEPHONE</th>
                <th>ADRESSE</th>
                <th>PROFESSION</th>
                <th>Secteur</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($travailleurs as $travailleur)
              <tr>
                  <td>{{$travailleur->id}}</td>
                  <td>{{$travailleur->prenom}}</td>
                  <td>{{$travailleur->nom}}</td>
                  <td>{{$travailleur->age}}</td>
                  <td>{{$travailleur->sexe}}</td>
                  <td>{{$travailleur->telephone}}</td>
                  <td>{{$travailleur->adresse}}</td>
                  <td>{{$travailleur->profession}}</td>
                  <td>{{$travailleur->snom}}</td>
                  <td>
                    <div class="btn-group">
                      <a href="/travailleurs/{{ $travailleur->id }}/edit" class="btn btn-xs btn-default" type="button" title="editer" data-toggle="modal"><i class="mdi mdi-pencil"></i></a>
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
</div> 
@endsection