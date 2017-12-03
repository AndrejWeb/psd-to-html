<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSD to HTML</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="icon" href="images/html.png">
</head>

<body id="main">
<div class="container" id="portfolio-content">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3>PSD to HTML</h3></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h4>PSD</h4>
                    <a href="psd.psd">Download PSD file</a> (5 MB)
                    <br /><br /><br />
                    <div class="row">
                        <div class="col-md-4"><a href="images/psd_1.png" data-lightbox="psd" data-title="PSD"><img src="images/psd_1.png" class="psd" alt="PSD" title="PSD" /></a></div>
                        <div class="col-md-4"><a href="images/psd_2.png" data-lightbox="psd" data-title="PSD"><img src="images/psd_2.png" class="psd" alt="PSD" title="PSD" /></a></div>
                        <div class="col-md-4"><a href="images/psd_3.png" data-lightbox="psd" data-title="PSD"><img src="images/psd_3.png" class="psd" alt="PSD" title="PSD" /></a></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4>HTML</h4>
                    <a href="html.html" target="_blank">Open HTML in another tab</a><br />Direct URL: <a href="html.html" target="_blank">
                        http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>/html.html</a>
                    <br /><br />
                    <div class="row">
                        <div class="col-md-4"><a href="images/html_1.png" data-lightbox="html" data-title="HTML"><img src="images/html_1.png" class="html" alt="PSD" title="PSD" /></a></div>
                        <div class="col-md-4"><a href="images/html_2.png" data-lightbox="html" data-title="HTML"><img src="images/html_2.png" class="html" alt="PSD" title="PSD" /></a></div>
                        <div class="col-md-4"><a href="images/html_3.png" data-lightbox="html" data-title="HTML"><img src="images/html_3.png" class="html" alt="PSD" title="PSD" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/lightbox.js"></script>
</body>
</html>