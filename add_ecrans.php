<?php include "header.php" ?>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-plus-sign pull-right"></i>
        <h4>Ajouter un écran</h4>
      </div>
    </div>
    <div class="panel-body">
      
      <form class="form form-vertical">
        <div class="control-group">
          <label>Nom</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Nom" required>
          </div>
          <br />
          <label>Modèle</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Modèle" required>
          </div>
          <br />
          <label>Taille</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Taille" required>
          </div>
          <br />
        </div>
        <div class="control-group">
          <label>Ordiniateur</label>
          <div class="controls">
            <select class="form-control">
                <option>dell_heuzef</option>
                <option>hp_bebienc</option>
            </select>
          </div>
        </div>
        <div class="control-group">
          <label></label>
          <div class="controls">
            <button type="submit" class="btn btn-primary">
              Créer
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <hr />
</div>

<?php include "footer.php" ?>