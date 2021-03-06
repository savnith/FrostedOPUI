<?php include dirname(__FILE__) . "/../../config.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title><?php echo $pageTitle ?></title>
        <link rel="icon" href="<?php echo $pageIcon ?>" />
        <meta property="og:title" content="<?php echo $metaTitle ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo $metaIcon ?>" />
        <meta property="og:description" content="<?php echo $metaDesc ?>"/>
    </head>
    <body>
        <div style="height: 100%; width: 100%;">
            <div onclick="window.location.href = 'http://mc.frostedop.net:4040/bans'" class="linkcontainer" id="schematics">
                <h1>Temp Bans</h1>
                View all the tempbans on FrostedOP (Admins Only).
                <span class="fa fa-gavel"></span>
            </div>
            <div onclick="window.location.href = 'http://mc.frostedop.net:4040/permbans'" class="linkcontainer" id="adminworlds">
                <h1>Permbans</h1>
                View all the players that are permbanned from the server.
                <span class="fa fa-ban"></span>
            </div>
        </div>
    </body>
</html>