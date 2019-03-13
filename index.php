<?php
    require("core/init.php");
    $path = explode("/", $_SERVER['REQUEST_URI']);
    if($path[1] === 'error'){
        $page = new Template('error.php');
        echo $page;
    } else{
        $page = new Template('src/pages/route.php');
        if($path[1] === 'projects'){
            $projects = new Project();
            $page->projects =  $projects->getAllProjects();
        }
        if($path[1] === 'team'){
            $teams = new Team();
            $page->teams =  $teams->getTeamMembers();
            if(isset($path[2])){
                $page->teams =  $teams->getTeamMembers();
                $page->team =  $teams->getTeamMember($path[2]);
            }
        }
        echo $page;
    }
