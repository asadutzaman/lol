<?php

$agent_request = $_GET['agent_request'];
header('Location:pathsetting2.php?agent_request='.$agent_request);
echo $agent_request;
?>