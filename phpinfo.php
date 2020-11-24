      1 <?php
      2 // Mettre en commentaires la ligne 5 pour permettre d'exécuter la suite du fichier appelant.
      3 // Ce fichier est inclus dans tous les fichiers php du site.
      4 
      5 //exit ("Access forbidden.");
      6 
      7 
      8 // Si ce fichier est appelé directement :
      9 if($PHP_SELF == "/exit.php") {
     10    echo "<!doctype html>\n<html>\n<head>\n<meta charset=\"utf-8\">\n<link href=\"style.css\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">\n<link rel=\"icon\" href=\"Images/favicon.ico\" />\n</head>\n<body>\nPermet d'exécuter la suite ou non du fichier appelant.";
     11    echo "<p class=src><a href=\"FichiersTexte/exit.txt\">source php de la page</a></p>\n</body>\n</html>";
     12 }
     13 ?>
