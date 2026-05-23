<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}

require('./Includes/Database/projectsDB.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;
$projects = [];
$language = '';

if ($category !== null):
    //I could have done this with an array of categories and a loop, same as route.php, to check if the category exists in my array, but I wanted to use a switch case.
    switch($category) {
        case 'htmlcss':
            $language = 'HTML & CSS';
            $projects = $htmlcss;
            break;
        case 'javascript':
            $language = 'JavaScript';
            $projects = $javascript;
            break;
        case 'python':
            $language = 'Python';
            $projects = $python;
            break;
        case 'react':
            $language = 'React';
            $projects = $react;
            break;
        case 'php':
            $language = 'PHP';
            $projects = $php;
            break;
        case 'swift':
            $language = 'Swift';
            $projects = $swift;
            break;
        default:
            http_response_code(404);
            header('Location: ./index?route=error404.php');
            exit();
    }
    if(count($projects) > 0):
?>
<section class="projects-section">
    <h1>Projects in <?=$language?></h1>
    <div class="projects-wrapper">
        <!-- Previous button -->
        <button class="nav-btn prev-btn" aria-label="Previous">‹</button>
        <div class="carousel-container">
            <!-- Loop through each project in $projects -->
            <?php foreach($projects as $project): ?>
                <div class="item">
                    <div class="images-carousel">
                        <div class="images-track">
                            <!-- Loop through each image in the project's image array -->
                            <?php foreach($project->getImage() as $image): ?>
                                <img src="<?=$image['path']; ?>" alt="<?=$image['alt']; ?>">
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <h2><?=$project->getTitle(); ?></h2>
                    <p><?=$project->getDescription(); ?></p>
                    <?php if($project->getUrl() !== null): ?>
                        <div class="btn-field">
                            <a href="<?=$project->getUrl(); ?>" target="_blank" class="btn">View on Github</a>
                            <?php if($project->getUrlOnline() !== null): ?>
                                <a href="<?=$project->getUrlOnline(); ?>" target="_blank" class="btn">View Online</a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <a href=""></a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Next button -->
        <button class="nav-btn next-btn" aria-label="Next">›</button>                    
    </div>
</section>
<?php else:?>
    <section class="projects-section">
        <h1>No projects found in <?=$language?></h1>
        <p>Sorry, there are no projects available in this category at the moment. Please check back later.</p>
        <a href="?route=projects" class="btn">Go back</a>
    </section>
<?php endif; ?>
<?php      
else: 
    http_response_code(404);
    header('Location: ./index?route=error404.php');
endif;
?>