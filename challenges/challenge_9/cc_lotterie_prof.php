<?php
// Generate 6 unique random numbers between 1 and 49
$lottery1 = mt_rand(1, 49);

do {
    $lottery2 = mt_rand(1, 49);
} while ($lottery2 == $lottery1);

do {
    $lottery3 = mt_rand(1, 49);
} while ($lottery3 == $lottery1 || $lottery3 == $lottery2);

do {
    $lottery4 = mt_rand(1, 49);
} while ($lottery4 == $lottery1 || $lottery4 == $lottery2 || $lottery4 == $lottery3);

do {
    $lottery5 = mt_rand(1, 49);
} while ($lottery5 == $lottery1 || $lottery5 == $lottery2 || $lottery5 == $lottery3 || $lottery5 == $lottery4);

do {
    $lottery6 = mt_rand(1, 49);
} while ($lottery6 == $lottery1 || $lottery6 == $lottery2 || $lottery6 == $lottery3 || $lottery6 == $lottery4 || $lottery6 == $lottery5);

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Display the generated lottery numbers
    echo "<h3>Lottery numbers are: $lottery1, $lottery2, $lottery3, $lottery4, $lottery5, $lottery6</h3>";

    $user1 = htmlspecialchars($_POST['user1']);
    $user2 = htmlspecialchars($_POST['user2']);
    $user3 = htmlspecialchars($_POST['user3']);
    $user4 = htmlspecialchars($_POST['user4']);
    $user5 = htmlspecialchars($_POST['user5']);
    $user6 = htmlspecialchars($_POST['user6']);

    // Display the user's numbers
    echo "<h3>Your numbers are: $user1, $user2, $user3, $user4, $user5, $user6</h3>";

    // Check how many numbers match
    $match_count = 0;

    // Compare user's numbers with the lottery numbers
    for ($x = 1; $x <= 6; $x++) {
        for ($y = 1; $y <= 6; $y++) {
            if (${"user" . $x} == ${"lottery" . $y}) {
                $match_count++;
            }
        }
    }

    // Display the result
    echo "<h3>You matched $match_count number(s).</h3>";

    // Determine winning conditions
    if ($match_count == 6) {
        echo "<h3>Congratulations! You won the lottery!</h3>";
    } elseif ($match_count >= 3) {
        echo "<h3>Good job! You matched $match_count numbers!</h3>";
    } else {
        echo "<h3>Sorry, you didn't win this time.</h3>";
    }
}
?>

<!-- HTML Form for entering lottery numbers -->
<form action="" method="post">
    Enter your 6 lottery numbers (between 1 and 49):<br>
    <input type="number" name="user1" min="1" max="49" required><br>
    <input type="number" name="user2" min="1" max="49" required><br>
    <input type="number" name="user3" min="1" max="49" required><br>
    <input type="number" name="user4" min="1" max="49" required><br>
    <input type="number" name="user5" min="1" max="49" required><br>
    <input type="number" name="user6" min="1" max="49" required><br>
    <input type="submit" value="Check Lottery">
</form>