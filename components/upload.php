<div class="layout-footer w-100 h-100 d-flex justify-content-center">
	<div class="card border-top-0 px-7 px-md-9 px-lg-10 rounded-0 h-100 hide-scrollbar box">
		<div class="w-100 pt-4 pt-md-4 pt-lg-5 d-flex align-items-center header sticky-top bg-white">
			<img src="images/theme/logo2.svg" alt="">
			<h2>SwingRU</h2>
		</div>
		<div class="d-flex flex-column align-items-center header-box pt-4 pb-8">
			<h2 class="text-center">изображение профиля</h2>
			<p class="text-justify text-md-center">SwingRU веселее, если вы знаете людей, которые вам нравятся, Загрузите фото профиля, чтобы люди вокруг вас видели вас</p>
		</div>
		<form class="row pt-7 mb-6 mb-md-9">
			<div class="form-group col-12">
                <label class="small">Фото</label>
                <div class="position-relative text-center bg-secondary rounded p-6 p-md-9">
                    <div class="avatar bg-primary text-white mb-5">
                        <i class="icon-md material-icons">photo_camera</i>
                    </div>

                    <p class="small text-muted mb-0">Вы можете загружать файлы в формате jpg, jpeg или png. <br> Максимальный размер файла 3 МБ.</p>
                    <input id="profile-photo" class="d-none" type="file">
                    <label class="stretched-label mb-0" for="profile-photo"></label>
                </div>
            </div>
			<div class="form-group col-12 d-flex justify-content-start justify-content-sm-end pt-2 pt-md-6">
				<button type="submit" class="btn btn-primary">авторизоваться</button>
			</div>
		</form>
	</div>
</div>
<style>
.box
{
	width: 100%;
}

.header img
{
	width: 90px;
	margin-left: -22px;
	margin-top: -7px;
	user-select: none;
}

.header h2
{
	margin-left: -5px;
}

.header-box
{
	border-bottom: 1px solid #dedede;
}

.header-box h2
{
	font-weight: 300;
}

@media only screen and (min-width: 768px){
	.box
	{
		width: 80%;
	}
}

@media only screen and (min-width: 1024px){
	.box
	{
		width: 75%;
	}
}

@media only screen and (min-width: 1200px){
	.box
	{
		width: 71%;
	}
}
</style>