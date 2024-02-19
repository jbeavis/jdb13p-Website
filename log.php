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
                    $dirname = "logs/";
                    $logs = glob($dirname."*.txt");
                    foreach(array_reverse($logs) as $log) {
                        $count = 0;
                        foreach(file($log) as $line) {
                            if($count == 0){
                                echo "<h3> $line </h3>";
                                $count = $count +1;
                                echo "<p>";
                            }
                            else{
                                echo $line;
                                echo "<br>";
                            }
                        }
                        echo "</p><hr>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
