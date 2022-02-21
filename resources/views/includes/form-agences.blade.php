@csrf
<div class="form-group">
    <label class="col-xs-12" for="nom">Nom</label>
    <div class="col-xs-12">
      <input class="form-control  @error('nom') is-invalid @enderror" type="text" placeholder="Entrer le nom de la région ..." name="nom"  value="{{ old('nom') ?? $agence->nom}}">
      @error('nom')
      <div class="invalid-feedback">
        {{$errors->first('nom')}}
      </div>
      @enderror
    </div>
</div>