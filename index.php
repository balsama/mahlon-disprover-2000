<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Mahlon Disprover 2000 | trexx.xxx</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <?php include('pattern.inc'); ?>
  </head>
  <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          Mahlon Disprover 2000
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Mahlon Disprover 2000</h1>
        <h3>One, One Two, One Two Three, One Two...</h3>
        <p>Mahlon says that if two people play the above rythm and one person sneaks an extra beat in, they will eventually "come around". Hah!</p>
        <p>Use the form below to test his theory. Red borders signify the start of each pattern iteration. Use your mouse or touchscreen to scroll.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Select your patterns:</h2>
          <form method="post" action="#result">
            <div class="form-group">
              <label for="pattern-1">Pattern 1</label>
              <select name="pattern-1" id="pattern-1">
                <option value="1">|, ||, |||, || - (normal)</option>
                <option value="2">Add one extra beat</option>
                <option value="3">Add one extra beat every time</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pattern-2">Pattern 2</label>
              <select name="pattern-2" id="pattern-2">
                <option value="1">|, ||, |||, || - (normal)</option>
                <option value="2">Add one extra beat</option>
                <option value="3">Add one extra beat every time</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Show me the Patterns!</button>
          </form>
        </div>
        <div class="col-sm-8">
          <h2 name="result" id="result">Result:</h2>
          <?php if (isset($_POST['pattern-1'])) : ?>
          <div class="pattern-container-outer">
            <?php
            echo generate_pattern($_POST['pattern-1']);
            echo generate_pattern($_POST['pattern-2']);
            ?>
          </div>
          <button type="button" class="btn btn-warning" id="pause-scroll">Pause Scrolling</button>
          <button type="button" class="btn btn-success" id="start-scroll">Start Scrolling</button>
          <?php else : ?>
          <p>Select your patterns and click on the button to generate.</p>
          <?php endif; ?>
        </div>
      </div> <!-- /.row -->
      <hr />
      <div class="well">
        <h3>tl;dr</h3>
        <ul class="lead">
          <li>Adding a single beat just causes the two patterns to be out of phase. They will never synch up.</li>
          <li>Adding an extra beat to each iteration will result in the patterns synching every 8/7 iterations. (8 iterations of the normal pattern = 7 iterations of the pattern with one extra beat added.)</li>
        </ul>
      </div> <!-- /.well -->

      <hr>

      <footer>
        <p></p>
      </footer>
    </div> <!-- /.container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vendor/jquery.marquee.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29982014-3', 't-rexx.xxx');
      ga('send', 'pageview');
    </script>
  </body>
</html>
