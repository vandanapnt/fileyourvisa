<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Auth;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Response;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log;

class FaqController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Faqs';

        // module name
        $this->module_name = 'faqs';

        // directory path of the module
        $this->module_path = 'faqs';

        // module icon
        $this->module_icon = 'c-icon cil-list-numbered';

        // module model name, path
        $this->module_model = "App\Models\Faq";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';
        
         $$module_name = '';

         $data = Faq::all();
                
        //Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'data','module_path', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

       // $$module_name_singular = Notification::where('id', '=', $id)->where('notifiable_id', '=', auth()->user()->id)->first();

        if ($$module_name_singular) {
            if ($$module_name_singular->read_at == '') {
                $$module_name_singular->read_at = Carbon::now();
                $$module_name_singular->save();
            }
        } else {
            Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');
            abort(404);
        }

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }


    /**
     * Create Service
     * 
     * @return Response
     *  
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        //$permissions = Permission::select('name', 'id')->get();

        $faqcategry  =  FaqCategory::pluck('name', 'id')->toArray(); 

        return view(
            "backend.$module_name.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular' ,'faqcategry')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $request->validate([

            'faq_question'=> 'required|min:3|max:191',
            'faq_answer' => 'required|min:3'            
            
        ]);
         
        
          //You should store only filename not path in db
            Faq::create([
                    'faq_question' => $request->faq_question,
                    'faq_answer' =>  $request->faq_answer,
                    'category_id' => $request->category_id
                    
                ]);            

        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Created")->important();
       
       // Log::info(label_case($module_title.' '.$module_action)." | '".$$module_name_singular->name.'(ID:'.$$module_name_singular->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("controlroom/$module_name");
    
    }

    /**
     * Edit Service
     * 
     * @return Response
     *  
     */
    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $faqcategry  =  FaqCategory::pluck('name', 'id')->toArray(); 

        $faqs = faq::find($id);
        return view("backend.$module_name.edit", compact('faqcategry', 'faqs','module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular'));
    }
   
    public function update(Request $request, $id)
    {
        $module_name = $this->module_name;
        $faq= Faq::find($id);
        $faq->faq_question = $request->input('faq_question');
        $faq->faq_answer  = $request->input('faq_answer');
        $faq->category_id = $request->category_id;
        
        $faq->update();
        Flash::success("<i class='fas fa-check'></i> Faq Updated")->important();
        return redirect("controlroom/$module_name");
    }   
    /**
     * Delete  the Services
     *
     * @param int $id
     *
     * @return Response
     */

    public function destroy( $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';
     
        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();
       
        flash('<i class="fas fa-check"></i> Service Successfully Deleted!')->success();
        return redirect("controlroom/$module_name");
    }   
    
}
