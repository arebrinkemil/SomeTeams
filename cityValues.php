<?php
require __DIR__ . '/data.php';

$cities = array();

foreach ($teams as $key => $city) {
    if (!in_array($city['city'], $cities)) {
        $cities[] = $city['city'];
    }
};

?>


<section>
    <ul>
        <h2>LIST OF CITIES</h2>
        <?php foreach ($cities as $key => $city) : ?>
            <li><?php echo $city ?></li>
        <?php endforeach ?>
    </ul>
</section>