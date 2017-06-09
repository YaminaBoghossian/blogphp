<?php
$title = $_POST['title'];
$content = $_POST['content'];
echo '<p>title: '. $title .'</p>';
echo '<p>content: '. $content . '</p>';

// SI post nest pas un dossier qui existe alors on cree un dossier post //
if (!is_dir('post')) {
    mkdir('post');
}


// On va vouloir ecrire un fichier et lui donner un nom .  w va autoriser lecriture et va ecraser lancien contenu //

$file = fopen('post/'.$title.'.txt', 'w'); //OUVERTURE FICHIER
fwrite($file, $content); //ECRITURE FICHIER 
fclose($file); //FERMETURE FICHIER 
echo '<p> Well done! You have created a new post !</p>';
header('location: index.php');


?>