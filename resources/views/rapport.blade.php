@extends('layouts/master')
  @section('contenu')
  <div class="container">
    <div class="text-center text-dark">
      <h2 class="text-dark text-decoration-underline">Rapport complet des prospections réussies</h2>
    </div>
    <br><br>
    <div class="d-flex justify-content-between align-items-center mb-2">
      <!-- Formulaire de filtrage par période -->
      <form action="{{ route('filtrerRapports') }}" method="GET">
        @csrf
        <div class="form-group">
          <label for="start_date" class="text-dark">Date de début :</label>
          <input type="date" name="start_date" class="form-control rounded" id="start_date">
        </div>
        <div class="form-group">
          <label for="end_date" class="text-dark">Date de fin :</label>
          <input type="date" class="form-control rounded" name="end_date" id="end_date">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-secondary rounded">Filtrer</button>
        </div>
      </form>
  
      <a href="{{ route('exporterRapports') }}" class="btn btn-primary">
        Exporter en excel
      </a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table class="table table-bordered border border-dark">
        <thead>
          <tr>
            <th class="text-dark">Nom de l'agent</th>
            <th class="text-dark">Nom du client</th>
            <th class="text-dark">Adresse client</th>
            <th class="text-dark">Date</th>
            <th class="text-dark">Heure de début</th>
            <th class="text-dark">Heure de fin</th>
            <th class="text-dark">Durée</th>
            <th class="text-dark">Observations du client</th>
            <th class="text-dark">Vente Conclue?</th>
            <!-- Autres colonnes du rapport -->
          </tr>
        </thead>
        <tbody>
          @foreach ($rapports as $rapport)
          <tr>
            <td class="text-dark">{{ $rapport->agent_name }}</td>
            <td class="text-dark">{{ $rapport->client_name }}</td>
            <td class="text-dark">{{ $rapport->client_address }}</td>
            <td class="text-dark">{{ $rapport->date }}</td>
            <td class="text-dark">{{ $rapport->start_time }}</td>
            <td class="text-dark">{{ $rapport->end_time }}</td>
            <td class="text-dark">{{ $rapport->duration }} min</td>
            <td class="text-dark">{{ $rapport->client_observation }}</td>
            <td class="text-dark">
              @if($rapport->sale_concluded === 1) Oui @endif
              @if($rapport->sale_concluded === 0) Non @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
    @endsection