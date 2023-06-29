@extends("layoutss/master")
@section("contenu")
<center> Ajouter un nouveau prospect</center>
<div class="border border-dark rounded">
    <div class=" border border-dark rounded mx-2 my-2">
        <br>
        <center>
            <div class="fas fa-info text-primary justify-content-center"> Informations du nouveau prospect
            </div>
        </center> <br>
        <form method="post" action=" {{ route('prospect.ajouter') }}">
@csrf
            <div class=" border border-dark rounded mx-2 my-2">
                <br>
                <center> Entrez les informations suivantes: </center>
                <br>
                <br>
                <div class="row">
                    <div class="col-6">
                        <label for="NomAgent" class="form-label col-12 ">
                            <input type="text" class="form-control" name="agent_nom" id="agent_nom" placeholder="Nom Agent">
                        </label>
                    </div>
                    <div class="col-6">
                        <label for="NomClient" class="form-label col-12 ">
                            <input type="text" class="form-control" name="client_nom" id="client_nom" placeholder="Nom Client">
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="AdresseClient" class="form-label col-12 ">
                            <input type="text" class="form-control" name="client_adresse" id="client_adresse"
                                placeholder="Adresse Client ">
                        </label>
                    </div>
                    <div class="col-6">
                        <label for="Date" class="form-label col-12 ">
                            <input type="date" class="form-control" name="date" id="date" placeholder="Date">
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="Heure de debut" class="form-label col-12 "> Heure de début
                            <input type="time" class="form-control" name="heure_debut" id="heure_debut" value="Heure de début">
                        </label>
                    </div>
                    <div class="col-6">
                        <label for="Heure de fin" class="form-label col-12 "> Heure de fin
                            <input type="time" class="form-control" name="heure_fin" id="heure_fin" placeholder="Heure de fin">
                        </label>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="Produit" class="form-label col-12 ">
                            <select name="produit_presente" id="produit_presente" class="form-control" required>
                                <option value="">Sélectionnez un produit</option>
                                <option value="Table">Table</option>
                                <option value="Chaise">Chaise</option>
                                <option value="Ordinateur">Ordinateur</option>
                                <option value="Ecran">Ecran</option>
                            </select>
                        </label>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="observations" class="form-label col-12 ">
                            <textarea name="observations" id="observations" class="form-control" rows="3"
                                placeholder="Observations du client"></textarea>
                        </label> </div>


                    <div class="col-6  ">
                        <label for="vente-conclue" class="form-label col-12 ">Vente conclue ?</label> <br>
                            <input type="checkbox" id="vente-oui" name="vente-conclue" value="oui"
                                onclick="uncheckOther(this)">
                            <label for="vente-oui">Oui</label> <br>
                            <input type="checkbox" id="vente-non" name="vente-conclue" value="non"
                                onclick="uncheckOther(this)">
                            <label for="vente-non">Non</label>
                            
                        <script>
                            function uncheckOther(checkbox) {
                                var checkboxes = document.getElementsByName(checkbox.name);
                                checkboxes.forEach(function (item) {
                                    if (item !== checkbox) {
                                        item.checked = false;
                                    }
                                });
                            }

                        </script>
                    </div>
                    <br> <br>
                </div>

                </div> <br> 
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="javascript:history.back()" class="bg-danger text-dark border border-dark rounded mx-4 pt-1 pb-1 fas fa-times">
                            Annuler
                         </a>
                    <button type="submit" class="bg-primary border border-dark rounded pt-1 pb-1 fas fa-save">
                        Enregistrer</button>
                </div>
        </form>
        <br>
    </div>
</div>
@endsection
