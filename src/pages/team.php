
    <!-- OUR TEAM HOME START -->
    <section class="our-team-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Our Team</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="home" class="text-white">Home</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="team.html" class="text-custom">Our Team</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR TEAM HOME END -->

    <!-- OUR TEAM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <?php foreach($teams as $team):?>
                    <div class="col-lg-3 col-md-6">
                        <div class="our-team-box mt-2 mb-4">
                            <div class="team-img">
                                <img src="<?php echo BASE_URL?>uploads/images/team/<?php echo $team->file_name; ?>" alt="The <?php echo $team->name; ?> image" class="img-fluid d-block rounded">
                                <div class="our-team-name text-center">
                                    <h6 class="mb-0 text-white"><?php echo $team->name; ?></h6>
                                </div>
                            </div>
                            <div class="our-team-overlay">
                                <div class="item-content text-white text-center p-2">
                                    <div class="item-desc">
                                    <a href="/<?php echo $team->id; ?>">  <h5 class="text-white mb-0"><?php echo $team->name; ?></h5>
                                        <p class="mb-0 text-white-70"><?php echo $team->position; ?></p></a>
                                        <div class="our-team-box-border mt-3 mb-3"></div>
                                        <ul class="list-inline mb-0">
                                            <?php 
                                                if ($team->facebook){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$team->facebook.' class='our-team-icons'>
                                                            <i class='mdi mdi-facebook'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                            <?php 
                                                if ($team->twitter){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$team->twitter.' class='our-team-icons'>
                                                            <i class='mdi mdi-twitter'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                            <?php 
                                                if ($team->twitter){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$team->instagram.' class='our-team-icons'>
                                                            <i class='mdi mdi-instagram'>
                                                            </i>
                                                        </a>
                                                    </li>
                                                    ";
                                                } 
                                            ?>
                                            <?php 
                                                if ($team->twitter){
                                                    echo "
                                                    <li class='list-inline-item m-0'>
                                                        <a href='.$team->whatsapp.' class='our-team-icons'>
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
                <?php endforeach;?>  
            </div>
        </div>
    </section>
    <!-- OUR TEAM END -->