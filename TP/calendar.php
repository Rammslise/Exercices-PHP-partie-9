<?php
$month = $_GET['month'];
$year = $_GET['year'];
include('function.php');
?>
<h1 style="text-align: center;"> <?= display_month_in_letter($month) . ' ' . $year ?> </h1>
<div>
    <?php
    calendar($month, $year);
    ?>
</div>