<div class="card-header bg-dark text-white">
    <h5 class="mb-0 h6">{{translate('Family Information')}}</h5>
</div>
<div class="card-body">
    <form action="{{ route('families.update', $member->id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group row">
            <div class="col-md-6">
                <label for="father">{{translate('Father')}}</label>
                <input type="text" name="father" value="{{ !empty($member->families->father) ? $member->families->father : "" }}" class="form-control" placeholder="{{translate('Father')}}" required>
                @error('father')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="mother">{{translate('Mother')}}</label>
                <input type="text" name="mother" value="{{ !empty($member->families->mother) ? $member->families->mother : "" }}" placeholder="{{ translate('Mother') }}" class="form-control" required>
                @error('mother')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="father_job">{{translate('Father Occupation')}}</label>
                <input type="text" name="father_job" value="{{ !empty($member->families->father_job) ? $member->families->father_job : "" }}" class="form-control" placeholder="{{translate('Fathers Ocuupation')}}" required>
                @error('father_job')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="mother_job">{{translate('Mother Occupation')}}</label>
                <input type="text" name="mother_job" value="{{ !empty($member->families->mother_job) ? $member->families->mother_job : "" }}" placeholder="{{ translate('Mother Occupation') }}" class="form-control" required>
                @error('mother_job')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <label for="sibling">{{translate('Siblings')}}</label>
                <input type="text" name="sibling" value="{{ !empty($member->families->sibling) ? $member->families->sibling : "" }}" class="form-control" placeholder="{{translate('Siblings Info')}}" required>
                @error('sibling')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-info btn-sm">{{translate('Update')}}</button>
        </div>
    </form>
</div>
