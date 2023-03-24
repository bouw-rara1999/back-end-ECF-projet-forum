<?php
require_once('./src/models/class/database.class.php');

class Comment extends Database {
  
  private $title;
  private $description;
  private $content;

  public function __construct()
  {
    parent::__construct();

    if(!empty($_POST)){
      if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['content'])) {
        $this->title = htmlspecialchars($_POST['title']);

            
      $this->description = htmlspecialchars($_POST['description']);
      $this->content = htmlspecialchars($_POST['content']);
      }
      
  
    }
  }

  public function publishQuestion() {
    // Vérification si tous les champs ont été remplis
    if (empty($this->title) || empty($this->description) || empty($this->content)) {
        return 'Veuillez compléter tous les champs...';
    }

    // Connexion à la base de données
    $pdo = $this->connect();

    // Insertion de la question dans la table "questions"
    $stmt = $pdo->prepare('INSERT INTO questions (titre, description, contenu, id_auteur, pseudo_auteur, date_publication) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([
      $this->title,
      $this->description,
      $this->content,
      $_SESSION['user']['id'],
      $_SESSION['user']['pseudo'],
      date('Y-m-d H:i:s')
    ]);

    return 'Votre question '.$_SESSION['user']['pseudo'].' a été publiée avec succès !';
  }

  public function getComments() {
    // Connexion à la base de données
    $pdo = $this->connect();

    // Récupération des commentaires depuis la table "comments"
    $stmt = $pdo->query('SELECT * FROM questions ORDER BY date_publication DESC');
    $comments = $stmt->fetchAll();

    return $comments;
  }

 
  public function deleteComment()
  {
    try {
      // Connexion à la base de données
      $pdo = $this->connect();
  
      // Suppression du commentaire de la base de données
      $stmt = $pdo->prepare('DELETE FROM questions WHERE id = :id LIMIT 1');
      $stmt->bindValue(':id', $_POST['id']);
      $suppValide = $stmt->execute();
  
      if ($suppValide) {
        return "Commentaire supprimé !";
      } else {
        return "Erreur veuillez réessayer à nouveau !";
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  

 

  
}


    
  
  

?>
