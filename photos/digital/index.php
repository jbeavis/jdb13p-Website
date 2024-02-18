<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Digital</title>
        <link href="../../style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id = 'gallery'>
        <div id="content">
            <h2 style="text-align: center;">Digital</h2>
            <div id="links">
                <p><a href ="../../index.html">>home</a>&nbsp;&nbsp;&nbsp;<a href="../../about.html">>about</a>&nbsp;&nbsp;&nbsp;<a href="../../gallery.html">>gallery</a>&nbsp;&nbsp;&nbsp;<a href="../../writing.html">>writing</a>&nbsp;&nbsp;&nbsp;<a href="../../log.html">>log</a>&nbsp;&nbsp;&nbsp;<a href="../../bonus.html">>bonus</a></p>
            </div>
            <div id="main">
                <p>These photos were all taken on my <b>Nikon D3500</b> that I got for my 16th birthday! I've been using since 2019 maybe? And some of these photos are from that year. Presented in mostly chronological order but no promises. Hover to enlarge.</p>
                <?php 
                    $dirname = "photos/digital/";
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
