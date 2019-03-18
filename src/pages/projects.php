
    <!-- OUR PROJECT HOME START -->
    <section class="our-project-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Our Gallery</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="home" class="text-white">Home</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="projects.php" class="text-custom">Our Gallery</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PROJECT HOME END -->

    <!-- PROJECT START -->
    <section class="section">
        <div class="container">
            <div class="row mt-3 mb-3">
                <ul class="col container-filter categories-filter list-unstyled text-center mb-0" id="filter">
                    <li><a class="categories active" data-filter="*">All</a></li>
                    <li><a class="categories" data-filter=".branding">BRANDING</a></li>
                    <li><a class="categories" data-filter=".activations">ACTIVATIONS</a></li>
                    <li><a class="categories" data-filter=".design">DESIGNING</a></li>
                    <li><a class="categories" data-filter=".events">EVENTS</a></li>
                </ul>
            </div>

            <!-- Gallary -->
            <div class="row projects-wrapper">
            	<?php foreach($projects as $project):?>
                <?php 
                    if($project->files){
                        $files = explode(SEPARATOR, $project->files);
                        $filesData = null ;
                        $url = array();
                        unset($urls);
                        foreach($files as $file){
                            $url =  BASE_URL . "uploads/images/project/".$file;
                            $urls[] = $url;
                            $filesData .= "<a class='$project->id' href='$url' title='$project->title'> </a>";
                        }
                    }
                ?>
                <div class="col-lg-4 col-md-6 spacing <?php echo $project->category; ?>">
                    <div class="item-box">
                        <span class="show_album_images" id="<?php echo $project->id; ?>" style="cursor: pointer" title="<?php echo $project->title; ?>">
                            <img class="item-container img-fluid mx-auto" src="<?php echo $urls[0] ?>" alt="<?php echo $project->id; ?>" />
                            <div class="item-mask our-Project">
                                <div class="item-caption text-white text-center">
                                    <div class="project-content p-4">
										<?php echo $project->description; ?>
                                    </div>
                                </div>
                            </div>
                            <?php echo $filesData; ?>
                        </span>
                    </div>
                </div>

                <?php endforeach;?>  
            </div>
        </div>
    </section>
    <!-- PROJECT END -->

    <!-- CTA START -->
    <section class="section-sm bg-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-white">
                    <h4 class="mb-3">We unlock the Adventure, Passion, Growth, Passion, Magic, Audacity in brands</h4>
                    
                </div>

                <div class="col-md-4 text-center">
                    <a href="#" class="btn btn-light">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA END -->