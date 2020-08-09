<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Formulaire</title>
</head>

<body id="formulairecontact">
<?php define ("SECRETKEY", "mysecretkey1234"); ?>
	<!-- Begin Mailchimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>

	<div id="mc_embed_signup" class="formulaire">
		<form action="https://gmail.us17.list-manage.com/subscribe/post?u=b7e4530dc3918e504751fb60d&amp;id=32a215b0b4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    		<div id="mc_embed_signup_scroll">
				<div class="indicates-required"><span class="asterisk"></span></div>
			
					
				<div class="mc-field-group form-group row">
					<label for="mce-FNAME" class="col-lg-2 col-form-label"> </label>
					<div class="col-lg-10">
					<input type="hidden" value="<?php echo openssl_decrypt(str_replace(" ", "+",$_GET["name"]), "AES-128-ECB", SECRETKEY); ?>" name="FNAME" class="form-control" id="mce-FNAME">
					</div>
				</div>
				<div class="mc-field-group form-group row">
					<label for="mce-LNAME" class="col-lg-2 col-form-label"> </label>
					<div class="col-lg-10">
					<input type="hidden" value="<?php echo openssl_decrypt(str_replace(" ", "+",$_GET["lastName"]), "AES-128-ECB", SECRETKEY); ?>" name="LNAME" class="form-control" id="mce-LNAME">
					</div>
				</div>
				<div class="mc-field-group form-group row">
					<label for="mce-EMAIL" class="col-lg-2 col-form-label"> <span class="asterisk"></span>
					</label>
					<div class="col-lg-10">
					<input type="hidden" value="<?php echo openssl_decrypt(str_replace(" ", "+",$_GET["email"]), "AES-128-ECB", SECRETKEY); ?>" name="EMAIL" class="form-control" id="mce-EMAIL">
					</div>
				</div>
				<div class="mc-field-group  form-group row">
					<label for="mce-PHONE" class="col-lg-2 col-form-label"></label>
					<div class="col-lg-10">
					<input type="hidden" name="PHONE" class="form-control" value="<?php echo openssl_decrypt(str_replace(" ", "+",$_GET["phone"]), "AES-128-ECB", SECRETKEY); ?>" id="mce-PHONE">
					</div>
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b7e4530dc3918e504751fb60d_32a215b0b4" tabindex="-1" value=""></div>
    			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary" style="display: none;"></div>
   		 	</div>
		</form>
	</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[3]='MMERGE3';ftypes[3]='radio';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='PHONE';ftypes[4]='phone';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<div class="col-lg-5 offset-lg-3">
		<img src="img/load.gif" class="img0">
	</div>
</body>
<script type="text/javascript">
    document.getElementById('mc-embedded-subscribe-form').submit(); // SUBMIT FORM
	setTimeout(function() {
		window.close() }, 30000);
	
</script>
</html>
