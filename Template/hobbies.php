<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}

require('./Includes/Database/hobbiesDB.php');

?>
<section class="hobbies-section">
    <h1>Hobbies</h1>
    <div class="hobbies-wrapper">
        <!-- Previous button -->
        <button class="nav-btn prev-btn" aria-label="Previous">‹</button>
        <div class="carousel-container">
            <!-- Loop through each hobby in $hobbies -->
            <?php foreach($hobbies as $hobby): ?>
                <div class="item">
                    <div class="images-carousel">
                        <div class="images-track">
                            <!-- Loop through each image in the hobby's image array -->
                            <?php foreach($hobby->getImage() as $image): ?>
                                <img src="<?=$image['path']; ?>" alt="<?=$image['alt']; ?>">
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <h2><?=$hobby->getTitle(); ?></h2>
                    <p><?=$hobby->getDescription(); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Next button -->
        <button class="nav-btn next-btn" aria-label="Next">›</button>                    
    </div>
</section>