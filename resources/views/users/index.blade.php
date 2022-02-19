@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-toolbar clearfix">
        <div class="toolbar-btn-action">
          <a class="btn btn-primary m-r-5" routerLink="/add-categorie"><i class="mdi mdi-plus"></i>Nouvelle Région</a>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Role</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->telephone}}</td>
                  <td>{{$user->role}}</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-xs btn-default" (click)="showCategorie(categorie)"  type="button" title="editer" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="mdi mdi-pencil"></i></a>
                      <a class="btn btn-xs btn-default" (click)="supprimerCategorie(categorie)"  title="supprimer" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></a>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">
                <form method="POST" >
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Intitule</label>
                    <input type="text" class="form-control" formControlName="intitule" value="" id="intitule" name="intitule">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="button"  (click)="updateCategorie(cat)" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>  
@endsection