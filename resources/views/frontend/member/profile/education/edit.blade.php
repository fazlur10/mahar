<form action="{{ route('education.update', $education->id) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Edit Education Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <div class="form-group row"> <!-- input type from text changed to select and named type-->
            <label class="col-md-3 col-form-label">{{translate('Education')}}</label>
            <div class="col-md-9">
                <select id="type" name="type" class="form-control" required>
                    <option value="{{$education->type}}" selected hidden>{{$education->type}}</option>
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
                <input type="text" name="degree" value="{{$education->degree}}" class="form-control" placeholder="{{translate('Details')}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Institute')}}</label>
            <div class="col-md-9">
                <input type="text" name="institution" value="{{$education->institution}}"  placeholder="{{ translate('Institute  (optional)') }}" class="form-control">
            </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Update Education Info')}}</button>
    </div>
</form>
