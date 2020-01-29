<!DOCTYPE html>
<html id="about">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Will Garrett</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="row header">
        <a href="#about">About</a>
        <a href="#experience">Experience</a>
        <a href="#projects">Projects</a>
        <a href="/tutoring">Tutoring</a>
    </div>

    <div class="main">
        <div class="row about">
            <div>
                <img src="img/me.png" class="image">
            </div>
            <div class="column bio">
                <h2>My name is Will Garrett</h2>
                <p>
                    In November of 2012, I wrote my first program in Java. Aside from some simple programming in a minecraft mod called <a href="http://www.computercraft.info/">Computer Craft</a>, this was my first glimpse into the world of programming. While I continued learning Java, I started writing plugins for the Minecraft server mod, <a href="https://bukkit.org/">Bukkit</a>. I initially enjoyed adding on to a game, but quickly found I needed greater challenges.  I previously had heard of a game development competition called <a href="https://ldjam.com/users/bobmandude9889/games">Ludum Dare</a>. Naturally, I joined and created my first game.
                </p>
                <p>
                    From that point on I was obsessed. All I wanted to do was absorb more information about programming, hone my skills and continue creating. I joined a small, local robotics team where I learned Arduino. I eventually wanted to make a website so I began studying HTML, CSS, JavaScript and PHP. Somewhere along the way, Python was thrown in the mix just for fun. Later, I returned to Arduino and realized that C++ was a very useful skill to have, so of course I learned that too. Today, I'm still working to acquire more programming skill, and constantly improve my abilities.    
                </p>
            </div>
        </div>

        <h1 class="sect_title" id="experience">Experience</h1>

        <div class="row experience">
            <a>
                <img src="img/logos/android.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/arduino.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/c.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/cpp.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/css.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/html.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/java.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/javascript.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/jquery.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/nodejs.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/ph.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/python.png" class="experience_logo">
            </a>
            <a>
                <img src="img/logos/sql.png" class="experience_logo">
            </a>
        </div>

        <h1 class="sect_title" id="projects">Projects</h1>

        <div class="grid">
            <?php
                require_once('sql.php');
                $server = "localhost";
                $user = $GLOBALS['sql_user'];
                $pass = $GLOBALS['sql_pass'];
                $db = "zerentha_willgarrett";

                $conn = new mysqli($server, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $stmt = $conn->prepare("SELECT * FROM projects");
                $stmt->execute();
                $results = $stmt->get_result();

                if ($results->num_rows > 0) {
                    while($row = $results->fetch_assoc()) {
                        ?>
                        <div class="card_container">
                            <a href="<?=$row['Link']?>">
                                <div class="card">
                                    <div class="card_image">
                                        <img src="<?=$row['Image']?>">
                                    </div>
                                    <div class="card_title">
                                        <?=$row['Name']?> &#8226; <?=$row['Language']?> &#8226; <?=$row['Year']?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <!-- Will Garrett
    Github link
    Email

    About
    
    Experience -->
</body>
</html>