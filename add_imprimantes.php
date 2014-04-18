<?php include "header.php" ?>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-plus-sign pull-right"></i>
        <h4>Ajouter une imprimante</h4>
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
        </div>
        <div class="control-group">
          <label>Services</label>
          <div class="controls">
            <select class="form-control">
                <option>Direction</option>
                <option>Administratif</option>
                <option>Informatique</option>
                <option>SAV</option>
                <option>Phare Fadet</option>
                <option>Phare Ouch</option>
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