<div class="card">


        <form action="{{ route('member.basic_info_update', $member->id) }}" method="POST">
            
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Basic Information')}}</h5>
            </div>
            <div class="card-body">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate('First Name')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="first_name" value="{{ $member->first_name }}" class="form-control" placeholder="{{translate('First Name')}}" required>
                    @error('first_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Last Name')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="last_name" value="{{ $member->last_name }}" class="form-control" placeholder="{{translate('Last Name')}}" required>
                    @error('last_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Gender')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="gender" required>
                        <option value="" disabled hidden @if($member->member->gender ==  NULL) selected @endif >{{translate('Select one')}}</option>
                        <option value="1" @if($member->member->gender ==  1) selected @endif >{{translate('Male')}}</option>
                        <option value="2" @if($member->member->gender ==  2) selected @endif >{{translate('Female')}}</option>
                        @error('gender')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Date Of Birth')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="aiz-date-range form-control" name="date_of_birth"  value="@if(!empty($member->member->birthday)) {{date('Y-m-d', strtotime($member->member->birthday))}} @endif" placeholder="Select Date" data-single="true" data-show-dropdown="true">
                    @error('date_of_birth')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Phone Number')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="phone" value="{{ $member->phone }}" class="form-control" placeholder="{{translate('Phone')}}" required>
                    @error('phone')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('On Behalf')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="on_behalf" data-live-search="true" required>
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($on_behalves as $on_behalf)
                            <option value="{{$on_behalf->id}}" @if($member->member->on_behalves_id == $on_behalf->id) selected @endif>{{$on_behalf->name}}</option>
                        @endforeach
                    </select>
                    @error('on_behalf')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Marital Status')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="marital_status" data-live-search="true" required>
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($marital_statuses as $marital_status)
                            <option value="{{$marital_status->id}}" @if($member->member->marital_status_id == $marital_status->id) selected @endif>{{$marital_status->name}}</option>
                        @endforeach
                    </select>
                    @error('marital_status')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Number Of Children')}}
                       
                    </label>
                    <input type="text" name="children" value="{{ $member->member->children }}" class="form-control" placeholder="{{translate('Number Of Children')}}" >
                </div>
                <div class="col-md-6">
                    <label for="photo" >{{translate('Photo')}} <small>(800x800)</small></label>
                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                        </div>
                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                        <input type="hidden" name="photo" class="selected-files" value="{{ $member->photo }}">
                    </div>
                    <div class="file-preview box sm">
                    </div>
                </div>
            </div>

        </div>





        <div class="card-header">
            <h5 class="mb-0 h6">{{translate('Physical Attributes')}}</h5>
        </div>
         <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="height">{{translate('Height')}} </label>
                        <select id="height" name="height" class="form-control" required>
                          <option value="{{ !empty($member->physical_attributes->height) ? $member->physical_attributes->height : "" }}" selected hidden>{{ !empty($member->physical_attributes->height) ? $member->physical_attributes->height : "Select Height" }}</option>
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
                        @error('height')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="weight">{{translate('Weight')}} ({{ translate('In Kg')}})</label>
                        <select id="weight" name="weight" class="required form-control">
                          <option value="{{ !empty($member->physical_attributes->weight) ? $member->physical_attributes->weight : "" }}" selected hidden>{{ !empty($member->physical_attributes->weight) ? $member->physical_attributes->weight : "Select Weight" }}</option>
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
                          <option value="more than - 140 kg">more than - 140 kg</option>
                      </select>                      
                        @error('weight')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="complexion">{{translate('Complexion')}}</label>
                        <select id="complexion" name="complexion" class="form-control" required>
                          <option value="{{ !empty($member->physical_attributes->complexion) ? $member->physical_attributes->complexion : "" }}" selected hidden>{{ !empty($member->physical_attributes->complexion) ? $member->physical_attributes->complexion : "Select complexion" }}</option>
                          <option value="Very fair">Very fair</option>
                          <option value="Medium">Medium</option>
                          <option value="Tanned">Tanned</option>
                          <option value="Darker">Darker</option>
                          <option value="Ask me later">Ask me later</option>
                        </select>
                        @error('complexion')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
        </div>




        <div class="card-header">
            <h5 class="mb-0 h6">{{translate('Present Address')}}</h5>
        </div>
        <div class="card-body">
            <input type="hidden" name="address_type" value="present">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="present_country_id">{{translate('Country')}}</label>
                    <select class="form-control aiz-selectpicker" name="present_country_id" id="present_country_id" data-live-search="true" required>
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        <?php $countries = \App\Models\Country::where('status',1)->get(); ?>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $present_country_id) selected @endif>{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('present_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="present_state_id">{{translate('State')}}</label>
                    <select class="form-control aiz-selectpicker" name="present_state_id" id="present_state_id" data-live-search="true" required>

                    </select>
                    @error('present_state_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="present_city_id">{{translate('City')}}</label>
                    <select class="form-control aiz-selectpicker" name="present_city_id" id="present_city_id" data-live-search="true" required>

                    </select>
                    @error('present_city_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
               <!--removed present_postal_code-->
            </div>
        </div>




        <div class="card-header">
            <h5 class="mb-0 h6">{{translate('Language')}}</h5>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="diet">{{translate('Mothere Tongue')}}</label>
                    <select class="form-control aiz-selectpicker" name="mothere_tongue" data-live-search="true">
                        <option value="" disabled hidden selected>{{translate('Select One')}}</option>
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" @if($language->id == $member->member->mothere_tongue) selected @endif> {{ $language->name }} </option>
                        @endforeach
                    </select>
                    @error('mothere_tongue')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="drink">{{translate('Known Languages')}}</label>
                    @php $known_languages = !empty($member->member->known_languages) ? json_decode($member->member->known_languages) : [] ; @endphp
                    <select class="form-control aiz-selectpicker" name="known_languages[]" data-live-search="true" multiple>
                        
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" @if(in_array($language->id, $known_languages)) selected @endif >{{ $language->name }} </option>
                        @endforeach
                    </select>
                    @error('known_languages')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>


         

        <div class="card-header">
            <h5 class="mb-0 h6">{{translate('Spiritual & Social Background')}}</h5>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="member_religion_id">{{translate('Religion')}}</label>
                    <select class="form-control aiz-selectpicker" name="member_religion_id" id="member_religion_id" data-live-search="true" >
                        <option value="" disabled hidden >{{translate('Select One')}}</option>
                    
                        @foreach ($religions as $religion)
                        <option value="{{$religion->id}}" @if($religion->id == $member_religion_id) selected @endif> {{ $religion->name }} </option>
                       @endforeach
                    
                    </select>
                    @error('member_religion_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="member_caste_id">{{translate('Caste')}}</label>
                    <select class="form-control aiz-selectpicker" name="member_caste_id" id="member_caste_id" data-live-search="true">
  
                    </select>
                    @error('member_caste_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="member_sub_caste_id">{{translate('Sub Caste')}}</label>
                    <select class="form-control aiz-selectpicker" name="member_sub_caste_id" id="member_sub_caste_id" data-live-search="true">
  
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ethnicity">{{translate('Ethnicity')}}</label>
                    <select id="ethnicity" name="ethnicity" class="form-control" required>
                      <option value="{{ !empty($member->spiritual_backgrounds->ethnicity) ? $member->spiritual_backgrounds->ethnicity: "" }}" selected hidden>{{ !empty($member->spiritual_backgrounds->ethnicity) ? $member->spiritual_backgrounds->ethnicity : "Select Ethnicity" }}</option>
                      <option value="Muslim">Muslim</option>
                      <option value="SriLanka Moors">SriLanka Moors</option>
                      <option value="Indian Moors">Indian Moors</option>
                      <option value="Malays">Malays</option>
                      <option value="India Malays">India Malays</option>
                      <option value="Arab (Middle Eastern)">Arab (Middle Eastern)</option>
                     <option value="Tamil">Tamil</option>
                     <option value="Indian">Indian</option>
                     <option value="Memons">Memons</option>
                     <option value="Turkish">Turkish</option>
                     <option value="Sinhala">Sinhala</option>
                     <option value="Other">Other</option>
                     
                    </select> 
                    @error('ethnicity')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="community_value">{{translate('Social Status')}}</label>
                    <select id="community_value" name="community_value" class="form-control" required>
                      <option value="{{ !empty($member->spiritual_backgrounds->community_value) ? $member->spiritual_backgrounds->community_value: "" }}" selected hidden>{{ !empty($member->spiritual_backgrounds->community_value) ? $member->spiritual_backgrounds->community_value : "Select Social Status" }}</option>
                  
      <option value="Upper/Rich class">Upper/Rich class</option>
      <option value="Upper/Middle class">Upper/Middle class</option>
      <option value="Middle class">Middle class</option>
      <option value="Working class">Working class</option>
      <option value="Lower/Middle class">Lower/Middle class</option>
      <option value="I dont Care">I dont Care</option>
      <option value="Ask Me Later">Ask Me Later</option>
                     
                    </select>
                    @error('community_value')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                  <div class="col-md-6">
                      <label for="family_value_id">{{translate('Family Value')}}</label>
                      <select class="form-control aiz-selectpicker" name="family_value_id" data-live-search="true">
                          <option value="">{{translate('Select One')}}</option>
                          @foreach ($family_values as $family_value)
                              <option value="{{$family_value->id}}" @if($family_value->id == !empty($member->spiritual_backgrounds->family_value) ? $member->spiritual_backgrounds->family_value : "" ) selected @endif> {{ $family_value->name }}</option>
                          @endforeach
                      </select>
                  </div>
               </div>
            </div>




            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Family Information')}}</h5>
            </div>
            <div class="card-body">
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
            </div>

       
        

         
            <div class="text-right" style="margin-right: 5%; margin-bottom:1%;">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
</div>
