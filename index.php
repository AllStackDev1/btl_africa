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
            $team = new Team();
            $page->teams =  $team->getTeamMembers();
            if(isset($path[2])){
                $page = new Template('src/pages/team-details.php');
                $page->teams =  $team->getTeamMembers();
                $page->team =  $team->getTeamMember($path[2]);
            }
        }
        echo $page;
    }
