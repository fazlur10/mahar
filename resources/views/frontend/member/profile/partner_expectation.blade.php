<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Partner Expectation')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('partner_expectations.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="general">{{translate('General Requirement')}}</label>
                    <input type="text" name="general" value="{{ !empty($member->partner_expectations->general) ? $member->partner_expectations->general : "" }}" class="form-control" placeholder="{{translate('General')}}" >
                </div>
                <div class="col-md-6">
                    <label for="residence_country_id">{{translate('Residence Country')}}</label>
                    @php $partner_residence_country = !empty($member->partner_expectations->residence_country_id) ? $member->partner_expectations->residence_country_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="residence_country_id" data-live-search="true" >
                        <option value="" disabled hidden selected>{{translate('Select Country')}}</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $partner_residence_country) selected @endif >{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('residence_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_height">{{translate('Min Height')}}  ({{ translate('In Feet') }})</label>
                    <input type="number" name="partner_height" value="{{ !empty($member->partner_expectations->height) ? $member->partner_expectations->height : "" }}" step="any"  placeholder="{{ translate('Height') }}" class="form-control">
                    @error('partner_height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_weight">{{translate('Max Weight')}}  ({{ translate('In Kg') }})</label>
                    <input type="number" name="partner_weight" value="{{ !empty($member->partner_expectations->weight) ? $member->partner_expectations->weight : "" }}" step="any" class="form-control" placeholder="{{translate('Weight')}}">
                    @error('partner_weight')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_marital_status">{{translate('Marital Status')}}</label>
                    @php $partner_marital_status_id = !empty($member->partner_expectations->marital_status_id) ? $member->partner_expectations->marital_status_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_marital_status" data-live-search="true">
                        <option value="" disabled hidden selected>{{ translate('Choose One') }}</option>
                        @foreach ($marital_statuses as $marital_status)
                        <option value="{{$marital_status->id}}" @if($partner_marital_status_id == $marital_status->id) selected @endif>{{$marital_status->name}}</option>
                        @endforeach
                    </select>
                    @error('partner_marital_status')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="partner_children_acceptable">{{translate('Children Acceptable')}}</label>
                    @php $children_acceptable = !empty($member->partner_expectations->children_acceptable) ? $member->partner_expectations->children_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_children_acceptable">
                        <option value="" disabled hidden selected>{{ translate('Choose One') }}</option>
                        <option value="yes" @if($children_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($children_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($children_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_children_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_religion_id">{{translate('Religion')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_religion_id" id="partner_religion_id" data-live-search="true" >
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($religions as $religion)
                            <option value="{{$religion->id}}" @if($religion->id == $partner_religion_id) selected @endif> {{ $religion->name }} </option>
                        @endforeach
                    </select>
                    @error('partner_religion_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_caste_id">{{translate('Caste')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_caste_id" id="partner_caste_id" data-live-search="true">

                    </select>
                    @error('partner_caste_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_sub_caste_id">{{translate('Sub Caste')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_sub_caste_id" id="partner_sub_caste_id" data-live-search="true">

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="language_id">{{translate('Language')}}</label>
                    @php $partner_language = !empty($member->partner_expectations->language_id) ? $member->partner_expectations->language_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="language_id" data-live-search="true" >
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" @if($language->id == $partner_language) selected @endif> {{ $language->name }} </option>
                        @endforeach
                    </select>
                    @error('language_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="pertner_education">{{translate('Education')}}</label>
                    <select id="pertner_education" name="pertner_education" class="form-control">
                        <option value="{{ !empty($member->partner_expectations->education) ? $member->partner_expectations->education : "" }}" selected hidden>{{ !empty($member->partner_expectations->education) ? $member->partner_expectations->education : "Select One" }}</option>
                        <option value="High School">High School</option>
                        <option value="Professional Qualification">Professional Qualification</option>
                        <option value="Associate Degree">Associate Degree</option>
                        <option value="Bachelors Degree">Bachelors Degree</option>
                        <option value="Masters Degre">Masters Degree</option>
                        <option value="Ph.D/ Post Doctoral">Ph.D/ Post Doctoral</option>
                        <option value="Other">Other</option>
                     </select>
                    @error('pertner_education')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="partner_profession">{{translate('Profession')}}</label>
                    <select id="partner_profession" name="partner_profession" class="form-control">
                        <option value="{{ !empty($member->partner_expectations->profession) ? $member->partner_expectations->profession : "" }}" selected hidden>{{ !empty($member->partner_expectations->profession) ? $member->partner_expectations->profession : "Select Profession" }}</option>
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
                        <option value="Unemployed/Housewife">Does not matter</option>
                    </select>
                    @error('partner_profession')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="smoking_acceptable">{{translate('Smoking Acceptable')}}</label>
                    @php $partner_smoking_acceptable = !empty($member->partner_expectations->smoking_acceptable) ? $member->partner_expectations->smoking_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="smoking_acceptable" >
                        <option value="" disabled hidden @if($partner_smoking_acceptable ==  '') selected @endif >{{translate('Select Yes/No')}}</option>
                        <option value="yes" @if($partner_smoking_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_smoking_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_smoking_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('smoking_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="drinking_acceptable">{{translate('Drinking Acceptable')}}</label>
                    @php $partner_drinking_acceptable = !empty($member->partner_expectations->drinking_acceptable) ? $member->partner_expectations->drinking_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="drinking_acceptable" >
                        <option value="" disabled hidden @if($partner_drinking_acceptable ==  '') selected @endif >{{translate('Select Yes/No')}}</option>
                        <option value="yes" @if($partner_drinking_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_drinking_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_drinking_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('drinking_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_diet">{{translate('Dieting Acceptable')}}</label>
                    @php $partner_dieting_acceptable = !empty($member->partner_expectations->diet) ? $member->partner_expectations->diet : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_diet" >
                        <option value="" disabled hidden @if($partner_dieting_acceptable ==  '') selected @endif >{{translate('Select Yes/No')}}</option>
                        <option value="yes" @if($partner_dieting_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_dieting_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_dieting_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_diet')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
               {{-- <div class="col-md-6">
                    <label for="partner_body_type">{{translate('Body Type')}}</label>
                    <input type="text" name="partner_body_type" value="{{ !empty($member->partner_expectations->body_type) ? $member->partner_expectations->body_type : "" }}" class="form-control" placeholder="{{translate('Body Type')}}">
                    @error('partner_body_type')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div> --}}
                <div class="col-md-6">
                    <label for="partner_personal_value">{{translate('Personal Value')}}</label>
                    <input type="text" name="partner_personal_value" value="{{ !empty($member->partner_expectations->personal_value) ? $member->partner_expectations->personal_value : "" }}" class="form-control" placeholder="{{translate('Personal Value')}}">
                    @error('partner_personal_value')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
           {{--
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_personal_value">{{translate('Personal Value')}}</label>
                    <input type="text" name="partner_personal_value" value="{{ !empty($member->partner_expectations->personal_value) ? $member->partner_expectations->personal_value : "" }}" class="form-control" placeholder="{{translate('Personal Value')}}">
                    @error('partner_personal_value')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
               
                <div class="col-md-6">
                    <label for="partner_manglik">{{translate('Manglik')}}</label>
                    @php $partner_manglik = !empty($member->partner_expectations->manglik) ? $member->partner_expectations->manglik : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_manglik" required>
                        <option value="yes" @if($partner_manglik ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_manglik ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_manglik ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_manglik')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div> 
            </div>
            --}}
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_country_id">{{translate('Preferred Country')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_country_id" id="partner_country_id" data-live-search="true" >
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $partner_country_id) selected @endif>{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('partner_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_state_id">{{translate('Preferred State')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_state_id" id="partner_state_id" data-live-search="true">

                    </select>
                    @error('partner_state_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="family_value_id">{{translate('Family Value')}}</label>
                    <select class="form-control aiz-selectpicker" name="family_value_id" >
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($family_values as $family_value)
                            <option value="{{$family_value->id}}" @if($family_value->id == !empty($member->partner_expectations->family_value_id) ? $member->partner_expectations->family_value_id : "") selected @endif> {{ $family_value->name }} </option>
                        @endforeach
                    </select>
                    @error('family_value_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="pertner_complexion">{{translate('Complexion')}}</label>
                
                    <select id="pertner_complexion" name="pertner_complexion" class="form-control" required>
                        <option value="{{ !empty($member->partner_expectations->complexion) ? $member->partner_expectations->complexion : "" }}" selected hidden>{{ !empty($member->partner_expectations->complexion) ? $member->partner_expectations->complexion : "Select complexion" }}</option>
                        <option value="Very fair">Very fair</option>
                        <option value="Medium">Medium</option>
                        <option value="Tanned">Tanned</option>
                        <option value="Darker">Darker</option>
                      </select>
                    @error('pertner_complexion')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
    </div>
</div>
