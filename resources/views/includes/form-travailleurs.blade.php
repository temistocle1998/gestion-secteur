@csrf
<div class="form-group">
    <label class="col-xs-12" for="prenom">Prenom</label>
    <div class="col-xs-12">
      <input class="form-control @error('prenom') is-invalid @enderror" type="text" placeholder="Entrer le prenom prenom ..." name="prenom"  value="{{ old('prenom') ?? $travailleur->prenom}}">
      @error('prenom')
      <div class="invalid-feedback">
        {{$errors->first('prenom')}}
      </div>
      @enderror
    </div>
</div>
<div class="form-group">
  <label class="col-xs-12" for="nom">Nom</label>
  <div class="col-xs-12">
    <input class="form-control @error('nom') is-invalid @enderror" type="text" placeholder="Entrer le nom ..." name="nom"  value="{{ old('prenom') ?? $travailleur->prenom}}">
    @error('nom')
    <div class="invalid-feedback">
      {{$errors->first('nom')}}
    </div>
    @enderror
  </div>
</div>

<div class="form-group">
  <label class="col-xs-12" for="telephone">Telephone</label>
  <div class="col-xs-12">
    <input class="form-control @error('telephone') is-invalid @enderror" type="text" placeholder="Entrer le telephone ..." name="telephone"  value="{{ old('telephone') ?? $travailleur->telephone}}">
    @error('telephone')
    <div class="invalid-feedback">
      {{$errors->first('telephone')}}
    </div>
    @enderror
  </div>
</div>

<div class="form-group">
  <label class="col-xs-12" for="age">Age</label>
  <div class="col-xs-12">
    <input class="form-control @error('age') is-invalid @enderror" type="text" placeholder="Entrer l'âge' ..." name="age"  value="{{ old('age') ?? $travailleur->age}}">
    @error('age')
    <div class="invalid-feedback">
      {{$errors->first('age')}}
    </div>
    @enderror
  </div>
</div>

<div class="form-group">
  <label class="col-xs-12" for="age">Sexe</label>
  <div class="col-xs-12">
    <select class="form-control @error('sexe') is-invalid @enderror" name="sexe" id="">
            <option value="Homme" {{ $travailleur->sexe ? 'selected' : '' }}>Homme</option>
            <option value="Femme" {{ $travailleur->sexe ? 'selected' : '' }}>Femme</option>
    </select>
    @error('secteur_id')
        <div class="invalid-feedback">
            {{$errors->first('secteur_id')}}
        </div>
    @enderror
    </div>
</div>

<div class="form-group">
  <label class="col-xs-12" for="prenom">Profession</label>
  <div class="col-xs-12">
    <input class="form-control @error('profession') is-invalid @enderror" type="text" placeholder="Entrer la profession ..." name="profession"  value="{{ old('profession') ?? $travailleur->profession}}">
    @error('profession')
    <div class="invalid-feedback">
      {{$errors->first('profession')}}
    </div>
    @enderror
  </div>
</div>

<div class="form-group">
  <label class="col-xs-12" for="prenom">Adresse</label>
  <div class="col-xs-12">
    <input class="form-control @error('adresse') is-invalid @enderror" type="text" placeholder="Entrer l'adresse ..." name="adresse"  value="{{ old('adresse') ?? $travailleur->adresse}}">
    @error('adresse')
    <div class="invalid-feedback">
      {{$errors->first('adresse')}}
    </div>
    @enderror
  </div>
</div>


<div class="form-group">
  <div class="col-xs-12">
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
</div>

<div class="form-group">
  <label class="col-xs-12" for="descriptif">Difficultés</label>
  <div class="col-xs-12">
  <textarea class="form-control" name="descriptif" id="" cols="30" rows="10"></textarea>
  </div>
</div>