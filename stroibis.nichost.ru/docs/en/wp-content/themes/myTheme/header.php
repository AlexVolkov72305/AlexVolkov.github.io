<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fasovkin</title>

<!-- Bootstrap -->
<link href="<?= get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
<link href="<?= get_template_directory_uri();?>/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php echo wp_head(); ?>
</head>
<body>
<div id="top"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i> </span> </div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="contact" action="../mail.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Request a call back</h4>
        </div>
        <div class="modal-body">
          <div class="form_box">
            <div id="note"></div>
            <div id="fields">
              <input type="hidden" name="sub" value="New message">
              <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Name">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> </div>
              <div class="form-group has-feedback">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn_submit disabled btn-primary" value="Send" />
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-inline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="ok"> <img src="<?= get_template_directory_uri();?>/img/ok.png">
          <p class="good">Your request has been sent</p>
          <p>It will be reviewed within three working days, and then our manager will contact you.</p>
          <button type="button" class="reason-btn" data-dismiss="modal">Thank you</button>
        </div>
      </div>
    </div>
  </div>
</div>
<header class="header-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-2 logo"> <a href="http://stroibis.nichost.ru/" class="lang-icon" title="RUS"><img src="http://stroibis.nichost.ru/en/wp-content/themes/myTheme/img/rus.png" /></a> <a href="http://stroibis.nichost.ru/en/" class="lang-icon" title="ENG"><img src="http://stroibis.nichost.ru/en/wp-content/themes/myTheme/img/eng.png" /></a> <a href="<?=home_url();?>">Fasovkin.ru</a> </div>
      <div class="col-md-5 navbar">
        <?if (is_page(6)){?>
        <nav class="main-nav">
          <ul class="list-unstyled">
            <li><a href="#f1">SERVICES</a></li>
            <li><a href="#f2">ORDER A PACKAGING</a></li>
            <li><a href="#f3">CONTACTS</a></li>
          </ul>
        </nav>
        <?}else{?>
        <nav>
          <ul class="list-unstyled">
            <li><a href="<?=home_url();?>#f1">SERVICES</a></li>
            <li><a href="<?=home_url();?>#f2">ORDER A PACKAGING</a></li>
            <li><a href="<?=home_url();?>#f3">CONTACTS</a></li>
          </ul>
        </nav>
        <?}?>
      </div>
      <div class="col-md-3 phone"> <a href="tel:+74956486904">+7 (495) 648-69-04</a> </div>
      <div class="col-md-2 white-btn-box"> <a href="#" class="white-btn" data-toggle="modal" data-target="#myModal">Request a call back</a> </div>
    </div>
    <?if (is_page(6)){?>
    <div class="row title">
      <div class="col-md-6">
        <p>We pack all kinds of goods,</p>
        <p>We use modern equipment and perform an order in a short time</p>
        <div class="separator"></div>
      </div>
    </div>
    <div class="row descr">
      <div class="col-md-4">
        <p>We provide services for crushing, mixing, packaging, briquetting, packaging of bulk products for over 10 years. We are an experienced and reliable partner in this area.</p>
      </div>
    </div>
    <?}else{}?>
  </div>
</header>
