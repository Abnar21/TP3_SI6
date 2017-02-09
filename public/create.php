<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="index.php?action=createStore" method="post">
            <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre du sujet">
            </div>
            <div class="form-group">
                <label for="auteur">Auteur</label>
                <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Nom de l'auteur">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description du sujet"></textarea>
            </div>
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>    