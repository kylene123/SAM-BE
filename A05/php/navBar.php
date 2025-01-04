<?php
include('php/personality.php');

$theme = "A9A9A9";
$currentFile = basename($_SERVER['PHP_SELF']);

foreach ($personalities as $personality) {
    if (
        ($currentFile == "Island1.php" && $personality[1] == "Island1") ||
        ($currentFile == "Island2.php" && $personality[1] == "Island2") ||
        ($currentFile == "Island3.php" && $personality[1] == "Island3") ||
        ($currentFile == "Island4.php" && $personality[1] == "Island4")
    ) {
        $theme = $personality[4];
        executeQuery("UPDATE islandsofpersonality SET status = 'active' WHERE islandOfPersonalityID = " . $personality[0]);
    } else {
        executeQuery("UPDATE islandsofpersonality SET status = 'inactive' WHERE islandOfPersonalityID = " . $personality[0]);
    }
}
?>



<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-card w3-left-align w3-large" style="background-color: #<?php echo $theme ?>">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-dark-gray"
            href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
        <a href="Island1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Island 1</a>
        <a href="Island2.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Island 2</a>
        <a href="Island3.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
             Island 3</a>
        <a href="Island4.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">
            Island 4</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="Personality1.php" class="w3-bar-item w3-button w3-padding-large">Island 1</a>
        <a href="Personality2.php" class="w3-bar-item w3-button w3-padding-large">Island 2</a>
        <a href="Personality3.php" class="w3-bar-item w3-button w3-padding-large">Island 3</a>
        <a href="Personality4.php" class="w3-bar-item w3-button w3-padding-large">Island 4</a>
    </div>
</div>



<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>