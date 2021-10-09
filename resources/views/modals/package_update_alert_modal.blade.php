<div class="modal fade package_update_alert_modal" id="modal-zoom">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
        <div class="modal-content package_update_alert_modal_content">
            <div class="modal-body text-center">
                <h4 class="modal-title h6 mb-3">{{translate('Please Login/Create to Your Account.')}}</h4>
                <hr>
                <a href="{{ route('login') }}" class="btn btn-primary mt-2">{{translate('Login')}}</a>
                <a href="{{ route('register') }}" class="btn btn-success mt-2">{{translate('Register')}}</a>
                <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">{{translate('Close')}}</button>
            </div>
        </div>
    </div>
</div>
