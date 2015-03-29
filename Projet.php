<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Projet Personnel d’Orientation(PPO)</title>
		<!--Seo-->
		<meta charset="UTF-8">
		<meta name="author" content="Antoine Boucher">
		<meta name="description" content="Antoine Boucher Projet">
		<meta name="application-name"content="Antoine Boucher Website">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
                             <!--Jquery-->

        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

        
    </head>
<body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Javascript -->

        
        
        
        

        <!-- Add your site or application content here -->
        <!-- Fixed navbar -->

        <!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          </button>
          
          <a id="navbar-brand" class="navbar-brand" href="#"><img src="/img/ppo-trans-4.png" alt="<ppo/>"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
           <ul class="nav navbar-nav navbar-right">
			<li ><a href="Home.html">Home</a></li>
            <li><a href="Projet.php">Projet</a></li>
            <li><a href="About.html">About</a></li>      
          </ul>
        </div>
      </div>
    </nav>
    <br/>
    <br/>
    <br/>
    <br/>

    <input id="queryinput" autocomplete="off" type="text" placeholder="Search">
    <div id="searchresult">
  
<script>
$(document).ready(function(){
$('#queryinput').on('input', function() {
$.ajax({
type: 'GET',
url: 'search.php',
data: 'keywords=' + $('#queryinput').val(),
success: function(msg){
$('#searchresult').html(msg);
}


});
});
});
</script>
</div>
