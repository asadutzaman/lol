<?php
    include('dbConfig.php');
    require('license.php');
    $district = $_POST['district'];
    $areas = $db->query("SELECT area FROM location WHERE district='$district' GROUP BY area")->fetchAll(PDO::FETCH_ASSOC);
    echo '<select class="form-control" name="area" required>';
    echo '<option value="">Select Area</option>';
    foreach($areas as $area){
        echo '<option>'.$area['area'].'</option>';    
    }
    echo '</select>';

?>