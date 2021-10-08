<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Physical Attributes')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('physical-attribute.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
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
{{--
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="eye_color">{{translate('Eye color')}}</label>
                  <input type="text" name="eye_color" value="{{ !empty($member->physical_attributes->eye_color) ? $member->physical_attributes->eye_color : "" }}" class="form-control" placeholder="{{translate('Eye Color')}}" >
                  @error('eye_color')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="col-md-6">
                  <label for="hair_color">{{translate('Hair Color')}}</label>
                  <input type="text" name="hair_color" value="{{ !empty($member->physical_attributes->hair_color) ? $member->physical_attributes->hair_color : "" }}" placeholder="{{ translate('Hair Color') }}" class="form-control" >
                  @error('hair_color')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>
--}}
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
              </div>{{--
              <div class="col-md-6">
                  <label for="blood_group">{{translate('Blood Group')}}</label>
                  <input type="text" name="blood_group" value="{{ !empty($member->physical_attributes->blood_group) ? $member->physical_attributes->blood_group : "" }}" placeholder="{{ translate('Blood Group') }}" class="form-control" >
                  @error('blood_group')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div> --}}
          </div>

        {{--  <div class="form-group row">
              <div class="col-md-6">
                  <label for="body_type">{{translate('Body Type')}}</label>
                  <input type="text" name="body_type" value="{{ !empty($member->physical_attributes->body_type) ? $member->physical_attributes->body_type : "" }}" class="form-control" placeholder="{{translate('Body Type')}}">
                  @error('body_type')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="col-md-6">
                  <label for="body_art">{{translate('Body Art')}}</label>
                  <input type="text" name="body_art" value="{{ !empty($member->physical_attributes->body_art) ? $member->physical_attributes->body_art : "" }}" placeholder="{{ translate('Body Art') }}" class="form-control" >
                  @error('body_art')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="disability">{{translate('Disability')}}</label>
                  <input type="text" name="disability" value="{{ !empty($member->physical_attributes->disability) ? $member->physical_attributes->disability : "" }}" class="form-control" placeholder="{{translate('Disability')}}">
                  @error('disability')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>--}}

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
          </div>
      </form>
    </div>
</div>
