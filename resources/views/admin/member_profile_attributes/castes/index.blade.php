@extends('admin.layouts.app')
@section('content')
<div class="aiz-titlebar mt-2 mb-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{translate('Castes')}}</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="@if(auth()->user()->can('add_caste')) col-lg-7 @else col-lg-12 @endif">
        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">{{ translate('All Castes') }}</h5>
                </div>
                <div class="col-md-4">
                    <form class="" id="sort_casts" action="" method="GET">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{translate('Name')}}</th>
                            <th data-breakpoints="md">{{translate('Religion')}}</th>
                            <th class="text-right" width="20%">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($castes as $key => $caste)
                            <tr>
                                <td>{{ ($key+1) + ($castes->currentPage() - 1)*$castes->perPage() }}</td>
                                <td>{{$caste->name}}</td>
                                <td>{{$caste->religion->name}}</td>
                                <td class="text-right">
                                    @can('edit_caste')
                                        <a href="{{ route('castes.edit', encrypt($caste->id)) }}" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="{{ translate('Edit') }}">
                                            <i class="las la-edit"></i>
                                        </a>
                                    @endcan
                                    @can('delete_caste')
                                        <a href="javascript:void(0);" data-href="{{route('castes.destroy', $caste->id)}}" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" title="{{ translate('Delete') }}">
                                            <i class="las la-trash"></i>
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $castes->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
    @can('add_caste')
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-md-0 h6">{{ translate('Add New Caste') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('castes.store') }}" method="POST" >
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">{{translate('Religion')}}</label>
                            <select class="form-control aiz-selectpicker" data-live-search="true" name="religion" required>
                                @foreach($religions as $religion)
                                    <option value="{{$religion->id}}">{{ $religion->name }}</option>
                                @endforeach
                            </select>
                            @error('religion')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">{{translate('Caste Name')}}</label>
                            <input type="text" id="name" name="name" placeholder="{{ translate('Caste Name') }}"
                                   class="form-control" required>
                           @error('name')
                               <small class="form-text text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Save New Caste')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan
</div>
@endsection
@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
    <script>
      function sort_casts(el){
          $('#sort_casts').submit();
      }
    </script>
@endsection
