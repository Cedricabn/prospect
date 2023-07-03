@extends('layoutss/master')
@section('contenu')
<div class="container">
  <div class="border border-dark mx-0 text-dark rounded shadow-lg">
    <div class="p-3">
      <div class="d-flex justify-content-between align-items-center">
        <h3 class="text-decoration-underline">Liste des Prospects</h3>
        <a href="{{ route('create') }}" class=" text-dark">
          <button type="submit" class="bg-primary border border-dark rounded pt-1 pb-1 fas fa-plus">  Ajouter</button>        </a>
      </div>
      <br>
      <div class="row border border-dark rounded p-3 mb-3 ">
          @foreach($liste_prospects as $prospect)
          <div class="row border border-primary rounded p-3 mb-3 ">

          <div class="col-md-6">
          <div class="border border-dark rounded p-3 mb-3">
            <div class="text-primary">
              <i class="fas fa-user-secret"></i> Nom de l'agent:
            </div>
            <div>{{ $prospect->agent_name }}</div>
            <br>
            <div class="text-primary">
              <i class="fas fa-user"></i> Nom du client:
            </div>
            <div>{{ $prospect->client_name }}</div>
            <br>
            <div class="text-primary">
              <i class="fas fa-calendar"></i> Date:
            </div>
            <div>{{ $prospect->date }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border border-dark rounded p-3 mb-3">
            <div class="text-primary">
              <i class="fas fa-stopwatch"></i> Heure de début:
            </div>
            <div>{{ $prospect->start_time }}</div>
            <br>
            <div class="text-primary">
              <i class="fas fa-stopwatch"></i> Heure de fin:
            </div>
            <div>{{ $prospect->end_time }}</div>
            <br>
            <div class="text-primary">
              <i class="fas fa-stopwatch"></i> Durée:
            </div>
            <div>{{ $prospect->duration }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border border-dark rounded p-3 mb-3">
            <div class="text-primary">
              <i class="fas fa-cube"></i> Produit:
            </div>
            <div>{{ $prospect->product }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border border-dark rounded p-3 mb-3">
            <div class="text-primary">
              <i class="fas fa-comments"></i> Observation client:
            </div>
            <div>{{ $prospect->client_observation }}</div>
            <br>
            <div class="text-primary">
              <i class="fas {{ $prospect->sale_concluded ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i> Vente conclue?
            </div>
            <div>{{ $prospect->sale_concluded ? 'Oui' : 'Non' }}</div>
          </div>
        </div>
        <div class="col-12">
          <div class="text-right">
            <a href="{{ route('prospect.edit', ['prospect' => $prospect->id]) }}" class="btn btn-success">
              <i class="fas fa-pencil-alt"></i> Modifier
            </a>
            <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer ce prospect?')){document.getElementById('form-{{$prospect->id}}').submit()}">
              <i class="fas fa-trash-alt"></i> Supprimer
            </a>
            <form id="form-{{$prospect->id}}" action="{{ route('prospect.supprimer', ['prospect' => $prospect->id]) }}" method="post">
              @csrf
              @method('delete')
            </form>
          </div>
        </div> 
      </div>
        <br> <br>
        <hr class="bg-dark text-dark">
        @endforeach 
      </div>
    </div>
  </div>
</div>
@endsection
