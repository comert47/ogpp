<?php

	/* 
		Bibliothèque de fonctions PHP réalisé par sa subliminence Arnaud de VILLEDON
		Date : 28 Mars 2013
		Licence : GPL
		-------------
		Optimisé pour pour les besoins du projet OGPP par Heuzef
		Date : Avril 2014
	*/

	function connecte($base)
	{
		$hote="localhost";
		$utilisateur="ogpp";
		$pass="proot";
		if(!isset($connexion))
		{
			$connexion=mysql_connect($hote,$utilisateur,$pass) or die ("connexion au serveur impossible !");
			$db=mysql_select_db($base,$connexion) or die ("selection de la base $base impossible !");
		}
	}

	function requete($sql)
	{
		$resultat=mysql_query($sql) or die("requete $sql problematique !");
		return $resultat;
	}

	function requete1l($sql)
	{
		$resultat=mysql_query($sql) or die("requete $sql problematique !");
		$ligne=mysql_fetch_array($resultat);
		return $ligne;
	}

	function lignetextform($libelle,$variable,$contenu="")
	{
		if($contenu!="")
		{
			$attr="value=\"$contenu\"";
		}
		else
		{
			$attr="";
		}
		echo "
				<tr>
					<td>$libelle</td>
					<td><input type='text' name='$variable' $attr required></td>
				</tr>
			";
	}

	function lignepasswordform($libelle,$variable,$contenu="")
	{
		if($contenu!="")
		{
			$attr="value=\"$contenu\"";
		}
		else
		{
			$attr="";
		}
		echo "
			<tr>
				<td>$libelle</td>
				<td><input type='password' name='$variable' $attr size='50'></td>
			</tr>
			";
	}

	function lignedateform($libelle,$variable,$contenu="")
	{
		if($contenu!="")
		{
			$attr="value=\"$contenu\"";
		}
		else
		{
			$attr="";
		}
		echo "
			<tr>
				<td width='20%'>$libelle</td>
				<td><input type='date' name='$variable'  $attr size='50'></td>
			</tr>
			";
	}

	function lignecomboform($base,$libelle,$variable,$sql,$contenu=-1)
	{
		echo "
			<tr>
				<td>$libelle</td>
				<td>
					<select name='$variable'>";
						connecte($base);
						$res=requete($sql);
						while($enregistrement=mysql_fetch_array($res))
						{
							$code=$enregistrement[0];
							$libelle=$enregistrement[1];
							if($code==$contenu)
								$attr="selected";
							else
								$attr="";
							echo "<option value='$code' $attr>$libelle</option>";
						}
		echo "		</select>
				</td>
			</tr>
			";
	}

	function codecacheform($variable,$contenu)
	{
		echo "<input type='hidden' name='$variable' value='$contenu'>";
	}

	function ligneboutonform($libelle,$nombouton="nombouton")
	{
		echo "
			<tr>
				<td colspan='2' align='center'>
					<input type='submit' value=\"$libelle\" name=\"$nombouton\">
				</td>
			</tr>
			";
	}

	function ligneradioform($libelle,$variable,$libradarray,$valradarray,$valeurdef=-1)
	{
		echo "<tr>
				<td>$libelle</td><td>";
		$taille=count($libradarray);
		for($i=0;$i<$taille;$i++)
		{
			if($valradarray[$i]==$valeurdef)
				$attr="checked";
			else
				$attr="";
			echo "<input type='radio' name='$variable' value='".$valradarray[$i].
				"' $attr>".$libradarray[$i];
			if($i<$taille-1)
				echo "<br />";
		}
		echo "</td></tr>";
	}

	function affichechamps()
	{
		$num_args=func_num_args();
		$arg_list=func_get_args();
		for($i=0;$i<$num_args;$i++)
			echo "<td>".$arg_list[$i]."</td>";
	}

	function fermetable()
	{
		echo "</table>
		<br />";
	}

	function fermetableform()
	{
		echo "</table>
		</form></body></html>";
	}

	function fermefin()
	{
		echo "
					</center>
				</body>
			</html>
			";
	}

	function enteteform($titre,$action)
	{
		echo "
				<h1>$titre</h1>
				<br />
				<form method='post' action='$action'>
					<table cellspacing=\"3\" cellpadding=\"3\">
			";
	}

	function pasvide($variable)
	{
		if(strlen(trim($variable))!=0)
			return true;
		else
			return false;
	}
?>