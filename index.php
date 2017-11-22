<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title><?php echo $pageTitle ?></title>
        <link rel="icon" href="<?php echo $pageIcon ?>" />
        <meta property="og:title" content="<?php echo $metaTitle ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo $metaIcon ?>" />
        <meta property="og:description" content="<?php echo $metaDesc ?>"/>
    </head>
    <body><div style="height: 100%; width: 100%;">
            <div onclick="window.location.href = '<?php echo $containerOneLink ?>'" class="linkcontainer" id="forums">
                <h1><?php echo $containerOne ?></h1>
                <?php echo $containerOneDesc ?>
                <span class="<?php echo $containerOneImage ?>"></span>
            </div>
            <div onclick="window.location.href = '<?php echo $containerTwoLink ?>'" class="linkcontainer" id="logviewer">
                <h1><?php echo $containerTwo ?></h1>
                <?php echo $containerTwoDesc ?>
                <span class="<?php echo $containerOneImage ?>"></span>
            </div>
            <div onclick="window.location.href = '<?php echo $containerThreeLink ?>'" class="linkcontainer" id="httpd">
                <h1><?php echo $containerThree ?></h1>
                <?php echo $containerThreeDesc ?>
                <span class="<?php echo $containerThreeImage ?>"></span>
            </div>
        </div>
    </body>
</html>