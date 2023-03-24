<?php

ob_start();
?>
<link rel="stylesheet" href="./public/css/forum.style.css" />
<table>
    <thead>
        <tr>
            <th colspan="2">forum</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="/topic" >topic discussion libre</a></td>
        </tr>
    </tbody>
</table>

<?php
$content = ob_get_clean();

require_once __DIR__ . '/../templates/mainTemp.php';
?>