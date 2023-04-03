<?php
session_start();

$page_title = 'Home';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/templates/bovenstukhtml.php');
?>

<div class="parent">

        <div class="div1"> </div>
        <div class="div2"> </div>
        <div class="div3"> </div>
        
</div>

<?php
@require_once('src/templates/onderstukhtml.php');