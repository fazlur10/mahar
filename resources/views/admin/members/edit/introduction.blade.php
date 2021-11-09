<div class="card-header bg-dark text-white">
    <h5 class="mb-0 h6">{{translate('Other Info & Remarks')}}</h5>
</div>
<div class="card-body">
    <form action="{{ route('member.introduction.update', $member->member->id) }}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-md-2 col-form-label">{{translate('Other Info & Remarks')}}</label>
            <div class="col-md-10">
                <textarea type="text" name="introduction" class="form-control" rows="4" placeholder="{{translate('Other Info & Remarks')}}" required>{{ $member->member->introduction }}</textarea>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-info btn-sm">{{translate('Update')}}</button>
        </div>
    </form>
</div>
