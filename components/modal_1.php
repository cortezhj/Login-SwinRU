<div class="modal fade" id="invite-friends" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <div class="media flex-fill">
                    <div class="icon-shape rounded-lg bg-primary text-white mr-5">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="media-body align-self-center">
                        <h5 class="modal-title">Invite friends</h5>
                        <p class="small">Invite colleagues, clients and friends.</p>
                    </div>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="#">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="invite-email" class="small">Email</label>
                            <input type="text" class="form-control form-control-lg" id="invite-email">
                        </div>

                        <div class="form-group mb-0">
                            <label for="invite-message" class="small">Invitation message</label>
                            <textarea class="form-control form-control-lg" id="invite-message" data-autosize="true"></textarea>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-lg btn-block btn-primary d-flex align-items-center">
                        Invite friend
                        <i class="material-icons ml-auto">person_add_alt</i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>