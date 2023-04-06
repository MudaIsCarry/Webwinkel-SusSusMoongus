<?php
session_start();

$page_title = 'Home';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/templates/bovenstukhtml.php');
@require_once('src/templates/indexgrid.php');
@require_once('src/templates/onderstukhtml.php');