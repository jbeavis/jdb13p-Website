<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id = 'gallery'>
        <div id="content">
            <h2 style="text-align: center;">Gallery</h2>
            <div id="links">
                <p><a href ="index.html">>home</a>&nbsp;&nbsp;&nbsp;<a href="about.html">>about</a>&nbsp;&nbsp;&nbsp;<a href="gallery.html">>gallery</a>&nbsp;&nbsp;&nbsp;<a href="writing.html">>writing</a>&nbsp;&nbsp;&nbsp;<a href="log.html">>log</a>&nbsp;&nbsp;&nbsp;<a href="bonus.html">>bonus</a></p>
            </div>
            <div id="main">
                <p>hellooo</p>
                <?php 
                    echo "Testing";
                    $dirname = "photos/digital/";
                    $images = glob($dirname."*.{jpg,gif,png}");

                    foreach($images as $image) {
                        echo '<img src="'.$image.'" /><br />';
                    }
                ?>
                <!-- <p><a href="photos/phone/index.html">>photos taken on my phone</a></p> -->
            </div>
        </div>
    </body>
</html>
