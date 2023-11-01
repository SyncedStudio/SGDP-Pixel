<?php

// Sample function to check if a user is a moderator
function isModerator($username) {
    $moderators = array("Ewan", "Seth", "PolandZ", "Lachlan");

    return in_array($username, $moderators);
}

// Sample function to perform moderation action
function performModerationAction($action, $username) {
    // Logic for moderation actions (e.g., banning, warning)
    // This is just a placeholder; replace it with your actual logic

    echo "<p>$action performed on user: $username</p>";
}

?>
