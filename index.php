<?php
    require("core/init.php");
    if($_SERVER['REQUEST_URI'] === '/error'){
        $page = new Template('error.php');
        echo $page;
    } else{
        $page = new Template('src/pages/route.php');
        if($_SERVER['REQUEST_URI'] === '/projects'){
            $projects = new Project();
            $page->projects =  $projects->getAllProjects();
        }
        // if($_SERVER['REQUEST_URI'] === '/team-details'){
        //     $projects = new Project();
        //     $page->projects =  $projects->getAllProjects();
        // }
        echo $page;
    }
