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
        if($path[1] === 'team-details'){
            $team = new Team();
            $page->team =  $team->getTeamMember($path[2]);
            $page->teams =  $team->getTeamMembers();
        }
        echo $page;
    }
