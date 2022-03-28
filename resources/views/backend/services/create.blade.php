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
    <div class="row test">
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
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <x-buttons.return-back />
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">

               <!-- {{ html()->form('POST', route('backend.services.store'))->class('form-horizontal')->open() }}-->
                <form enctype="multipart/form-data" action="{{ route('backend.services.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group row">
                    {{ html()->label(__('Title'))->class('col-sm-2 form-control-label')->for('service_title') }}
                    <div class="col-sm-10">
                        {{ html()->text('service_title')
                                ->class('form-control')
                                ->placeholder(__('Title'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ html()->label(__('Description'))->class('col-sm-2 form-control-label')->for('service_description') }}
                    <div class="col-sm-10">
                        {{ html()->textarea('service_description')
                                ->class('form-control')
                                ->placeholder(__('Description'))
                                //->attribute('maxlength', 191)
                                ->required() }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ html()->label(__('Image'))->class('col-sm-2 form-control-label')->for('service_image') }}
                    <div class="col-sm-10">                        
                          <div class="form-group">
                               <input type="file" name="service_image" placeholder="Choose image" id="image">
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                         </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <x-buttons.create title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}">
                                {{__('Create')}}
                            </x-buttons.create>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <div class="form-group">
                                <x-buttons.cancel />
                            </div>
                        </div>
                    </div>
                </div>
               <!-- {{ html()->form()->close() }}-->
             </form>

            </div>
        </div>

    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">

                </small>
            </div>
        </div>
    </div>
</div>

@endsection