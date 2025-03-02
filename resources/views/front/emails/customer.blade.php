<!DOCTYPE html>
<html lang="zh-TW" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
	xmlns:o="urn:schemas-microsoft-com:office:office" data-lt-installed="true">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<style>
		/* What it does: Remove spaces around the email design added by some email clients. */
		/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
		html,
		body {
			margin: 0 auto !important;
			padding: 0 !important;
			height: 100% !important;
			width: 100% !important;
			/* background: #f1f1f1; */
		}

		/* What it does: Stops email clients resizing small text. */
		* {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		/* What it does: Centers email on Android 4.4 */
		div[style*="margin: 16px 0"] {
			margin: 0 !important;
		}

		/* What it does: Stops Outlook from adding extra spacing to tables. */
		table,
		td {
			mso-table-lspace: 0pt !important;
			mso-table-rspace: 0pt !important;
		}

		/* What it does: Fixes webkit padding issue. */
		table {
			border-spacing: 0 !important;
			border-collapse: collapse !important;
			table-layout: fixed !important;
			/* margin: 0 auto !important; */
		}

		/* What it does: Uses a better rendering method when resizing images in IE. */
		img {
			-ms-interpolation-mode: bicubic;
		}

		/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
		/* a {
			text-decoration: none !important;
		} */

		/* What it does: A work-around for email clients meddling in triggered links. */
		*[x-apple-data-detectors],
		/* iOS */
		.unstyle-auto-detected-links *,
		.aBn {
			border-bottom: 0 !important;
			cursor: default !important;
			color: inherit !important;
			text-decoration: none !important;
			font-size: inherit !important;
			font-family: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
		}

		/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
		.a6S {
			display: none !important;
			opacity: 0.01 !important;
		}

		/* What it does: Prevents Gmail from changing the text color in conversation threads. */
		.im {
			color: inherit !important;
		}

		/* If the above doesn't work, add a .g-img class to any image in question. */
		img.g-img+div {
			display: none !important;
		}

		/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
		/* Create one of these media queries for each additional viewport size you'd like to fix */

		/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
		@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
			u~div .email-container {
				min-width: 320px !important;
			}
		}

		/* iPhone 6, 6S, 7, 8, and X */
		@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
			u~div .email-container {
				min-width: 375px !important;
			}
		}

		/* iPhone 6+, 7+, and 8+ */
		@media only screen and (min-device-width: 414px) {
			u~div .email-container {
				min-width: 414px !important;
			}
		}
	</style>
	<meta name="robots" content="noindex, follow">
</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
	<center style="width: 100%;">
		<div style="max-width: 800px; margin: 0 auto;margin-top: 40px;padding: 0 20px;" class="email-container">
			<table role="presentation" style="margin-bottom: 12px;border-bottom: 3px solid #000;width: 100%;">
				<tbody>
					<tr>
						<td>
							<h1 style="font-size: 18px;margin-bottom: 40px;line-height: 1.5;">
								Dear Customer/Manager,
								<br>
								Thank you for your inquiry. We have received the request for TEKTRO/TRP, and we are actively working on addressing your needs.
							</h1>
						</td>
					</tr>

				</tbody>
			</table>
			<!-- contact table-->
			<table role="presentation" style="margin-bottom: 20px;border-collapse: collapse;border-bottom: 3px solid #000;">
				<tbody>
					<tr>
						<td valign="middle" class="box">
							<table>
								<tbody>
									<tr>
										<td valign="top" width="20%" style="padding: 12px 0;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.question')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding: 12px 0;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td>
															{{$question}}
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td valign="top" width="20%" style="padding: 12px 0;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.area')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding: 12px 0;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td>
															{{$area}}
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td valign="top" width="20%" style="padding: 12px 0;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.country')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding: 12px 0;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td>
															{{$country}}
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td valign="top" width="20%" style="padding: 12px 0;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.name')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding: 12px 0;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td>
															{{$name}}
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td valign="top" width="20%" style="padding: 12px 0;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.email')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding: 12px 0;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td>
															{{$email}}
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td valign="top" width="20%" style="padding: 12px 0;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.phone')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding: 12px 0;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td>
															{{$phone}}
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td valign="top" width="20%" style="padding-top: 12px;padding-bottom: 24px;">
											<h4 style="margin: 0;font-weight: 400;color: #6C757D;">{{__('front.contact.content')}}</h4>
										</td>
										<td valign="top" width="80%" style="padding-top: 12px;padding-bottom: 24px;">
											<table role="presentation" cellspacing="0" cellpadding="0" border="0"
												width="100%">
												<tbody>
													<tr>
														<td style="line-height: 1.5;">
															{{$content}}
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
			<!-- contact table end -->

			<table valign="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
				style="margin-bottom: 40px;">
				<tbody>
					<tr>
						<td>
							<p style="font-size: 14px;">Copyright © 2023 TEKTRO TECHNOLOGY CORP. &nbsp;&nbsp;
								<a href="https://www.tektro.com/" style="text-decoration: underline; color: #6C757D;" target="_blank">visit TEKTRO/TRP</a>
							</p>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</center>


</body>

</html>