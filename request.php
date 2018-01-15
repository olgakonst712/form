<?php 



if (!empty($_POST)&&isset($_POST['submit'])) {
	submit();
}




function submit(){
	global $bdd;

	$phrase_sql = "INSERT INTO client (email, password)
    VALUES (:email, :)";
	$preparation = $bdd->prepare($phrase_sql);

	$preparation->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
	$preparation->bindParam(':details',$_POST['description'],PDO::PARAM_STR);

	if ($preparation->execute()) {
		header('Location: index.php');
	} else {
		echo "OOOPS!";
	}



}
 ?>