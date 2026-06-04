<?php
    /**
     * api controller
     */
    require_once "config.php";
    require_once "LessonMovieHandler";

    $assignmentActivePage = isset($_GET['page'])? (int)$_GET['page'] : 1;
    $assignmentHandlerInstance = new LessonMovieHandler(TCA_BASE_URL, TCA_API_KEY);
    $assignmentMovieRecords = $assignmentHandlerInstance->fetchCurrentPopular($assighmentActivePage);

    require_once "view.movies.view.php";    
?>
