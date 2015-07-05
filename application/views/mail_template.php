<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
  </head>
  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Georgia, Times, serif;width: 100%;background-color: #fff;margin: 0;padding: 0;-webkit-font-smoothing: antialiased;line-height: 14px">
		<!-- Start Header-->
		<table width="600" class="navbar deviceWidth" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse;background-color: #F5FBFF;border-bottom: 1px solid #DDF0FC;box-shadow: 0 10px 5px -5px rgba(186, 227, 255, 0.2) inset, 0 -10px 10px -10px rgba(186, 227, 255, 0.4) inset;margin-top: 5px;border-top-right-radius: 5px;border-top-left-radius: 5px">
			<tr>
				<td width="100%" class="navbar" bgcolor="#" style="color: #464646;font-family: &quot;Open Sans&quot;, sans-serif;font-size: 14px;font-weight: 300;line-height: 18px;margin: 0;background-color: #F5FBFF;border-bottom: 1px solid #DDF0FC;box-shadow: 0 10px 5px -5px rgba(186, 227, 255, 0.2) inset, 0 -10px 10px -10px rgba(186, 227, 255, 0.4) inset;margin-top: 5px;border-top-right-radius: 5px;border-top-left-radius: 5px">
                	<!-- Logo -->
                    <table border="0" cellpadding="0" cellspacing="0" align="left" class="deviceWidth" style="border-collapse: collapse">
                    	<tr>
                    		<td style="padding: 10px 20px;color: #464646;font-family: &quot;Open Sans&quot;, sans-serif;font-size: 14px;font-weight: 300;line-height: 18px;margin: 0" class="center">
                            	<a href="#"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" border="0"/></a>
                            </td>
                        </tr>
                   	</table><!-- End Logo -->
            	</td>
			</tr>
		</table><!-- End Header -->
		
		<!-- Main body section of mail -->
		<table width="600" class="deviceWidth" border="0" cellpadding="0" cellspacing="0" align="center" style="border-left: 2px solid #eeeeed;border-right: 2px solid #eeeeed;border-collapse: collapse">
			<tr>
				<td style="font-size: 13px;color: #959595;font-weight: normal;text-align: left;font-family: Georgia, Times, serif;line-height: 14px;vertical-align: top;padding: 10px 8px 10px 8px;margin: 0">
					
					<table style="border-collapse: collapse">
						<tr>
							<br/>
							<td valign="top" style="padding: 0 10px 10px 0;color: #464646;font-family: &quot;Open Sans&quot;, sans-serif;font-size: 14px;font-weight: 300;line-height: 18px;margin: 0">
								<?php echo trim($intro);?>,
                           	</td>
                       	</tr>
                   	</table>
                    <p style="color: #464646;font-family: &quot;Open Sans&quot;, sans-serif;font-size: 14px;font-weight: 300;line-height: 18px;margin: 0">
                    	<?php echo $body; ?> 
					</p>
					<br/>
					<table style="border-collapse: collapse">
						<tr>
							<td valign="top" style="padding: 0 10px 10px 0;color: #464646;font-family: &quot;Open Sans&quot;, sans-serif;font-size: 14px;font-weight: 300;line-height: 18px;margin: 0">
								Kind Regards,
							</td>
						</tr>
					</table>
				</td>
          	</tr>
      	</table><!-- End Main body section of mail -->
	</body>
</html>
