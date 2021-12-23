<?php
require_once 'functions.php';
include('header.php');
?>


<main class="main">
    <section class="bike-sale section container" id="bike-sale">
        <h2 class="section_title">Buy new BIke</h2>
        <div class="bike_container grid">
        <?php get_all_data() ?>
        </div>
    </section>
</main>

<?php
include('footer.php');
?>
