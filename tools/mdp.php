<?php 
if(isset($_POST["submit"])){
	if(!empty($_POST["mdp"])){
		$salt = 'eca46a4797240dd4936bdf61bf32768c62f539ee46472cf9db01f50231328d2e';
		$hash = $salt . hash("sha256", $_POST['mdp'] . $salt);
		echo "Mot de passe crypté : ".$hash;
		echo "<br />Mot de passe non crypté : ".$_POST['mdp'];
	}
	else{
		echo "Champ MDP vide";
	}
}
?>
<form method="post" action="#">
	Mot de passe à crypter : <input name="mdp" type="text" >
	<input type="submit" name="submit" value="Valider">
</form>
