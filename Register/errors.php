<?php
$error = array();

if (count($error) > 0) { ?>
    <div class="error">
        <?php foreach ($errors as $error) {
            echo '<p> $error </p>';
        } ?>
    </div>
<?php } ?>