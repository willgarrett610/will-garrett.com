<?php
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}
?>

<!DOCTYPE html>
<html id="about">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Will Garrett</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <script src="/js/main.js"></script>
</head>
<body>
    <div class="row header">
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
    </div>

    <div class="main">
        <div class="row about">
            <!-- <div>
                <img src="img/me.png" class="image">
            </div> -->
            <div class="column bio" style="text-align: center">
                <h2>My name is Will Garrett</h2>
                <p>
                I started learning how to program in 2012 when I was 13. I've learned a lot since then, and I'm currently studying computer science while starting my private tutoring service.
                </p>
            </div>
        </div>

        <h1 class="sect_title" id="projects">Projects</h1>

        <div class="grid" id="project_list">
            <div style="display: flex; flex-direction: row; justify-content: center;">
                <img style="width: 80px; height: 80px;" src="img/projects_loading.gif">
            </div>
        </div>
    </div>
    <!-- Will Garrett
    Github link
    Email

    About
    
    Experience -->
</body>
</html>