<?php





ob_start();
?>
<link rel="stylesheet" href="./public/css/topicView.style.css" />
<table>
    <thead>
        <tr>
            <th colspan="2">Santé</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="participate" >la santé de bébé</a></td>
            
        </tr>
    </tbody>
</table>

<?php
$content = ob_get_clean();



require_once __DIR__ . '/../templates/mainTemp.php';

?>