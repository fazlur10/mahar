<form action="{{ route('career.store') }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Add New Career Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" name="user_id" value="{{ $member_id }}">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Designation')}}</label>
            <div class="col-md-9"><!-- input type changed from text to select-- designation-->
                <select id="designation" name="designation" class="form-control" required>
                    <option value="" selected disabled hidden>Select Career</option>
                    <option value="Accounting/Finance">Accounting/Finance</option>
                    <option value="Advertising/Media">Advertising/Media</option>
                    <option value="Arts/Culture/Music">Arts/Culture/Music</option>
                    <option value="Builder/Farmer">Builder/Farmer</option>
                    <option value="Software Eng/Computer">Software Eng/Computer</option>
                    <option value="Beauty/Cosmetics/Fashion">Beauty/Cosmetics/Fashion</option>
                    <option value="Logistics/Warehouse"> Logistics/Warehouse</option>
                    <option value="Defense/Forces/Security">Defense/Forces/Security</option>
                    <option value="Doctor/Medical Officer">Doctor/Medical Officer</option>
                    <option value="Education/Academic">Education/Academic</option>
                    <option value="Engineering/Architecture">Engineering/Architecture</option>
                    <option value="Health Care/Nurse">Health Care/Nurse</option>
                    <option value="Hospitality/Tourism/Chef">Hospitality/Tourism/Chef</option>
                    <option value="Manager/Human Resources">Manager/Human Resources</option>
                    <option value="Banking/Insurance">Banking/Insurance </option>
                    <option value="Internet/New Media">Internet/New Media</option>
                    <option value="Lawyer/Legal">Lawyer/Legal</option>
                    <option value="Marketing/Sales">Marketing/Sales</option>
                    <option value="Political/Professor">Political/Professor</option>
                    <option value="Business/Entrepreneur">Business/Entrepreneur</option>
                    <option value="Public/Customer Relations">Public/Customer Relations</option>
                    <option value="Publishing/Print/Graphics">Publishing/Print/Graphics</option>
                    <option value="Research/Scientist">Research/Scientist</option>
                    <option value="Retired/Charity">Retired/Charity</option>
                    <option value="Secretary/Office">Secretary/Office</option>
                    <option value="Student">Student</option>
                    <option value="Teacher/Lecturer">Teacher/Lecturer</option>
                    <option value="IT/Telecommunications">IT/Telecommunications</option>
                    <option value="Transport/Manufacturing">Transport/Manufacturing</option>
                    <option value="Government/Department">Government/Department</option>
                    <option value="Writer/Journalist">Writer/Journalist</option>
                    <option value="Other/Self Employed">Other/Self Employed</option>
                    <option value="Unemployed/Housewife">Unemployed/Housewife</option>
                    
                </select>
            </div>
        </div>
       <!-- removed start, end-->
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Company')}}</label>
            <div class="col-md-9">
                <input type="text" name="company"  placeholder="{{ translate('company (optional)') }}" class="form-control">
            </div>
        </div>
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Add New Career Info')}}</button>
    </div>
</form>
