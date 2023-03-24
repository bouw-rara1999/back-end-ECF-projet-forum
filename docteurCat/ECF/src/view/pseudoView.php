<?php

$user = new User();

ob_start();
?>
<script src="./public/scripts/index.js" defer></script>
<link rel="stylesheet" href="./public/css/modifpseudo.css" />
<div id="formConnect">
    <form id="mailmodif-form">
        <label for="currentpseudo">Current pseudo:</label>
        <input type="text" id="currentpseudo" name="currentpseudo" placeholder="Current pseudo..." style="padding-left: 5px;" required><br><br>
        <label for="newpseudo">New pseudo:</label>
        <input type="text" id="newpseudo" name="newpseudo" placeholder="New pseudo..." style="padding-left: 5px;"  required><br><br>
        <?php require_once __DIR__ . '/../templates/modal.php'; ?></div>
<?php
$content = ob_get_clean();

require_once __DIR__ . '/../templates/mainTemp.php';
