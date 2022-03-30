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
              
                <form enctype="multipart/form-data" action="{{ route('backend.faqs.update', $faqs->id) }}" method="post">
                @method('PATCH')
                @csrf
               
                <div class="form-group row">
                    {{ html()->label(__('Question'))->class('col-sm-2 form-control-label')->for('question') }}
                    <div class="col-sm-10">
                        {{ html()->text('faq_question')
                                ->class('form-control')
                                ->placeholder(__('Question'))
                                ->attribute('maxlength', 191)
                                ->value($faqs->faq_question) 
                                ->required() }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ html()->label(__('Answer'))->class('col-sm-2 form-control-label')->for('answer') }}
                    <div class="col-sm-10">
                        {{ html()->textarea('faq_answer')
                                ->class('form-control')
                                ->id('tinymce')
                                ->placeholder(__('Answer'))
                                //->attribute('maxlength', 191)
                                ->value($faqs->faq_answer) 
                                ->required() }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ html()->label(__('Category'))->class('col-sm-2 form-control-label')->for('answer') }}
                    <div class="col-sm-10">
                    {!! Form::select('category_id', $faqcategry, $faqs->category_id, ['class' => 'form-control']) !!}
                    </div>
                </div>
                            

               
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <x-buttons.create title="{{__('Save')}} {{ ucwords(Str::singular($module_name)) }}">
                                {{__('Save')}}
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
<script type="text/javascript">
        tinymce.init({
            selector: 'textarea#tinymce',
            height: 400,
            setup: function (editor) {
               editor.on('change', function () {
               tinymce.triggerSave();
              });
            },
            menubar: false,
            browser_spellcheck: true
        });
    </script>
@endsection