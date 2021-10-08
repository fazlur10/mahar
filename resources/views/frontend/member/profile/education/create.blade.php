<form action="{{ route('education.store') }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Add New Education Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" name="user_id" value="{{ $member_id }}">
    
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Education')}}</label>
            <div class="col-md-9"><!-- input type from text changed to select and named type-->
                <select id="type" name="type" class="form-control" required>
                    <option value="" selected disabled hidden>Select Education</option>
                    <option value="High School">High School</option>
                    <option value="Professional Qualification">Professional Qualification</option>
                    <option value="Associate Degree">Associate Degree</option>
                    <option value="Bachelors Degree">Bachelors Degree</option>
                    <option value="Masters Degre">Masters Degree</option>
                    <option value="Ph.D/ Post Doctoral">Ph.D/ Post Doctoral</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div><!-- Details go into degree--><!-- removed degree, start, end-->
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Details')}}</label>
            <div class="col-md-9">
                <input type="text" name="degree" class="form-control" placeholder="{{translate('Details')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Institute')}}</label>
            <div class="col-md-9">
                <input type="text" name="institution"  placeholder="{{ translate('Institute  (optional)') }}" class="form-control">
            </div>
        </div>
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Add New Education Info')}}</button>
    </div>
</form>
