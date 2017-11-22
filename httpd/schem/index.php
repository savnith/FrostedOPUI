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
            <div onclick="window.location.href = 'http://mc.frostedop.net:4040/schematic/list/'" class="linkcontainer" id="schematics">
                <h1>Download & View Schematics</h1>
                You can download and view all the schematics on the FrostedOP server.
                <span class="fa fa-archive"></span>
            </div>
            <div onclick="window.location.href = 'http://mc.frostedop.net:4040/schematic/upload/'" class="linkcontainer" id="adminworlds">
                <h1>Upload Schematics</h1>
                Upload schematics to be pasted in on the server (Admins Only)
                <span class="fa fa-cloud-upload"></span>
            </div>
        </div>
    </body>
</html>