<?php include "header.php" ?>

<div class="col-md-12">
  <a href="ordinateurs.php"><strong><i class="glyphicon glyphicon-refresh"></i> Ordinateurs</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Modèle</th>
        <th>Processeur</th>
        <th>RAM (Go)</th>
        <th>Disque Dur (Go)</th>
        <th>Utilisateur</th>
        <th>Local</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>dell_heuzef</td>
        <td>dell</td>
        <td>i7</td>
        <td>8</td>
        <td>128</td>
        <td>heuzef</td>
        <td>e_114</td>
        <td><a href="edit_ordinateurs.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_ordinateurs.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>hp_bebienc</td>
        <td>hp</td>
        <td>i3</td>
        <td>4</td>
        <td>1024</td>
        <td>bebienc</td>
        <td>p_121</td>
        <td><a href="edit_ordinateurs.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_ordinateurs.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>