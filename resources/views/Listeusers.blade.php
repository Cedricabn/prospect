@extends('layoutss/master')
@section('contenu')

<div class="container">
  <div class="border border-dark mx-3 text-dark rounded shadow-lg justify-content-between">
    <div>
    </div>
    <div>
      <br>
      <div class="align-items-center mb-2">
        <center>
          <h3 class="text-decoration-underline">Liste des utilisateurs</h3>
        </center>
      </div>

      <br> <br>
      <div class="row justify-content-center">
        @foreach($liste_users as $user)

        <div class="col-md-6 ">
          <div class="border border-dark rounded p-4">
            <div class="row">
              <div class="col-4 text-center align-self-center">
                <i class="fas fa-user-secret fa-5x text-primary"></i>
              </div>
              <div class="col-8">
                <div class="text-primary">
                  <i class="fas fa-info-circle"></i>&nbsp; Nom de l'utilisateur:
                  <br>
                  {{  $user->name }}
                </div>

                <br>
                <br>
                <br>
                <br>
                <div class="text-primary" style="word-break: break-word;">
                  <i class="fas fa-info-circle"></i>&nbsp; Email de l'utilisateur:
                  <br>
                  {{  $user->email }}
                </div>
              </div>
            </div>
          </div> <br>
        </div>
<br> <br>
        @endforeach
      </div>

    </div>
  </div>
</div>
@endsection
