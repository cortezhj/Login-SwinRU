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
				<a href="register.php" class="btn btn-basic d-flex align-items-center text-uppercase btn-login">
                    регистрироваться
                </a>
			</div>
		</div>
	</header>
	<main id="page-content" class="d-flex justify-content-center align-items-center main-login">
		<div class="d-flex box overflow-hidden">	
			<div class="d-flex flex-column align-items-center justify-content-center bg-white box-one position-relative">
				<form class="d-flex flex-column align-items-center justify-content-center form">
					<p class="h2 mb-6">Авторизоваться</p>
					<div class="mb-4 w-100">
				   		<label for="user" class="form-label">электронное письмо</label>
				   		<input type="email" class="form-control" id="user" placeholder="example@mail.com" required>
				 	</div>
					<div class="mb-7 w-100">
				   		<label for="password" class="form-label">пароль</label>
						<input type="password" class="form-control" id="password" placeholder="пароль" required>
					</div>
					<button type="submit" class="btn btn-primary ">авторизоваться</button>
					<div class="mt-6 d-md-none text-center">
						<a href="register.php" class="text-password ">подпишите здесь</a>
					</div>
				</form>			
				<div class="position-absolute box-password">
					<a href="#" class="text-password" data-toggle="modal" data-target="#modalPassword">Забыли свой пароль?</a>
				</div>
			</div>
			<div class="d-none d-md-flex w-50 align-items-center justify-content-center">
				<img src="images/theme/logo4.svg" alt="">
			</div>
		</div>
	</main>
	<footer id="sticky-footer" class="d-flex justify-content-center align-items-center footer-login position-relative mx-7 mx-sm-10">
		<div class="divider-login position-absolute w-100"></div>
		<p>© 2021 Авторские права - SwingRU.com</p>
	</footer>
</div>

<div class="modal fade" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">восстановить пароль</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
	            <div class="modal-body">
	            	<div class="px-4">
						<div class="mb-4 w-100">
						   	<label for="user" class="form-label">электронное письмо</label>
						   	<input type="email" class="form-control mb-6 mb-md-6" id="user" placeholder="example@mail.com" required>
						 	<p class="text-justify help">Мы отправим ссылку для восстановления на указанный вами адрес электронной почты. Он должен быть таким же, как при регистрации.</p>
					 	</div>
	            	</div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">отменить</button>
	                <button type="submit" class="btn btn-primary">послать</button>
	            </div>
				</form>	
        </div>
    </div>
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

.box-password
{
	bottom: 1rem;
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

.modal-body p
{
	font-size: 0.9rem;
}

@media only screen and (min-width: 768px){
	.box-password
	{
		bottom: 1.6rem;
	}

	.form
	{
		width: 82%;
	}
}
</style>