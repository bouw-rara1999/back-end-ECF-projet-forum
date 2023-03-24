<?php
require('.\src\models\class\Comment.class.php');

$comment = new Comment();
ob_start();

// Traitement du formulaire
if (isset($_POST['validate'])) {
  $result = $comment->publishQuestion();
  if (is_string($result)) {
    $errorMsg = $result;
  } else {
    $successMsg = $result;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./public/css/participate2.style.css" />
<body>
  <br><br>
  <form class="container" method="POST">

    <?php
    if (isset($errorMsg)) {
      echo '<p>' . $errorMsg . '</p>';
    } elseif (isset($successMsg)) {
      echo '<p>' . $successMsg . '</p>';
    }
    ?>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description de la question</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
      <textarea type="text" class="form-control" name="content"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
  </form>

  <br><br>
  <h2>Commentaires</h2>
  <?php
  // Affichage des commentaires
  $comment = new Comment();
  $comments = $comment->getComments();

  foreach ($comments as $comment) {
    echo '<div class="comment">';
    echo '<h4>' . $comment['pseudo_auteur'] . $comment['id_auteur'] . '</h4>';
    echo '<p>' . $comment['description'] . '</p>';
    echo '<p>' . $comment['titre'] . '</p>';
    echo '<p>' . $comment['contenu'] . '</p>';
    echo '<p><small>Publié le ' . date('d/m/Y à H:i', strtotime($comment['date_publication'])) . '</small></p>';
    // Ajout du bouton "Supprimer"
    echo '<form method="POST"><input type="hidden" name="id" value="' . $comment['id'] . '"><button type="submit" name="delete">Supprimer</button></form>';
    echo '</div>';
  }

  if (isset($_POST['id'])) {
  $id = $_POST['id'];
} else {
  $errorMsg = "ID de commentaire manquant.";
  // ou rediriger l'utilisateur vers une page d'erreur, etc.
}

  // Traitement de la suppression d'un commentaire
if (isset($_POST['delete'])) {
  $comment = new Comment();
  $result = $comment->deleteComment($id);
  if (is_string($result)) {
    $errorMsg = $result;
   
  } else {
    $successMsg = $result;
    // Recharger la page pour voir les changements 
  }
}
?>
</body>
</html>
<?php
$content = ob_get_clean();

require_once __DIR__ . '/../templates/mainTemp.php';
?>