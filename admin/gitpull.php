<?php

// Change this to the path of your Git repository
$repoPath = '.';

// Execute the git pull command
$output = shell_exec("cd $repoPath && git pull");

// Output the result of the git pull command
echo "<pre>$output</pre>";

?>