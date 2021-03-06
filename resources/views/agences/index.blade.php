@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
      <div class="card-toolbar clearfix">
        <div class="toolbar-btn-action">
          <a class="btn btn-primary m-r-5" href="/agences/create"><i class="mdi mdi-plus"></i>Nouvelle agence</a>
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
                @foreach ($agences as $agence)
              <tr>
                  <td>{{$agence->id}}</td>
                  <td><a href="/secteurRegion/{{$agence->id}}">{{$agence->nom}}</a></td>
                  <td>
                    <div class="btn-group">
                      <a href="/agences/{{ $agence->id }}/edit" class="btn btn-xs btn-default" type="button" title="editer" data-toggle="modal"><i class="mdi mdi-pencil"></i></a>
                      <form action="/agences/{{ $agence->id }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <a href="" class="btn btn-xs btn-default" type="button"  title="supprimer" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
                        </form>
                      <a href="/affecter/{{ $agence->id }}" class="btn btn-xs btn-default" type="button"  title="affecter" data-toggle="tooltip"><i class="mdi mdi-view-module"></i></a>
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