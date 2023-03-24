<?php ob_start();?>
    <p>Un mal-être? venez vous renseigner!</p>
    <figure>
       <img src="./public/assets/image/uploads/chatpeureux-unsplash.jpg" alt="docteur et son patient">
    </figure>
    <?php $content = ob_get_clean();
     require_once __DIR__ . '/../templates/mainTemp.php';?>
