<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}

require('./Includes/Database/projectsDB.php');
?>

<section class="projects-section">
    <h1>Projects</h1>
    <div class="projects-categories">
        <!-- I send by URL the category, then I catch(GET) it in projectsByCategory.php and do a Switch/Case to display the correct projects -->
        <a href="./index.php?route=projectsByCategory&category=htmlcss" class="btn">HTML & CSS<span class="project-count"><?=count($htmlcss)?></span></a>
        <a href="./index.php?route=projectsByCategory&category=php" class="btn">PHP<span class="project-count"><?=count($php)?></span></a>
        <a href="./index.php?route=projectsByCategory&category=swift" class="btn">Swift / Swift UI<span class="project-count"><?=count($swift)?></span></a>
        <a href="./index.php?route=projectsByCategory&category=python" class="btn">Python<span class="project-count"><?=count($python)?></span></a>
        <a href="./index.php?route=projectsByCategory&category=javascript" class="btn">JavaScript<span class="project-count"><?=count($javascript)?></span></a>
        <a href="./index.php?route=projectsByCategory&category=react" class="btn">React<span class="project-count"><?=count($react)?></span></a>
    </div>
</section>

<!-- FOR ME : Don't forget to use URL to select projects depending on the category ./projectsByCategory.php?category=[...] -->