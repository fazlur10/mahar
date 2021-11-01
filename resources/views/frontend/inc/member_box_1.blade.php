<div class="row no-gutters border border-gray-300 rounded hov-shadow-md mb-4 has-transition position-relative" id="block_id_{{ $member->id }}">
	<div class="col-md-auto">
		<div class="text-center text-md-left pt-3 pt-md-0">
		  @php
			  $profile_picture_show = 'ok';
$profile_picture_privacy = optional($member->member)->profile_picture_privacy;

if(Auth::check() && Auth::user()->user_type == 'admin'){
$profile_picture_show = 'ok';
}
elseif($profile_picture_privacy  == '0')
{
$profile_picture_show = 'no';
}
elseif($profile_picture_privacy == 2)
{
if(Auth::check()){
if(Auth::user()->membership == 1)
{
$profile_picture_show = 'no';
}
}
else{
$profile_picture_show = 'no';
}

}
		  @endphp
			<img
				@if($profile_picture_show == 'ok')
src="{{ uploaded_asset($member->photo) }}"
@else
src="{{ static_asset('assets/img/avatar-place.png') }}"
@endif
onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';"
				class="img-fit mw-100 size-150px size-md-250px rounded-circle md-rounded-0"
			>
		</div>
	</div>
	<div class="col-md position-static d-flex align-items-center">
		<span class="absolute-top-right px-4 py-3">
			@if($member->membership == 1)
			<span class="badge badge-inline badge-info">{{ translate('Free') }}</span>
			@elseif($member->membership == 2)
			<span class="badge badge-inline badge-success">{{ translate('Preminum') }}</span>
			@endif
		</span>
		<div class="px-md-4 p-3 flex-grow-1">

			<h2 class="h6 fw-600 fs-18 text-truncate mb-1">{{ $member->first_name.' '.$member->last_name }}</h2>
			<div class="mb-2 fs-12">
				<span class="opacity-60">{{ translate('Member ID: ') }}</span>
				<span class="ml-4 text-primary">{{ $member->code }}</span>
			</div>
			<table class="w-100 opacity-70 mb-2 fs-12">
				<tr>
					<td class="py-1 w-25">
						<span><i class="las la-birthday-cake fs-20"></i></span>
					</td>
					<td class="py-1 w-25 fw-400">{{ \Carbon\Carbon::parse($member->member->birthday)->age }}</td>
					<td class="py-1 w-25"><span><span><i class="las la-ruler-vertical fs-20"></i></span></td>
					<td class="py-1 w-25 fw-400">
						@if(!empty( $member->physical_attributes->height))
							{{ $member->physical_attributes->height }}
						@endif
					</td>
				</tr>
				<tr>
					<td class="py-1"><span><i class="las la-weight fs-20"></i></span></td>
					<td class="py-1 fw-400">
						@if(!empty($member->physical_attributes->weight))
							{{ $member->physical_attributes->weight }}
						@endif
					</td>
					<td class="py-1"><span><i class="las la-city fs-20"></i></span></td>
					<td class="py-1 fw-400">
						@php
							$present_address    = \App\Models\Address::where('type','present')->where('user_id', $member->id)->first();
						@endphp
						@if(!empty($present_address->city_id))
							{{ $present_address->city->name }}
						@endif
					</td>
				</tr>
				<tr>
					<td class="py-1"><span><i class="las la-ring fs-20"></i></span></td>
					<td class="py-1 fw-400">
						@if($member->member->marital_status_id != null)
							{{ $member->member->marital_status->name }}
						@endif
					</td>
					<td class="py-1"><span><i class="las la-briefcase fs-20"></i></span></td>
					<td class="py-1 fw-400">
						 @php 
						  $careers = \App\Models\Career::where('user_id',$member->id)->get();
						  @endphp
						@foreach ($careers as $key => $career)
						  @if($career->present == 1)
							  {{ $career->designation }}
						  @endif
						@endforeach
					</td>
				</tr>
				<tr>
				<td class="py-1"><span><i class="las la-school fs-20"></span></td>
					<td class="py-1 fw-400">
						@php $educations = \App\Models\Education::where('user_id',$member->id)->get();
			@endphp
			@foreach ($educations as $key => $education)
		 {{ $education->type }}
		 @endforeach
					</td>
					
				</tr>
			</table>
			<div class="row gutters-5 text-center">
				<div class="col">
					<a
					@if (Auth::check())
					href="{{ route('member_profile', $member->id) }}"

					@else
					href="javascript:void(0);" onclick="package_update_alert()"
					@endif
						class="text-reset c-pointer"
					>
						<i class="las la-user fs-20 text-primary"></i>
						<span class="d-block fs-10 opacity-60">{{ translate('Full Profile') }}</span>
					</a>
				</div>
				@if (Auth::check())
				
				<div class="col">
					@php
					  $interest_class    = "text-primary";
					  $do_expressed_interest = \App\Models\ExpressInterest::where('user_id', $member->id)->where('interested_by',Auth::user()->id)->first();
					  $received_expressed_interest = \App\Models\ExpressInterest::where('user_id', Auth::user()->id)->where('interested_by',$member->id)->first();
					  if(empty($do_expressed_interest) && empty($received_expressed_interest))
					  {
						  $interest_onclick  = 1;
						  $interest_text     = translate('Interest');
						  $interest_class    = "text-dark";
					  }
					  elseif(!empty($received_expressed_interest))
					  {
						  $interest_onclick  = 'do_response';
						  $interest_text     = $received_expressed_interest->status == 0 ? translate('Response to Interest') : translate('You Accepted Interest');
					  }
					  else
					  {
						  $interest_onclick  = 0;
						  $interest_text     = $do_expressed_interest->status == 0 ? translate('Interest Expressed') : translate('Interest Accepted');
					  }
					@endphp

					<a id="interest_a_id_{{ $member->id }}"
						@if($interest_onclick == 1)
							onclick="express_interest({{ $member->id }})"
						@elseif($interest_onclick == 'do_response')
							href="{{ route('interest_requests') }}"
						@endif
						class="text-reset c-pointer"
					>
						<i class="la la-heart-o fs-20 text-primary"></i>
						<span id="interest_id_{{ $member->id }}" class="d-block fs-10 opacity-60 {{ $interest_class }}">
							{{ $interest_text }}
						</span>
					</a>
				</div>
				<div class="col">
					@php
					  $shortlist = \App\Models\Shortlist::where('user_id', $member->id)->where('shortlisted_by',Auth::user()->id)->first();
					  if(empty($shortlist)){
						  $shortlist_onclick  = 1;
						  $shortlist_text     = translate('Shortlist');
						  $shortlist_class    = "text-dark";
					  }
					  else{
						  $shortlist_onclick  = 0;
						  $shortlist_text     = translate('Shortlisted');
						  $shortlist_class    = "text-primary";
					  }
					@endphp
					<a id="shortlist_a_id_{{ $member->id }}"
					  @if($shortlist_onclick == 1)
						onclick="do_shortlist({{ $member->id }})"
					  @else
						onclick="remove_shortlist({{ $member->id }})"
					  @endif
						class="text-reset c-pointer"
					>
						<i class="las la-list fs-20 text-primary"></i>
						<span id="shortlist_id_{{ $member->id }}" class="d-block fs-10 opacity-60 {{ $shortlist_class }}">
							{{ $shortlist_text }}
						</span>
					</a>
				</div>
				<div class="col">
					<a onclick="ignore_member({{ $member->id }})" class="text-reset c-pointer">
					  <span class="text-dark">
						<i class="las la-ban fs-20 text-primary"></i>
						<span class="d-block fs-10 opacity-60">{{ translate('Ignore') }}</span>
					  </span>
					</a>
				</div>
				<div class="col">
					@php
					  $profile_reported = \App\Models\ReportedUser::where('user_id', $member->id)->where('reported_by',Auth::user()->id)->first();
					  if(empty($profile_reported)){
						  $report_onclick  = 1;
						  $report_text     = translate('Report');
						  $report_class    = "text-dark";
					  }
					  else{
						  $report_onclick  = 0;
						  $report_text     = translate('Reported');
						  $report_class    = "text-primary";
					  }
					@endphp
					<a id="report_a_id_{{ $member->id }}"
					  @if($report_onclick == 1)
						onclick="report_member({{ $member->id }})"
					  @endif
						class="text-reset c-pointer"
					>
					  <span id="report_id_{{ $member->id }}" class="{{ $report_class }}">
						<i class="las la-info-circle fs-20 text-primary"></i>
						<span class="d-block fs-10 opacity-60">{{ $report_text }}</span>
					  </span>
					</a>
				</div>
				 @else
				 <div class="col">
					<a id="interest_a_id" class="text-reset c-pointer"
					 href="javascript:void(0);" onclick="package_update_alert()">
					 <i class="la la-heart-o fs-20 text-primary"></i>
					 <span class="d-block fs-10 opacity-60">{{ translate('Interest') }}</span>
					</a>
				</div>
				<div class="col">
					<a id="shortlist_a_id" class="text-reset c-pointer"
					 href="javascript:void(0);" onclick="package_update_alert()">
					 <i class="las la-list fs-20 text-primary"></i>
					 <span class="d-block fs-10 opacity-60">{{ translate('Shortlist') }}</span>
					</a>
				</div>
				<div class="col">
					<a id="ignore_a_id" class="text-reset c-pointer"
					 href="javascript:void(0);" onclick="package_update_alert()">
					 <i class="las la-ban fs-20 text-primary"></i>
					 <span class="d-block fs-10 opacity-60">{{ translate('Ignore') }}</span>
					</a>
				</div>
				<div class="col">
					<a id="report_a_id" class="text-reset c-pointer"
					 href="javascript:void(0);" onclick="package_update_alert()">
					 <i class="las la-info-circle fs-20 text-primary"></i>
					 <span class="d-block fs-10 opacity-60">{{ translate('Report') }}</span>
					</a>
				</div>
				  @endif
				
			</div>
		</div>
	</div>
</div>
@section('script')
<script type="text/javascript">

    

    // Full Profile view
    function package_update_alert(){
      $('.package_update_alert_modal').modal('show');
    }

    //express interest
    @if (Auth::check())
    var package_validity = {{ package_validity(Auth::user()->id) }};
    var remaining_interest = {{ get_remaining_value(Auth::user()->id,'remaining_interest') }};
    @endif
    function express_interest(id)
    {
        if( package_validity == 0 || remaining_interest < 1){
            $('.package_update_alert_modal').modal('show');
        }
        else {
          $('.confirm_modal').modal('show');
          $("#confirm_modal_title").html("{{ translate('Confirm Express Interest!') }}");
          $("#confirm_modal_content").html("<p class='fs-14'>{{translate('Remaining Express Interest')}}: "+remaining_interest+" {{translate('Times')}}</p><small class='text-danger'>{{translate('**N.B. Expressing An Interest Will Cost 1 From Your Remaining Interests**')}}</small>");
          $("#confirm_button").attr("onclick","do_express_interest("+id+")");
        }
    }
    function do_express_interest(id)
    {
        $("#interest_a_id_"+id).removeAttr("onclick");
        $("#interest_id_"+id).html("{{ translate('Processing') }}..");
        $.post('{{ route('express-interest.store') }}',
          {
            _token: '{{ csrf_token() }}',
            id: id
          },
          function (data) {
              // console.log(data);
            if (data == 1) {
              $('.confirm_modal').modal('toggle');
              $("#interest_id_"+id).html("{{translate('Interest Expressed')}}");
              $("#interest_id_"+id).attr("class","d-block fs-10 opacity-60 text-primary");
              AIZ.plugins.notify('success', '{{translate('Interest Expressed Sucessfully')}}');
            }
            else {
                $("#interest_id_"+id).html("{{translate('Interest')}}");
                AIZ.plugins.notify('danger', '{{translate('Something went wrong')}}');
            }
          }
        );
    }
    // Shortlist
    function do_shortlist(id){
        $("#shortlist_a_id_"+id).removeAttr("onclick");
        $("#shortlist_id_"+id).html("{{ translate('Shortlisting') }}..");
        $.post('{{ route('member.add_to_shortlist') }}',
          {
            _token: '{{ csrf_token() }}',
            id: id
          },
          function (data) {
            if (data == 1) {
              $("#shortlist_id_"+id).html("{{translate('Shortlisted')}}");
              $("#shortlist_id_"+id).attr("class","d-block fs-10 opacity-60 text-primary");
              $("#shortlist_a_id_"+id).attr("onclick","remove_shortlist("+id+")");
              AIZ.plugins.notify('success', '{{translate('You Have Shortlisted This Member.')}}');
            }
            else {
                $("#shortlist_id_"+id).html("{{translate('Shortlist')}}");
                AIZ.plugins.notify('danger', '{{translate('Something went wrong')}}');
            }
          }
        );
    }

    function remove_shortlist(id) {
        $("#shortlist_a_id_"+id).removeAttr("onclick");
        $("#shortlist_id_"+id).html("{{ translate('Removing') }}..");
        $.post('{{ route('member.remove_from_shortlist') }}',
          {
            _token: '{{ csrf_token() }}',
            id: id
          },
          function (data) {
            if (data == 1) {
              $("#shortlist_id_"+id).html("{{translate('Shortlist')}}");
              $("#shortlist_id_"+id).attr("class","d-block fs-10 opacity-60 text-dark");
              $("#shortlist_a_id_"+id).attr("onclick","do_shortlist("+id+")");
              AIZ.plugins.notify('success', '{{translate('You Have Removed This Member From Your Shortlist.')}}');
            }
            else {
              AIZ.plugins.notify('danger', '{{translate('Something went wrong')}}');
            }
          }
        );
      }

    // Ignore
    function ignore_member(id) {
        $('.ignore_member_modal').modal('show');
        $("#ignore_button").attr("onclick","do_ignore("+id+")");
    }

    function do_ignore(id) {
        $.post('{{ route('member.add_to_ignore_list') }}',
            {
            _token: '{{ csrf_token() }}',
            id: id
            },
            function (data) {
                if (data == 1) {
                    $("#block_id_"+id).hide();
                    $('.ignore_member_modal').modal('toggle');
                    AIZ.plugins.notify('success', '{{translate('You Have Ignored This Member.')}}');
                }
                else {
                    AIZ.plugins.notify('danger', '{{translate('Something went wrong')}}');
                }
            }
        );
    }

    function report_member(id) {
        $('.report_modal').modal('show');
        $('#member_id').val(id);
    }

    function submitReport(){
        $('#report-modal-form').submit();
    }

</script>
<style>
	.slick-slide img {
    display: inline-block !important;
}
	</style>
@endsection
