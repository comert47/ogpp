<?php include "header.php" ?>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-plus-sign pull-right"></i>
        <h4>Ajouter un utilisateur</h4>
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
          <label>Prénom</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Prénom" required>
          </div>
          <br />
          <label>Login</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Login" required>
          </div>
          <br />
          <label>Mot de passe</label>
          <div class="controls">
            <input type="password" class="form-control" placeholder="Mot de passe" required>
          </div>
          <br />
          <label>Téléphone</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="Téléphone" required>
          </div>
          <br />
          <label>E-mail</label>
          <div class="controls">
            <input type="text" class="form-control" placeholder="E-mail" required>
          </div>
          <br />
        </div>
        <div class="control-group">
          <label>Service</label>
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