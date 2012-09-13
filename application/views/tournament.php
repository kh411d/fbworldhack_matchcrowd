<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml"> 
<head prefix="og: http://ogp.me/ns# matchcrowd:tournament 
                  http://ogp.me/ns/apps/matchcrowd#">
	<meta charset="utf-8">
	<title>Match Crowd</title>

	<style type="text/css">
	</style>

  <meta property="fb:app_id" content="<?php echo $this->config->item('facebook_application_id');?>" /> 
  <meta property="og:type" content="matchcrowd:tournament" /> 
  <meta property="og:title" content="<?php echo $tour_id;?> Tournament" /> 
  <meta property="og:image" content="<?php echo base_url(); ?>/assets/logo.jpg" /> 
  <meta property="og:description" content="The Turducken of Cookies" /> 
  <meta property="og:url" content="<?php echo current_url(); ?>" />
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<a href="<?php echo site_url('tournament/push');?>">Create Tournament!!</a><br />
		
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>
</div>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $this->config->item('facebook_application_id');?>', // App ID
      channelUrl : '<?php echo current_url();?>', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
</body>
</html>
