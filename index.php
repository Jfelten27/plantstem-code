<!DOCTYPE html>
<html>
    <head>
        <title>PlantStem - Home</title>
        <link rel="stylesheet" href="/assets/css/discordinvite.css">
        <?php include "htmlhead.php" ?>
    </head>
    <body class="bg-green">
        <?php include "navbar.php" ?>
        <div class="w3-container-flex w3-center">
            <div class="w3-container">
                <div class="w3-row">
                    <h1 class="w3-col l12">Welcome</h1>
                </div>
                <img src="/assets/img/logo.svg" alt="PlantStem" style="width: 33%; margin-bottom: 30px;">
                <div class="w3-row">
                    <a href="#" class="w3-round-xxlarge bg-yellow w3-button home-button">Get Started</a>
                    <a href="#about" class="w3-round-xxlarge bg-yellow w3-button home-button">About Us   </a>
                </div>
            </div>
            <br>
            <h1 style="margin-bottom: 0px;" id="about" class="bg-white">Our Mission</h1>
            <div class="w3-container-flex w3-row">
                <div class="w3-half bg-dark-green" style="font-size: 16pt;">
                    <p class="w3-left">At PlantSTEM we want to bring out the brightest in our students. We strive to teach them the concepts that they are going to use in their journey to reach the skies. We plant curiosity and provide water to quench the student’s thirst for knowledge. At PlantSTEM we are committed to teach anyone, regardless of their backgrounds.</p>
                </div>
                <!-- TODO: make img resize to fit paragraph size -->
                <img src="/assets/img/pencil.jpeg" alt="" class="w3-half w3-center" style="height:min-content;">
            </div>
            <h1 class="bg-white" style="margin-top: 0px;">Contact Us</h1>
            <br>
            <div class="w3-row w3-container">
                <div class="w3-half">
                    <h1>Discord</h1>
                    <div id="discordInviteBox"></div>
                </div>
            </div>
        </div>
        <script src="/assets/js/discordinvite.js"></script>
        <script>
            discordInvite.init({
                inviteCode: 'vPdvx5nzYZ',
            });
            discordInvite.render();
        </script>
    </body>
</html>