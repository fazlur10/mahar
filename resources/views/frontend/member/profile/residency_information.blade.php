<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Residency Information')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('recidencies.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
          @php
              $birth_country_id = !empty($member->recidency->birth_country_id) ? $member->recidency->birth_country_id : "";
              $recidency_country_id = !empty($member->recidency->recidency_country_id) ? $member->recidency->recidency_country_id : "";
              $growup_country_id = !empty($member->recidency->growup_country_id) ? $member->recidency->growup_country_id : "";
          @endphp
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="birth_country_id">{{translate('Birth Country')}}</label>
                  <select class="form-control aiz-selectpicker" name="birth_country_id" data-live-search="true">
                    <option value="" disabled hidden selected>{{translate('Select Birth Country')}}</option>
                      @foreach ($countries as $country)
                          <option value="{{$country->id}}" @if($country->id == $birth_country_id) selected @endif >{{$country->name}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="col-md-6">
                  <label for="recidency_country_id">{{translate('Recidency Country')}}</label>
                  <select class="form-control aiz-selectpicker" name="recidency_country_id" data-live-search="true">
                    <option value="" disabled hidden selected>{{translate('Select recidency Country')}}</option>
                      @foreach ($countries as $country)
                          <option value="{{$country->id}}" @if($country->id == $recidency_country_id) selected @endif >{{$country->name}}</option>
                      @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="growup_country_id">{{translate('Growup Country')}}</label>
                  <select class="form-control aiz-selectpicker" name="growup_country_id" data-live-search="true">
                    <option value="" disabled hidden selected>{{translate('Select growup Country')}}</option>
                      @foreach ($countries as $country)
                          <option value="{{$country->id}}" @if($country->id == $growup_country_id) selected @endif >{{$country->name}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="col-md-6">
                  <label for="immigration_status">{{translate('Immigration Status')}}</label>
                  <select id="immigration_status" name="immigration_status" class="form-control">
					<option value="{{ !empty($$member->recidency->immigration_status) ? $member->recidency->immigration_status : "" }}" selected hidden>{{ !empty($member->recidency->immigration_status) ? $member->recidency->immigration_status : "Select Immigration Status" }}</option>
					<option value="Citizen">Citizen</option>
					<option value="Resident">Resident</option>
					<option value="Non-immigrant">Non-immigrant</option>
					<option value="Undocumented">Undocumented</option>
					<option value="Ask me later/ Other">Ask me later/ Other</option>
                </select>
                  @error('immigration_status')
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
