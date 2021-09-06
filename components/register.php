<div class="layout-footer d-flex flex-column w-100">
	<header class="bg-image w-100">
		<div class="row px-xl-9 pt-3 m-0">
			<div class="col-4 d-none d-md-flex align-items-center">
				<p class="text-white country">Россия</p>
			</div>
			<div class="col-12 col-md-4 d-flex align-items-center justify-content-start justify-content-md-center">
				<p class="text-white fw-bold title ml-2 ml-md-0">SwingRU</p>
			</div>
			<div class="col-4 d-none d-md-flex align-items-center justify-content-end">
				<a href="index.php" class="btn btn-basic d-flex align-items-center text-uppercase btn-login">
                    авторизоваться
                </a>
			</div>
		</div>
	</header>
	<main id="page-content" class="d-flex justify-content-center align-items-center main-login">
		<div class="d-flex box overflow-hidden">
			<div class="d-none d-md-flex w-50 align-items-center justify-content-center">
				<img src="images/theme/logo5.svg" alt="">
			</div>
			<div class="d-flex flex-column align-items-center justify-content-center bg-white box-one position-relative">
				<form class="d-flex flex-column align-items-center justify-content-center form">
					<p class="h2 mb-3 mb-md-4">Регистрироваться</p>
					<div class="mb-4 w-100">
				   		<label for="name" class="form-label">Имя</label>
				   		<input type="text" class="form-control" id="name" placeholder="Имя" required>
				 	</div>
				 	<div class="mb-4 w-100">
				   		<label for="apellido" class="form-label">фамилия</label>
				   		<input type="text" class="form-control" id="apellido" placeholder="фамилия" required>
				 	</div>
					<div class="mb-4 w-100">
				   		<label for="user" class="form-label">электронное письмо</label>
				   		<input type="email" class="form-control" id="user" placeholder="example@mail.com" required>
				 	</div>
					<div class="mb-6 w-100">
				   		<label for="password" class="form-label">пароль</label>
						<input type="password" class="form-control" id="password" placeholder="пароль" required>
					</div>
					<button type="submit" class="btn btn-primary ">Регистрироваться</button>
					<div class="mt-6 d-md-none">
						<a href="index.php" class="text-password">Уже есть аккаунт? авторизоваться</a>
					</div>
				</form>			
			</div>
		</div>
	</main>
	<footer id="sticky-footer" class="d-flex justify-content-center align-items-center footer-login position-relative mx-7 mx-sm-10">
		<div class="divider-login position-absolute w-100"></div>
		<p>© 2021 Авторские права - SwingRU.com</p>
	</footer>
</div>

<style>
.btn-login
{
  font-weight: 600;
  color: #ec2f4b;
}

.btn-login:hover
{
  border: 1px solid #cf2f4b;
  background: #cf2f4b;
  color: #fff;
}

.btn-login:focus
{
  border: 1px solid #cf2f4b;
  background: #cf2f4b;
  color: #fff;
}

.text-password
{
	color: #777;
}

.text-password:hover
{
	color: #777;
}

.form
{
	width: 86%;
}

.form-label
{
	margin-bottom: 3px;
}

@media only screen and (min-width: 768px){
	.form
	{
		width: 82%;
	}
}
</style>