<?php

define("TITLE", "MyAlbum");
define("SITE_URL", "http://localhost:3000");
define("COMPANY_PHYSICAL_ZIP", '110092');
define('COMPANY_PHYSICAL_STATE', 'Delhi');
define('COMPANY_PHYSICAL_CITY', 'New Delhi');
define('COMPANY_PHYSICAL_COUNTRY', 'India');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset-UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
$data = json_decode(file_get_contents("php://input"));
$data = (array)$data;

$to = $data['sendto'];
$from = "noreply@techfacts007.in";
$replyBack = "support@techfacts007.in";
$subject = "Activate your account - " . TITLE;

$activation_link = $data['link'];




$headers  = "From: MyAlbum " . $from . "\n";
// $headers .= "Cc: testsite < mail@testsite.com >\n"; 
$headers .= "Reply-To: ". $replyBack . "\r\n";
$headers .= "X-Sender: MyAlbum" . $from . "\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: shanuraj715@gmail.com\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-utf-8\n";



$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<!--[if !mso]><!-->
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<!--<![endif]-->
		<!--[if (gte mso 9)|(IE)]>
		<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
		</xml>
		<![endif]-->
		<!--[if (gte mso 9)|(IE)]>
		<style type="text/css">
		body {width: 600px;margin: 0 auto;}
		table {border-collapse: collapse;}
		table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
		img {-ms-interpolation-mode: bicubic;}
		</style>
		<![endif]-->
		<style type="text/css">
			body, p, div { font-family: inherit; font-size: 14px; }
			body { color: #000000; }
			body a {
				color: #000000;
				text-decoration: none;
			}
			p { margin: 0; padding: 0; }
			table.wrapper {
				width:100% !important;
				table-layout: fixed;
				-webkit-font-smoothing: antialiased;
				-webkit-text-size-adjust: 100%;
				-moz-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
			}
			img.max-width {
				max-width: 100% !important;
			}
			.column.of-2 {
				width: 50%;
			}
			.column.of-3 {
				width: 33.333%;
			}
			.column.of-4 {
				width: 25%;
			}
			@media screen and (max-width:480px) {
				.preheader .rightColumnContent,
				.footer .rightColumnContent {
					text-align: left !important;
				}
				.preheader .rightColumnContent div, .preheader .rightColumnContent span, .footer .rightColumnContent div, .footer .rightColumnContent span {
					text-align: left !important;
				}
				.preheader .rightColumnContent, .preheader .leftColumnContent {
					font-size: 80% !important;
					padding: 5px 0;
				}
				table.wrapper-mobile {
					width: 100% !important;
					table-layout: fixed;
				}
				img.max-width {
					height: auto !important;
					max-width: 100% !important;
				}
				a.bulletproof-button {
					display: block !important;
					width: auto !important;
					font-size: 80%;
					padding-left: 0 !important;
					padding-right: 0 !important;
				}
				.columns {
					width: 100% !important;
				}
				.column {
					display: block !important;
					width: 100% !important;
					padding-left: 0 !important;
					padding-right: 0 !important;
					margin-left: 0 !important;
					margin-right: 0 !important;
				}
			}
		</style>
		<!--user entered Head Start-->
		<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
		<style>
			body {font-family: "Viga", sans-serif;}
		</style><!--End Head user entered-->
	</head>
	<body>
		<center class="wrapper" data-link-color="#000000" data-body-style="font-size:14px; font-family:inherit; color:#000000; background-color:#FFFFFF;">
			<div class="webkit">
				<table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#FFFFFF">
					<tbody>
						<tr>
							<td valign="top" bgcolor="#FFFFFF" width="100%">
								<table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td width="100%">
												<table width="100%" cellpadding="0" cellspacing="0" border="0">
													<tbody>
														<tr>
															<td>
																<!--[if mso]>
																<center>
																<table><tr><td width="600">
																<![endif]-->
																<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px;" align="center">
																	<tbody>
																		<tr>
																			<td role="modules-container" style="padding:0px 0px 0px 0px; color:#000000; text-align:left;" bgcolor="#FFFFFF" width="100%" align="left">
																				<table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
																					<tbody>
																						<tr>
																							<td role="module-content">
																								<p></p>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																				<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 0px 0px;" bgcolor="#dde6de">
																					<tbody>
																						<tr role="module-content">
																							<td height="100%" valign="top">
																								<table class="column" width="580" style="width:580px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="">
																									<tbody>
																										<tr>
																											<td style="padding:0px;margin:0px;border-spacing:0;">
																												<table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="10cc50ce-3fd3-4f37-899b-a52a7ad0ccce">
																													<tbody>
																														<tr>
																															<td style="padding:0px 0px 40px 0px;" role="module-content" bgcolor="">
																															</td>
																														</tr>
																													</tbody>
																												</table>
																												<table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="f8665f9c-039e-4b86-a34d-9f6d5d439327">
																													<tbody>
																														<tr>
																															<td style="font-size:6px; line-height:10px; padding:0px 0px 0px 0px;" valign="top" align="center">
																																<img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px;" width="220px" alt="" data-proportionally-constrained="true" data-responsive="false" src="https://myshop.techfacts007.in/site-images/email-images/logo_text.png">
																															</td>
																														</tr>
																													</tbody>
																												</table>
																												<table class="module" role="module" data-type="spacer" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="10cc50ce-3fd3-4f37-899b-a52a7ad0ccce.1">
																													<tbody>
																														<tr>
																															<td style="padding:0px 0px 30px 0px;" role="module-content" bgcolor="">
																															</td>
																														</tr>
																													</tbody>
																												</table>
																											</td>
																										</tr>
																									</tbody>
																								</table>

																							</td>
																						</tr>
																					</tbody>
																				</table>
																				<table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="bff8ffa1-41a9-4aab-a2ea-52ac3767c6f4">
																					<tbody>
																						<tr>
																							<td style="padding:18px 30px 18px 30px; line-height:40px; text-align:inherit; background-color:#dde6de;" height="100%" valign="top" bgcolor="#dde6de" role="module-content">
																								<div>
																									<div style="font-family: inherit; text-align: center">
																										<span style="color: #6fab81; font-size: 30px; font-family: inherit">Thank you for using ' . TITLE . '</span>
																									</div>
																									<div></div>
																								</div>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																				<table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="2f94ef24-a0d9-4e6f-be94-d2d1257946b0">
																					<tbody>
																						<tr>
																							<td style="padding:18px 50px 18px 50px; line-height:22px; text-align:inherit; background-color:#dde6de;" height="100%" valign="top" bgcolor="#dde6de" role="module-content">
																								<div>
																									<div style="font-family: inherit; text-align: center">
																										<span style="font-size: 16px; font-family: inherit">Confirm your email address to verify your account. Click on the below activate button to verify your account.&nbsp;</span>
																									</div>
																									<div></div>
																								</div>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																				<table border="0" cellpadding="0" cellspacing="0" class="module" data-role="module-button" data-type="button" role="module" style="table-layout:fixed;" width="100%" data-muid="c7bd4768-c1ab-4c64-ba24-75a9fd6daed8">
																					<tbody>
																						<tr>
																							<td align="center" bgcolor="#dde6de" class="outer-td" style="padding:10px 0px 20px 0px;">
																								<table border="0" cellpadding="0" cellspacing="0" class="wrapper-mobile" style="text-align:center;">
																									<tbody>
																										<tr>
																											<td align="center" bgcolor="#eac96c" class="inner-td" style="border-radius:6px; font-size:16px; text-align:center; background-color:inherit;">
																												<a href="' . $activation_link . '" style="background-color:#eac96c; border:0px solid #333333; border-color:#333333; border-radius:0px; border-width:0px; color:#000000; display:inline-block; font-size:16px; font-weight:normal; letter-spacing:0px; line-height:normal; padding:20px 30px 20px 30px; text-align:center; text-decoration:none; border-style:solid; font-family:inherit;" target="_blank">Activate Account</a>
																											</td>
																										</tr>
																									</tbody>
																								</table>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																				
																				
																				<table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="30d9a68c-ce13-4754-a845-6c3dc22721ee">
																					<tbody>
																						<tr>
																							<td style="padding:40px 40px 40px 40px; line-height:22px; text-align:inherit; background-color:#fe737c;" height="100%" valign="top" bgcolor="#fe737c" role="module-content">
																								<div>
																									<div style="font-family: inherit; text-align: center">
																										<span style="color: #ffffff; font-size: 16px">Please ignore this email if this was not done by you. Please visit help center for more information about this email.</span>
																									</div>
																									<div style="font-family: inherit; text-align: center"><br></div>
																									<div style="font-family: inherit; text-align: center">
																										<a href="' . SITE_URL . '/help"><span style="color: #ffffff; font-size: 16px"><u>Help Center</u></span></a>
																									</div>
																									<div></div>
																								</div>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																				<div data-role="module-unsubscribe" class="module" role="module" data-type="unsubscribe" style="color:#444444; font-size:12px; line-height:20px; padding:16px 16px 16px 16px; text-align:Center;" data-muid="4e838cf3-9892-4a6d-94d6-170e474d21e5">
																					<div class="Unsubscribe--addressLine">
																						<p class="Unsubscribe--senderName" style="font-size:12px; line-height:20px;"><?php echo TITLE;?></p>
																						<p style="font-size:12px; line-height:20px;">
																							<span class="Unsubscribe--senderAddress">' . COMPANY_PHYSICAL_CITY . '</span>, <span class="Unsubscribe--senderCity">' . COMPANY_PHYSICAL_STATE . '</span>, <span class="Unsubscribe--senderState">' . COMPANY_PHYSICAL_COUNTRY . '</span> <span class="Unsubscribe--senderZip">' . COMPANY_PHYSICAL_ZIP . '</span>
																						</p>
																					</div>
																				</div>
																				<table border="0" cellpadding="0" cellspacing="0" class="module" data-role="module-button" data-type="button" role="module" style="table-layout:fixed;" width="100%" data-muid="188c3d22-338c-4a35-a298-a7d3957f579d">
																					<tbody>
																						<tr>
																							<td align="center" bgcolor="" class="outer-td" style="padding:0px 0px 20px 0px;">
																								<table border="0" cellpadding="0" cellspacing="0" class="wrapper-mobile" style="text-align:center;">
																									<tbody>
																										<tr>
																											<td align="center" bgcolor="#f5f8fd" class="inner-td" style="border-radius:6px; font-size:16px; text-align:center; background-color:inherit;">
																												<a href="" style="background-color:#f5f8fd; border:1px solid #f5f8fd; border-color:#f5f8fd; border-radius:25px; border-width:1px; color:#a8b9d5; display:inline-block; font-size:10px; font-weight:normal; letter-spacing:0px; line-height:normal; padding:5px 18px 5px 18px; text-align:center; text-decoration:none; border-style:solid; font-family:helvetica,sans-serif;" target="_blank">♥ POWERED BY ' . TITLE . '</a>
																											</td>
																										</tr>
																									</tbody>
																								</table>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																	</tbody>
																</table>
																<!--[if mso]>
															</td>
														</tr>
													</table>
												</center>
												<![endif]-->
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</center>
	</body>
</html>
';
$status = ["status" => false];
if( mail($to, $subject, $message, $headers) ){
  $status['status'] = true;
}
echo json_encode( $status );
?>