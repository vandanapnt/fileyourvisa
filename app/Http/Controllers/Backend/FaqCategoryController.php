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

class FaqCategoryController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'faqscategory';

        // module name
        $this->module_name = 'faqscategory';

        // directory path of the module
        $this->module_path = 'faqscategory';

        // module icon
        $this->module_icon = 'c-icon cil-list-numbered';

        // module model name, path
        $this->module_model = "App\Models\FaqCategory";
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

        $data = FaqCategory::all();
        
       
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

        //$roles = Role::get();
        //$permissions = Permission::select('name', 'id')->get();

        return view(
            "backend.$module_name.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular')
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

            'name'=> 'required|min:3|max:191'
           
            
        ]);
        
        //$data_array = $request->all();
              
        // $$module_name_singular = Service::create($request->all()); 
          //You should store only filename not path in db
          FaqCategory::create([
                    'name' => $request->name
                                
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

        $faqcat = FaqCategory::find($id);
        return view("backend.$module_name.edit", compact('faqcat','module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular'));
    }
   
    public function update(Request $request, $id)
    {
        $module_name = $this->module_name;
        $faqcat = FaqCategory::find($id);

        $faqcat->name = $request->input('name');
               
        $faqcat->update();
        Flash::success("<i class='fas fa-check'></i> Faq Category Updated")->important();
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
       
        flash('<i class="fas fa-check"></i>  Successfully Deleted!')->success();
        return redirect("controlroom/faqscategory");
    }   
    
}
