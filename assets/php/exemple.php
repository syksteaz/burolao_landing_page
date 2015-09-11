<?php
// Avant tout dans ton fichier html tu dois avoir une balise <form method='POST' action='exemple.php'>
// Au submit, $_POST['x'] recupere la valeur de l'input html dont l'attribut 'name' est 'x'
// isset() check si cette valeur existe et empty() si elle est vide
if (isset($_POST['email']) && !empty($_POST['email'])) {
	// le '.' sert a concatener des chaines de caracteres
	// donc on insere une virgule puis un espace apres chaque valeur pour avoir un fichier de type csv
	$addresse_mail = $_POST['email'].', ';
	// le nom du fichier texte qui doit etre a la racine du projet
	$file = "mailingList.txt";
	// on check si le fichier existe et on ajoute notre valeur
	if (file_exists($file)) {
		file_put_contents($file, $addresse_mail, FILE_APPEND | LOCK_EX);
		}
	// ici c'est une redirection donc 'index.html' doit etre remplacé par ton fichier html
	header('Location: index.html');
}
?>

