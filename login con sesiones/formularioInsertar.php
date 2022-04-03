<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title></title>
</head>
<body>

	<div class="container">
		<h1>Formulario para insertar</h1>

		<form id="contact-form" method="post" action="guardar.php" role="form">

			<div class="messages"></div>

			<div class="controls">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_name">Firstname *</label>
							<input id="form_name" type="text" name="nombre" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_lastname">Lastname *</label>
							<input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_email">Email *</label>
							<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_need">Please specify your need *</label>
							<select id="form_need" name="need" class="form-control"  data-error="Please specify your need.">
								<option value=""></option>
								<option value="Request quotation">Request quotation</option>
								<option value="Request order status">Request order status</option>
								<option value="Request copy of an invoice">Request copy of an invoice</option>
								<option value="Other">Other</option>
							</select>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="form_message">Message *</label>
							<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4"  data-error="Please, leave us a message."></textarea>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
						<input type="submit" class="btn btn-success btn-send" value="Send message">
					</div>
					<div class="col-md-6">
						<button type="button" class="btn btn-info btn-send" value="Consultar Datos"><a href="consultar.php">Consultar Datos</a></button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-muted">
							<strong>*</strong> These fields are required. Contact form template by
							<a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">Bootstrapious</a>.</p>
						</div>
					</div>
				</div>

			</form>
		</div>
		<script type="text/javascript" src="bootstrap.min.js"></script>
	</body>
	</html>