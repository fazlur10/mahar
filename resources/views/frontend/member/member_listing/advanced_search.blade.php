<div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl z-1035">
    <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
    <div class="card collapse-sidebar c-scrollbar-light shadow-none">
        <div class="card-header pr-1 pl-3">
            <h5 class="mb-0 h6">{{ translate('ADVANCED SEARCH') }}</h5>
            <button class="btn btn-sm p-2 d-xl-none filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                <i class="las la-times la-2x"></i>
            </button>
        </div>
        <div class="card-body">
            <div class="pb-4">
                <form action="{{ route('member.listing') }}" method="get">
                    <div class="row">
                        <div class="d-inline ml-3">
                            <div class="form-group mb-3">
							<input type="radio" id="female" name="gender" value="1" @if($gender == 1) checked @endif >
                            <label for="female" class="form-label"><img src="{{ static_asset('assets/img/female.png') }}" class="img-fit mw-100 size-50px size-md-50px rounded-circle md-rounded-0"></label>

                            </div>
                        </div>
                        <div class="d-inline ml-5">
                            <div class="form-group mb-3">
                                <input type="radio" id="male" name="gender" value="2" @if($gender == 2) checked @endif >
                         <label for="male" class="form-label"><img src="{{ static_asset('assets/img/male.png') }}" class="img-fit mw-100 size-50px size-md-50px rounded-circle md-rounded-0"></label>

                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Age From') }}</label>
                                <select id="age_from" name="age_from" class="form-control" required>
                                    <option value="{{ !empty($age_from) ? $age_from : "" }}" selected hidden>{{ !empty($age_from) ? $age_from : "Age" }}</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="42">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="52">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('To') }}</label>
                                <select id="age_to" name="age_to" class="form-control" required>
                                    <option value="{{ !empty($age_to) ? $age_to : "" }}" selected hidden>{{ !empty($age_to) ? $age_to : "Age" }}</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="42">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="52">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                </select>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Member ID') }}</label>
                                <input type="text" name="member_code" value="{{ $member_code }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Maritial Status') }}</label>
                                @php $marital_statuses = \App\Models\MaritalStatus::all(); @endphp
                                <select class="form-control aiz-selectpicker" name="marital_status[]" data-live-search="true" multiple>
                                    <option value="" disabled>{{translate('Select')}}</option>
                                    @foreach ($marital_statuses as $marital_status)
                                    <option value="{{$marital_status->id}}" @if(is_array($matital_status)) @if(in_array($marital_status->id, $matital_status)) selected @endif @endif >{{$marital_status->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Religion') }}</label>
                                @php $religions = \App\Models\Religion::all(); @endphp
                                <select name="religion_id[]" id="religion_id" class="form-control aiz-selectpicker"  data-live-search="true" multiple>
                                    <option value="" disabled>{{translate('Choose Religion')}}</option>
                                    @foreach ($religions as $religion)
                                        <option value="{{ $religion->id }}" @if(is_array($religion_id)) @if(in_array($religion->id, $religion_id)) selected @endif @endif> {{ $religion->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Caste') }}</label>
                                <select name="caste_id[]" id="caste_id" class="form-control aiz-selectpicker" data-live-search="true" multiple>
                                    <option value="">{{translate('Select one religion')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" hidden>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Sub Caste') }}</label>
                                <select name="sub_caste_id" id="sub_caste_id" class="form-control aiz-selectpicker" data-live-search="true">
                                    <option value="">{{translate('Select One')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Mother Tongue') }}</label>
                                @php $mother_tongues = \App\Models\MemberLanguage::all(); @endphp
                                <select name="mother_tongue[]" class="form-control aiz-selectpicker" data-live-search="true" multiple>
                                    <option value="" disabled>{{translate('Select Mother Tongue')}}</option>
                                    @foreach ($mother_tongues as $mother_tongue)
                                         <option value="{{ $mother_tongue->id }}" @if(is_array($mother_tongue_id)) @if(in_array($mother_tongue->id, $mother_tongue_id)) selected @endif @endif> {{ $mother_tongue->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-grohp mb-3">
                                <label class="form-label" for="name">{{ translate('Profession') }}</label>
                                <input type="text" name="profession" value="{{ $profession }}" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Country') }}</label>
                                @php $countries = \App\Models\Country::where('status',1)->get(); @endphp
                                <select name="country_id[]" id="country_id" class="form-control aiz-selectpicker" data-live-search="true" multiple>
                                    <option value="" disabled>{{translate('Select Country')}}</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" @if(is_array($country_id)) @if(in_array($country->id, $country_id)) selected @endif @endif> {{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('State') }}</label>
                                <select name="state_id[]" id="state_id" class="form-control aiz-selectpicker" data-live-search="true" multiple>
                                    <option value="">{{translate('Select one Country')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('City') }}</label>
                                <select name="city_id[]" id="city_id" class="form-control aiz-selectpicker" data-live-search="true" multiple>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Min Height') }}</label>
                                <input type="number" name="min_height" value="{{ $min_height }}" class="form-control" min="3" step="0.01"  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">{{ translate('Max Height') }}</label>
                                <input type="number" name="max_height" value="{{ $max_height }}" class="form-control" min="4.5" max="7.5" step="0.01"   >
                          </div>
                        </div>
                    </div>
                    <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary" hidden>
                        <span class="bg-white pr-3">{{ translate('Member Type') }}</span>
                    </h6>
                    <div class="aiz-radio-list" hidden>
                        <label class="aiz-radio">
                            <input type="radio" name="member_type" value="2" onchange="applyFilter()" @if($member_type == 2) checked @endif > {{ translate('Premium Member') }}
                            <span class="aiz-rounded-check"></span>
                        </label>
                        <label class="aiz-radio">
                            <input type="radio" name="member_type" value="1" onchange="applyFilter()"  @if($member_type == 1) checked @endif > {{ translate('Free member') }}
                            <span class="aiz-rounded-check"></span>
                        </label>
                        <label class="aiz-radio">
                            <input type="radio" name="member_type" value="0" @if($member_type == 0) checked @endif> {{ translate('All Member') }}
                            <span class="aiz-rounded-check"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary mt-4">{{ translate('Search') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
