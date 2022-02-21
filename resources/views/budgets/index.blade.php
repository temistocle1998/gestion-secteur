@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-toolbar clearfix">
        <div class="toolbar-btn-action">
          <a class="btn btn-primary m-r-5" href="/budgets/create"><i class="mdi mdi-plus"></i>Ajouter budget</a>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Montant</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($budgets as $budget)
              <tr>
                  <td>{{$budget->id}}</td>
                  <td><a href="/secteurRegion/{{$budget->id}}">{{$budget->nom}}</a></td>
                  <td>
                    <div class="btn-group">
                      <a href="/budgets/{{ $budget->id }}/edit" class="btn btn-xs btn-default" type="button" title="editer" data-toggle="modal"><i class="mdi mdi-pencil"></i></a>
                      <a href="#" class="btn btn-xs btn-default" type="button"  title="supprimer" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
                      <a href="/affecter/{{ $budget->id }}" class="btn btn-xs btn-default" type="button"  title="affecter" data-toggle="tooltip"><i class="mdi mdi-view-module"></i></a>
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