<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Phone</title>
        <link href="../../style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id = 'gallery'>
        <div id="content">
            <h2 style="text-align: center;">Phone</h2>
            <div id="links">
                <p><a href ="../../index.html">>home</a>&nbsp;&nbsp;&nbsp;<a href="../../about.html">>about</a>&nbsp;&nbsp;&nbsp;<a href="../../gallery.html">>gallery</a>&nbsp;&nbsp;&nbsp;<a href="../../writing.html">>writing</a>&nbsp;&nbsp;&nbsp;<a href="../../log.html">>log</a>&nbsp;&nbsp;&nbsp;<a href="../../bonus.html">>bonus</a></p>
            </div>
            <div id="main">
                <p>These are all photos I've taken on my mobile phone over the years. I currently use a <b>Samsung A52.</b> <br>I haven't yet uploaded many photos but I will after I sift through my Google Photos... Hover to enlarge.</p>
                <?php 
                    $dirname = "";
                    $images = glob($dirname."*.{jpg,png,JPG,PNG}", GLOB_BRACE);
                    foreach($images as $image) {
                        echo '<img src="'.$image.'" /><br />';
                    }
                ?>
                <p><a href="../../gallery.html"><-Back</a></p>
            </div>
        </div>
    </body>
</html>
