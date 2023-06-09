<?php

ob_start();
?>
<link rel="stylesheet" href="./public/css/register.css" />

<div id="formConnect">
  <h1>Inscription</h1>
  <p class="para">Saissisez vos informations pour vous connecter</p>
  <form id="form" action="/register" method="POST">
    <p>Identifiant :</p>
    <label for="pseudo">Pseudo :</label>
    <input class="input" type="text" name="pseudo" id="pseudo">
    <p class="errors"><?= $errors['pseudo'] ?? ''; ?> </p>
    <p>E-mail :</p>
    <input class="input" type="email" name="mail">
    <p class="errors"><?= $errors['mail'] ?? ''; ?> </p>
    <p>Mot de passe :</p>
    <input class="input" type="password" name="password">
    <p class="errors"> <?= $errors['password'] ?? ''; ?> </p>
    <p>Confirmer votre mot de passe</p>
    <input class="input" type="password" name="confirmPass">
    <p class="errors"> <?= $errors['confirmPass'] ?? ''; ?> </p>
    <input class="button" type="submit" value="Inscription">
  </form>
</div>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../templates/mainTemp.php';
