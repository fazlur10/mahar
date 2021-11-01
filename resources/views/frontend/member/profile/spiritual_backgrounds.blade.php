<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Spiritual & Social Background')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('spiritual_backgrounds.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
          <input type="hidden" name="address_type" value="present">
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
          {{--
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="community_value">{{translate('Community Value')}}</label>
                  <input type="text" name="community_value" value="{{!empty($member->spiritual_backgrounds->community_value) ? $member->spiritual_backgrounds->community_value : "" }}" class="form-control" placeholder="{{translate('Community Value')}}">
                  @error('community_value')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div> --}}
          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
          </div>
      </form>
    </div>
</div>
