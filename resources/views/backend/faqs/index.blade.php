@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ $module_title }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ $module_title }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4 class="card-title mb-0">
                    <i class="{{ $module_icon }}"></i> {{ $module_title }}
                    
                    <small class="text-muted">{{ __($module_action) }}</small>
                </h4>
                <div class="small text-muted">
                    @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
               <div class="float-right">
                     <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}" />
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class="row mt-4">
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                @lang('Question')
                            </th>

                            <th>
                                @lang('Answer')
                            </th>
                           
                            <th>
                                @lang('Created At')
                            </th>
                            <th class="text-right">
                                @lang('Action')
                            </th>
                        </tr>
                    </thead>

                 <tbody>
                    @foreach($data as $key=>$row)
                        <?php
                        $row_class = '';
                        $span_class = '';
                       
                        ?>
                        <tr class="{{$row_class}}">
                            <td>
                                  <span class="{{$span_class}}">
                                        {{ $row->faq_question }}
                                    </span>                                
                            </td>

                            <td>
                                   <span class="{{$span_class}}">
                                        {{ strip_tags($row->faq_answer)}}
                                    </span>                                
                            </td>

                            <td>
                                 <span class="{{$span_class}}">
                                        {{ $row->created_at}}
                                    </span>
                            </td>

                          <td class="text-right">
                             <a href='{!!route("backend.$module_name.edit", $row->id)!!}' class='btn btn-sm btn-success mt-1' data-toggle="tooltip" title="@lang('Edit') {{ ucwords(Str::singular($module_name)) }}"><i class="fas fa-wrench"></i></a>
                          
                             <a href="{!!route('backend.faqs.destroy', $row->id)!!}" class="btn btn-danger btn-sm mt-1" data-method="DELETE" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}" data-confirm="Are you sure?"><i class="fas fa-trash-alt"></i></a> 
                          </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                 
                </div>
            </div>
            <div class="col-5">
                <div class="float-right">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
