<?php require 'header.php'; ?>

<div class="content-area" id="primary">
<div class="row" role="main">
<div class="large-8 columns inner_content"><main class="site-main" id="main" role="main">
<article class="page">
<header class="entry-header">
<h3 class="entry-title">Contact Ninjas for Liberty PAC</h3>
</header>
<!-- .entry-header -->

<div class="entry-content clearfix"><script>
				function initialize() {

				  var firstLocation = new google.maps.LatLng(41.802944,-87.599904);

				  var mapOptions = {
				    zoom: 13,
				    center: firstLocation
				  }
				  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

				  var marker = new google.maps.Marker({
				      position: firstLocation,
				      map: map,
				      animation: google.maps.Animation.DROP,
				      title: 'Legislator Main Office'
				  });

				}

				google.maps.event.addDomListener(window, 'load', initialize);
		    </script>


<hr class="rescue-spacing" />
<div class="contact_details clearfix">
<div class="rescue-column rescue-one-half rescue-column-first rescue-all">
<p style="margin-left:40px;"><strong>Headquarters</strong>:<br />
4474 Allport Cutoff<br />
Morrisdale, PA 16858</p>
</div>
<!-- .rescue-one-half -->

<div class="rescue-column rescue-one-half rescue-column-last rescue-all"><strong>Telephone</strong>: (814) 762-3238<br />

<a href="mailto:contact@ninjasforliberty.com"></a><strong>Email</strong>: contact@ninjasforliberty.com</div>
<!-- .rescue-one-half --></div>
<!-- .contact_details -->

<p style="margin-left:30px;">Ninjas for Liberty is the exemplary grassroots political initiative. We would be enamored to speak with you directly with any enquiries, ranging from volunteer opportunities to monetary support.  </p>


<style>
	.form-group {
		width:90%;
	}
	.contact-form {
		margin-left:30px;
	}
	
</style>
<div style="margin-left:30px;" class="contact_form">
<form action="/template/legislator/contact.php" class="form-horizontal" id="contact-form" method="post" role="form">
<div class="form-group"><label class="col-lg-2 control-label" for="form-name">Name</label> <input class="form-control" id="form-name" name="form-name" placeholder="Name" required="" type="text" /></div>

<div class="form-group"><label class="col-lg-2 control-label" for="form-email">Email</label> <input class="form-control" id="form-email" name="form-email" placeholder="Email" required="" type="email" /></div>

<div class="form-group"><label class="col-lg-2 control-label" for="form-tel">Telephone</label> <input class="form-control" id="form-tel" name="form-tel" placeholder="Telephone" type="tel" /></div>

<div class="form-group"><label class="col-lg-2 control-label" for="form-assunto">Subject</label> <input class="form-control" id="form-assunto" name="form-assunto" placeholder="Subject" required="" type="text" /></div>

<div class="form-group"><label class="col-lg-2 control-label" for="form-mensagem">Message</label><textarea class="form-control" id="form-mensagem" name="form-mensagem" placeholder="Message" required="" rows="3"></textarea></div>

<div class="form-group"><button class="btn btn-default" type="submit">Send</button></div>
</form>
</div>
<!-- .contact_form --></div>
<!-- .entry-content --></article>
<!-- .post --> </main><!-- #main --></div>
<!-- .inner_content .large-7 -->

<div class="large-4 columns inner_sidebar">
<aside class="widget clearfix widget_rescue_about_plugin" id="rescue_about_plugin-2">
<div class="widget-text rescue_about_wrap clearfix">
<div class="widget-text rescue_about_content clearfix">
<h4 class="widget-title">Meet Austin Petersen</h4>
<img alt="Candidate" class="alignleft" src="ap.jpg" /> <span class="rescue_text">Austin Petersen is a Presidential Contender for the Libertarian Party. He embodies each and every one of our principles and is espousing them on a national platform. <a href="http://austinpetersen2016.com" target="_blank">continue reading</a></span></div>
<!-- .rescue_about_content -->

<ul>
	<li><a href="http://austinpetersen2016.com/about/" target="_blank">About</a></li>
	<li><a href="http://austinpetersen2016.com/platform/" target="_blank">Platform</a></li>
	<li><a href="events.php" target="_blank">Events</a></li>
	<li><a href="http://austinpetersen2016.com/press/" target="_blank">Press</a></li>
</ul>
</div>
<!-- .rescue_about_wrap --></aside>
&nbsp;


</div>
<!-- .inner_sidebar .large-4 .large-offset-1 --></div>
<!-- .row --></div>
<!-- .page_wrap .content-area -->

<?php require 'footer.php'; ?>