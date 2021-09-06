<div class="main main-visible" data-mobile-height="">
    <div id="chat-2" class="chat dropzone-form-js" data-dz-url="some.php">
        
        <div class="chat-body">
            <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="col-3 d-xl-none">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-muted px-0" href="#" data-chat="open">
                                        <i class="material-icons">chevron_left</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-xl-6">
                            <div class="media text-center text-xl-left">
                                <div class="avatar avatar-sm avatar-online d-none d-lg-inline-block mr-5">
                                    <img src="https://randomuser.me/api/portraits/women/26.jpg" class="avatar-img" alt="">
                                </div>
                                <div class="media-body align-self-center text-truncate">
                                    <h6 class="text-truncate mb-n1">Monica Ruiz</h6>
                                    <span class="badge badge-dot badge-success d-inline-block d-xl-none mr-1"></span>
                                    <small class="text-muted">онлайн</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-xl-6 text-right">
                            <ul class="nav justify-content-end">
                                <li class="nav-item list-inline-item d-none d-xl-block mr-3">
                                    <a class="nav-link text-muted px-3" data-toggle="collapse" data-target="#chat-2-search" href="#" title="Искать в этом чате">
                                        <i class="material-icons">search</i>
                                    </a>
                                </li>
                                <li class="nav-item list-inline-item d-none d-xl-block mr-0">
                                    <a class="nav-link text-muted px-3" href="#" data-chat-sidebar-toggle="#chat-2-info" title="Подробности">
                                        <i class="material-icons">info</i>
                                    </a>
                                </li>
                                <li class="nav-item list-inline-item d-block d-xl-none">
                                    <div class="dropdown">
                                        <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">info</i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" data-toggle="collapse" data-target="#chat-2-search" href="#">
                                                поиск <span style="font-size: 1.2rem;" class="ml-auto pl-5 material-icons">search</span>
                                            </a>

                                            <a class="dropdown-item d-flex align-items-center" href="#" data-chat-sidebar-toggle="#chat-2-info">
                                                более <span style="font-size: 1.2rem;" class="ml-auto pl-5 material-icons">info</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse border-bottom px-lg-8" id="chat-2-search">
                <div class="container-xxl py-4 py-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Искать в этом чате" aria-label="Искать в этом чате">
                        <div class="input-group-append">
                            <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat-content px-lg-8">
                <div class="container-xxl py-3 py-lg-3">
                    <div class="message-divider my-9 mx-lg-5">
                        <div class="row align-items-center">
                            <div class="col">
                                <hr>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted">Теперь вы подключены к SwingRU</small>
                            </div>
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="end-of-chat"></div>
            </div>

            <div class="chat-files hide-scrollbar px-lg-8">
                <div class="container-xxl">
                    <div class="dropzone-previews-js form-row py-4"></div>
                </div>
            </div>

            <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                <div class="container-xxl">
                    <form id="chat-id-2-form" action="" data-emoji-form="">
                        <div class="form-row align-items-center">
                            <div class="col">
                                <div class="input-group">
                                    <textarea id="chat-id-2-input" class="form-control bg-transparent border-0" placeholder="Напишите ваше сообщение..." rows="1" data-emoji-input="" data-autosize="true"></textarea>
                                    <div class="input-group-append">
                                        <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                            <i style="font-size: 1.3rem;" class="material-icons">mood</i>
                                        </button>
                                    </div>
                                    <div class="input-group-append">
                                        <button id="chat-upload-btn-2" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                            <i style="font-size: 1.3rem;" class="material-icons">camera_alt</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                                    <span class="material-icons">send</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="chat-2-info" class="chat-sidebar">
            <div class="d-flex h-100 flex-column">

                <div class="border-bottom py-4 py-lg-6">
                    <div class="container-fluid">
                        <ul class="nav justify-content-between align-items-center">
                            <li class="nav-item list-inline-item">
                                <a class="nav-link text-muted px-0" href="#" data-chat-sidebar-close="">
                                    <i class="material-icons">chevron_left</i>
                                </a>
                            </li>
                            <li class="text-center d-block d-lg-none">
                                <p>Детали чата</p>
                            </li>
                            <li class="nav-item list-inline-item">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-md material-icons">settings</i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            немой
                                            <span style="font-size: 1.2rem;" class="ml-auto material-icons text-muted">notifications_none</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal" data-target="#modalChat">
                                            Удалить
                                            <span style="font-size: 1.2rem;" class="ml-auto material-icons text-muted">delete_outline</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hide-scrollbar flex-fill">
                    <div class="border-bottom text-center py-9 px-10">
                        <div class="avatar avatar-xl mx-5 mb-5">
                            <img class="avatar-img" src="https://randomuser.me/api/portraits/women/26.jpg" alt="">
                        </div>
                        <h5>Monica Ruiz</h5>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush mb-8">
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="small text-muted mb-0">место расположения</p>
                                        <p>Rusia, center</p>
                                    </div>
                                    <i class="text-muted icon-sm material-icons">place</i>
                                </div>
                            </li>
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="small text-muted mb-0">пол</p>
                                        <p>пара мужчина + женщина</p>
                                    </div>
                                    <i class="text-muted icon-sm material-icons">star</i>
                                </div>
                            </li>
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="small text-muted mb-0">отношение</p>
                                        <p>В сложные отношения</p>
                                    </div>
                                    <i class="text-muted icon-sm material-icons">favorite</i>
                                </div>
                            </li>
                            <li class="list-group-item py-6">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="small text-muted mb-0">я хочу</p>
                                        <p>общаться и встречаться с людьми</p>
                                    </div>
                                    <i class="text-muted icon-sm material-icons">explore</i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="modalChat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Удалить чат</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-7">
                <p>Вы уверены, что хотите удалить беседу?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">отменить</button>
                <button type="button" class="btn btn-primary">подтверждать</button>
            </div>
        </div>
    </div>
</div>