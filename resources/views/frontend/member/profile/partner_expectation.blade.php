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
                    <label for="partner_height">{{translate('Min Height')}} </label>
                    <select id="height" name="partner_height" class="form-control" required>
                        <option value="{{ !empty($member->partner_expectations->height) ? $member->partner_expectations->height : "" }}" selected hidden>{{ !empty($member->partner_expectations->height) ? $member->partner_expectations->height : "Select Height" }}</option>
                        <option value="less than 4&#039;9">less than 4&#039;9</option>
                        <option value="4&#039;10 - 147 cm">4&#039;10 - 147 cm</option>
                        <option value="4&#039;11 - 150 cm">4&#039;11 - 150 cm</option>
                        <option value="5&#039;0 - 152 cm">5&#039;0 - 152 cm</option>
                        <option value="5&#039;1 - 155 cm">5&#039;1 - 155 cm</option>
                        <option value="5&#039;2 - 157 cm">5&#039;2 - 157 cm</option>
                        <option value="5&#039;3 - 160 cm">5&#039;3 - 160 cm</option>
                        <option value="5&#039;4 - 163 cm">5&#039;4 - 163 cm</option>
                        <option value="5&#039;5 - 165 cm">5&#039;5 - 165 cm</option>
                        <option value="5&#039;6 - 168 cm">5&#039;6 - 168 cm</option>
                        <option value="5&#039;7 - 170 cm">5&#039;7 - 170 cm</option>
                        <option value="5&#039;8 - 173 cm">5&#039;8 - 173 cm</option>
                        <option value="5&#039;9 - 175 cm">5&#039;9 - 175 cm</option>
                        <option value="5&#039;10 - 178 cm">5&#039;10 - 178 cm</option>
                        <option value="5&#039;11 - 180 cm">5&#039;11 - 180 cm</option>
                        <option value="6&#039;0 - 183 cm">6&#039;0 - 183 cm</option>
                        <option value="6&#039;1 - 185 cm">6&#039;1 - 185 cm</option>
                        <option value="6&#039;2 - 188 cm">6&#039;2 - 188 cm</option>
                        <option value="6&#039;3 - 190 cm">6&#039;3 - 190 cm</option>
                        <option value="6&#039;4 - 193 cm">6&#039;4 - 193 cm</option>
                        <option value="6&#039;5 - 196 cm">6&#039;5 - 196 cm</option>
                        <option value="6&#039;6 - 198 cm">6&#039;6 - 198 cm</option>
                        <option value="6&#039;7 - 201 cm">6&#039;7 - 201 cm</option>
                        <option value="6&#039;8 - 203 cm">6&#039;8 - 203 cm</option>
                        <option value="6&#039;9 - 206 cm">6&#039;9 - 206 cm</option>
                        <option value="6&#039;10 - 208 cm">6&#039;10 - 208 cm</option>
                        <option value="6&#039;11 - 211 cm">6&#039;11 - 211 cm</option>
                        <option value="more than 7&#039;0">more than 7&#039;0</option>
     </select>
                    @error('partner_height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_weight">{{translate('Max Weight')}} </label>
                    
                   
<select id="partner_weight" name="partner_weight" class="required form-control">
    <option value="{{ !empty($member->partner_expectations->weight) ? $member->partner_expectations->weight : "" }}" selected hidden>{{ !empty($member->partner_expectations->weight) ? $member->partner_expectations->weight : "Select Weight" }}</option>
    <option value="less than 40kg">less than 40kg</option>
    <option value="88 lbs - 40 kg">88 lbs - 40 kg</option>
    <option value="90 lbs - 41 kg">90 lbs - 41 kg</option>
    <option value="93 lbs - 42 kg">93 lbs - 42 kg</option>
    <option value="95 lbs - 43 kg">95 lbs - 43 kg</option>
    <option value="97 lbs - 44 kg">97 lbs - 44 kg</option>
    <option value="99 lbs - 45 kg">99 lbs - 45 kg</option>
    <option value="101 lbs - 46 kg">101 lbs - 46 kg</option>
    <option value="103 lbs - 47 kg">103 lbs - 47 kg</option>
    <option value="105 lbs - 48 kg">105 lbs - 48 kg</option>
    <option value="108 lbs - 49 kg">108 lbs - 49 kg</option>
    <option value="110 lbs - 50 kg">110 lbs - 50 kg</option>
    <option value="112 lbs - 51 kg">112 lbs - 51 kg</option>
    <option value="115 lbs - 52 kg">115 lbs - 52 kg</option>
    <option value="117 lbs - 53 kg">117 lbs - 53 kg</option>
    <option value="119 lbs - 54 kg">119 lbs - 54 kg</option>
    <option value="121 lbs - 55 kg">121 lbs - 55 kg</option>
    <option value="123 lbs - 56 kg">123 lbs - 56 kg</option>
    <option value="125 lbs - 57 kg">125 lbs - 57 kg</option>
    <option value="128 lbs - 58 kg">128 lbs - 58 kg</option>
    <option value="130 lbs - 59 kg">130 lbs - 59 kg</option>
    <option value="132 lbs - 60 kg">132 lbs - 60 kg</option>
    <option value="134 lbs - 61 kg">134 lbs - 61 kg</option>
    <option value="137 lbs - 62 kg">137 lbs - 62 kg</option>
    <option value="139 lbs - 63 kg">139 lbs - 63 kg</option>
    <option value="141 lbs - 64 kg">141 lbs - 64 kg</option>
    <option value="143 lbs - 65 kg">143 lbs - 65 kg</option>
    <option value="146 lbs - 66 kg">146 lbs - 66 kg</option>
    <option value="148 lbs - 67 kg">148 lbs - 67 kg</option>
    <option value="150 lbs - 68 kg">150 lbs - 68 kg</option>
    <option value="152 lbs - 69 kg">152 lbs - 69 kg</option>
    <option value="154 lbs - 70 kg">154 lbs - 70 kg</option>
    <option value="156 lbs - 71 kg">156 lbs - 71 kg</option>
    <option value="158 lbs - 72 kg<">158 lbs - 72 kg</option>
    <option value="161 lbs - 73 kg">161 lbs - 73 kg</option>
    <option value="163 lbs - 74 kg">163 lbs - 74 kg</option>
    <option value="165 lbs - 75 kg">165 lbs - 75 kg</option>
    <option value="167 lbs - 76 kg">167 lbs - 76 kg</option>
    <option value="169 lbs - 77 kg">169 lbs - 77 kg</option>
    <option value="171 lbs - 78 kg">171 lbs - 78 kg</option>
    <option value="174 lbs - 79 kg">174 lbs - 79 kg</option>
    <option value="176 lbs - 80 kg">176 lbs - 80 kg</option>
    <option value="178 lbs - 81 kg">178 lbs - 81 kg</option>
    <option value="180 lbs - 82 kg">180 lbs - 82 kg</option>
    <option value="183 lbs - 83 kg">183 lbs - 83 kg</option>
    <option value="185 lbs - 84 kg">185 lbs - 84 kg</option>
    <option value="187 lbs - 85 kg">187 lbs - 85 kg</option>
    <option value="189 lbs - 86 kg">189 lbs - 86 kg</option>
    <option value="191 lbs - 87 kg">191 lbs - 87 kg</option>
    <option value="194 lbs - 88 kg">194 lbs - 88 kg</option>
    <option value="196 lbs - 89 kg">196 lbs - 89 kg</option>
    <option value="198 lbs - 90 kg">198 lbs - 90 kg</option>
    <option value="200 lbs - 91 kg">200 lbs - 91 kg</option>
    <option value="202 lbs - 92 kg">202 lbs - 92 kg</option>
    <option value="205 lbs - 93 kg">205 lbs - 93 kg</option>
    <option value="207 lbs - 94 kg">207 lbs - 94 kg</option>
    <option value="209 lbs - 95 kg">209 lbs - 95 kg</option>
    <option value="211 lbs - 96 kg">211 lbs - 96 kg</option>
    <option value="213 lbs - 97 kg">213 lbs - 97 kg</option>
    <option value="216 lbs - 98 kg">216 lbs - 98 kg</option>
    <option value="218 lbs - 99 kg">218 lbs - 99 kg</option>
    <option value="220 lbs - 100 kg">220 lbs - 100 kg</option>
    <option value="222 lbs - 101 kg">222 lbs - 101 kg</option>
    <option value="224 lbs - 102 kg">224 lbs - 102 kg</option>
    <option value="227 lbs - 103 kg">227 lbs - 103 kg</option>
    <option value="229 lbs - 104 kg">229 lbs - 104 kg</option>
    <option value="231 lbs - 105 kg">231 lbs - 105 kg</option>
    <option value="233 lbs - 106 kg">233 lbs - 106 kg</option>
    <option value="235 lbs - 107 kg">235 lbs - 107 kg</option>
    <option value="238 lbs - 108 kg">238 lbs - 108 kg</option>
    <option value="240 lbs - 109 kg">240 lbs - 109 kg</option>
    <option value="242 lbs - 110 kg">242 lbs - 110 kg</option>
</select>   
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
                {{--<div class="col-md-6">
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
                </div>--}}
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
{{--
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
               {{-- <div class="col-md-6">
                    <label for="partner_body_type">{{translate('Body Type')}}</label>
                    <input type="text" name="partner_body_type" value="{{ !empty($member->partner_expectations->body_type) ? $member->partner_expectations->body_type : "" }}" class="form-control" placeholder="{{translate('Body Type')}}">
                    @error('partner_body_type')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div> 
                <div class="col-md-6">
                    <label for="partner_personal_value">{{translate('Personal Value')}}</label>
                    <input type="text" name="partner_personal_value" value="{{ !empty($member->partner_expectations->personal_value) ? $member->partner_expectations->personal_value : "" }}" class="form-control" placeholder="{{translate('Personal Value')}}">
                    @error('partner_personal_value')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>--}}
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
            

          
               {{-- <div class="col-md-6">
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
                </div>--}}
               

            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
    </div>
</div>
