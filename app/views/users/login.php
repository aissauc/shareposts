<?php require(APP_ROOT . '/views/inc/header.php'); ?>
<div class="row">
	<div class="col-md-6 mx-auto">
		<div class="card card-body bg-light mt-5">
			<?php flashMsg('success_register'); ?>
			<h2>Login</h2>
			<p>Please fill in your credentials to login </p>
			<form action="<?= URL_ROOT?>/users/login" method="POST">
				<div class="form-group">
					<label for="email">Email: <sup>*</sup></label>
					<input type="text" name="email" id="email" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['email_err'] ?></span>
				</div>
				<div class="form-group">
					<label for="password">Password: <sup>*</sup></label>
					<input type="password" name="password" id="password" class="form-control form-control-lg <?= (!empty($data['password_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['password_err'] ?></span>
				</div>
				
				<div class="row">
					<div class="col">
						<input type="submit" value="Login" class="btn btn-success btn-block">
					</div>
					<div class="col">
						<a href="<?= URL_ROOT; ?>/users/register" class="btn btn-light btn-block">No account ? Register</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>

<?php require(APP_ROOT . '/views/inc/footer.php'); ?>