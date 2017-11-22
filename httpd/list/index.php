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
            <div onclick="window.location.href = 'http://mc.frostedop.net:4040/list'" class="linkcontainer" id="schematics">
                <h1>List</h1>
                See all the players currently on the server.
                <span class="fa fa-user"></span>
            </div>
            <div onclick="window.location.href = 'http://mc.frostedop.net:4040/staff'" class="linkcontainer" id="adminworlds">
                <h1>Staff Members</h1>
                Shows all the admins on the FrostedOP server.
                <span class="fa fa-user"/>
            </div>
        </div>
    </body>
</html>