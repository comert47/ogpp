<?php include "header.php" ?>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-plus-sign pull-right"></i>
        <h4>Ajouter une UC</h4>
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
          <label>Processeur</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Processeur" required>
          </div>
          <br />
          <label>RAM</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="RAM" required>
          </div>
          <br />
          <label>Disque Dur</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Disque Dur" required>
          </div>
          <br />
        </div>
        <div class="control-group">
          <label>Utilisateur</label>
          <div class="controls">
            <select class="form-control">
                <option>heuzef</option>
                <option>bebienc</option>
            </select>
          </div>
        </div>
        <br />
        <div class="control-group">
          <label>Écran</label>
          <div class="controls">
            <select class="form-control">
                <option>dell_heuzef</option>
                <option>hp_bebienc</option>
            </select>
          </div>
        </div>
        <br />
        <div class="control-group">
          <label>Local</label>
          <div class="controls">
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
          </div>
        </div>
        <br />
          <label>Date de mise en service</label>
          <div class="controls">
            <input type="date" class="form-control" placeholder="Date de mise en service" required>
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