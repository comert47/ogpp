<?php include "header.php" ?>

<div class="col-md-12">
  <a href="locaux.php"><strong><i class="glyphicon glyphicon-refresh"></i> Locaux</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Numéro</th>
        <th>Bâtiment</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>114</td>
        <td>e</td>
        <td><a href="edit_locaux.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_locaux.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>121</td>
        <td>p</td>
        <td><a href="edit_locaux.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_locaux.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>