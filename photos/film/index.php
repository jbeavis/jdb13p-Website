<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Film</title>
        <link href="../../style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id = 'gallery'>
        <div id="content">
            <h2 style="text-align: center;">Film</h2>
            <div id="links">
                <p><a href ="../../index.html">>home</a>&nbsp;&nbsp;&nbsp;<a href="../../about.html">>about</a>&nbsp;&nbsp;&nbsp;<a href="../../gallery.html">>gallery</a>&nbsp;&nbsp;&nbsp;<a href="../../writing.html">>writing</a>&nbsp;&nbsp;&nbsp;<a href="../../log.html">>log</a>&nbsp;&nbsp;&nbsp;<a href="../../bonus.html">>bonus</a></p>
            </div>
            <div id="main">
                <p>These photos were taken on my late Grandfather's <b>Nikon f601.</b> It's not the most spectacular camera but I like using it knowing my Dad and his Dad used it too. Some of these are my favourites I've taken, although it helps that I took them most recently. I enjoy that I have to think carefully before I shoot. Hover to enlarge.</p>
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
