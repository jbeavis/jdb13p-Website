<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log</title>
        
        <link href="style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id = 'index'>
        <div id="content">
            <h2 style="text-align: center;">Log</h2>
            <div id="links">
                <p><a href ="index.html">>home</a>&nbsp;&nbsp;&nbsp;<a href="about.html">>about</a>&nbsp;&nbsp;&nbsp;<a href="gallery.html">>gallery</a>&nbsp;&nbsp;&nbsp;<a href="writing.html">>writing</a>&nbsp;&nbsp;&nbsp;<a href="log.html">>log</a>&nbsp;&nbsp;&nbsp;<a href="bonus.html">>bonus</a></p>
            </div>
            <div id="main">
                <?php
                    $dirname = "";
                    $logs = glob($dirname."*.txt");
                    foreach($logs as $log) {
                        $count = 0;
                        foreach(file($log) as $line) {
                            if($count == 0){
                                echo "<h1> $line </h1>";
                                $count = $count +1;
                            }
                            else{
                                echo $line;
                            }
                            echo "<br>";
                        }
                        echo "<br><hr>";
                    }
                ?>
                <h3>23/01/24</h3>
                <p>I've added some photos to the gallery. I also took some photos out of the gallery. Which will be added in at a later date!! <br> I'm learning a lot on my work placement. Which is great, but it also makes me feel like this website could use a MAJOR refactor.</p>
                <hr>
                <h3>10/09/23</h3>
                <p>It's been a while! First of all... I'm still not happy with how this site looks lol. It's a little bit ugly. I also want to make an entrance page, but not right now bc that'd mean changing all links that reference the current index page. <br>I've officially moved to the town where I'm going to do my work placement. Idk how I feel about it just yet. </p>
                <hr>
                <h3>22/06/23</h3>
                <p>I've redesigned the site! I didn't like the side bar, or the way I was using Tumblr to host my photos, (or the way I wrote everything in lowercase...) so I made this instead. It looks pretty similar, I used the same colours and fonts, but it was made mostly from scratch. I've been very bored since uni ended and I went home to my family haha... I'll see if I can find a way to host my old logs here somewhere.</p>
                <hr>
            </div>
        </div>
    </body>
</html>
