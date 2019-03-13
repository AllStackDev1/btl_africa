    <!-- TEAM DETAILS HOME START -->
    <section class="team-details-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Team Details</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="index.html" class="text-white">Home</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="team-details.html" class="text-custom">Team Details</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM DETAILS HOME END -->

    <!-- TEAM DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="team-details-img mo-mb-20">
                        <img src="<?php echo BASE_URL?>uploads/images/team/<?php echo $team[0]->file_name; ?>" class="img-fluid d-block mx-auto rounded">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-details rounded p-4">
                        <h4 class="text-dark mb-2"><?php echo $team[0]->name; ?></h4>
                        <h6 class="text-custom"><?php echo $team[0]->position; ?></h6>
                        <h6 class="text-muted mt-2">
                        
                        </h6>
                        <div class="team-details-border mt-3 mb-3"></div>
                        <p class="team-details-desc text-muted mb-4"><?php echo $team[0]->description; ?>
                         <?php 
                            if ($team[0]->email){
                                echo "
                                <div class='team-details-add text-muted mb-3'>
                                    <div class='team-details-item'>
                                        <div class='float-left mr-3'>
                                            <i class='mdi mdi-email-outline'></i>
                                        </div>
                                        <p class='pt-1'>".$team[0]->email."</p>
                                    </div>
                                </div>
                                ";
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <!-- ACTIVITIES END -->

    <!-- OTHERS WORKERS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-dark">Others Workers</h3>
                    <div class="team-details-border mt-3 mb-4"></div>
                </div>
            </div>

            <div class="row">
            <?php foreach($teams as $teamx):?>
                <?php if($teamx->id !== $team[0]->id): ?> 
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team-box mt-2 mb-4">
                            <div class="team-img">
                                <img src="<?php echo BASE_URL?>uploads/images/team/<?php echo $teamx->file_name; ?>" alt="The <?php echo $team->name; ?> image" class="img-fluid d-block rounded">
                                <div class="our-team-name text-center">
                                    <h6 class="mb-0 text-white"><?php echo $teamx->name; ?></h6>
                                </div>
                            </div>
                            <div class="our-team-overlay">
                                <div class="item-content text-white text-center p-2">
                                    <div class="item-desc">
                                    <a href="<?php echo $teamx->id; ?>">  <h5 class="text-white mb-0"><?php echo $teamx->name; ?></h5>
                                        <p class="mb-0 text-white-70"><?php echo $teamx->position; ?></p></a>
                                        <div class="our-team-box-border mt-3 mb-3"></div>
                                        <ul class="list-inline mb-0">
                                            <?php 
                                                if ($teamx->facebook){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$teamx->facebook.' class='our-team-icons'>
                                                            <i class='mdi mdi-facebook'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                            <?php 
                                                if ($teamx->twitter){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$teamx->twitter.' class='our-team-icons'>
                                                            <i class='mdi mdi-twitter'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                            <?php 
                                                if ($teamx->twitter){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$teamx->instagram.' class='our-team-icons'>
                                                            <i class='mdi mdi-instagram'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                            <?php 
                                                if ($teamx->twitter){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$teamx->whatsapp.' class='our-team-icons'>
                                                            <i class='mdi mdi-whatsapp'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>  
            <?php endforeach;?>  
            </div>
        </div>
    </section>
    <!-- OTHERS WORKERS END -->