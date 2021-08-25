<select>
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=archi', 'root', '');
	$query = $bdd->prepare("SELECT nom FROM client");
	while($dnn = fetch($query)){
		$info = $dnn['nom'];
		?>
		<option><?php echo $info['nom'];?></option>
		<?php
	}
?>
</select>


