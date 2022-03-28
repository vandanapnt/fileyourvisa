<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Auth;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Response;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log;

class ServicesController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Services';

        // module name
        $this->module_name = 'services';

        // directory path of the module
        $this->module_path = 'services';

        // module icon
        $this->module_icon = 'c-icon fas fa-bell';

        // module model name, path
        $this->module_model = "App\Models\Service";
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

        $data = Service::all();
        
        //$unread_notifications_count = auth()->user()->unreadNotifications()->count();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

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

        $$module_name_singular = Notification::where('id', '=', $id)->where('notifiable_id', '=', auth()->user()->id)->first();

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

            'service_title'=> 'required|min:3|max:191',
            'service_description' => 'required|min:3',
            'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

         if($request->hasfile('service_image'))
         {
             $imgfile = $request->file('service_image');
             $extn = $imgfile->getClientOriginalExtension();
            // $filename = 'service_'.time().'.'.$extn;
             $filename = $imgfile->getClientOriginalName();
             $imgfile->move('uploads/services/',$filename);
             //$request->service_image = $filename;
             //$request->merge(['service_image' => $filename]);                 
         } else { $filename = ''; }



        //$data_array = $request->all();
              
        // $$module_name_singular = Service::create($request->all()); 
          //You should store only filename not path in db
            Service::create([
                    'service_title' => $request->service_title,
                    'service_description' => $request->service_description,
                    'service_image' => $filename 
                    
                ]);
            

        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Created")->important();
       
       // Log::info(label_case($module_title.' '.$module_action)." | '".$$module_name_singular->name.'(ID:'.$$module_name_singular->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$module_name");
    
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

        $service = Service::find($id);
        return view("backend.$module_name.edit", compact('service','module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular'));
    }
   
    public function update(Request $request, $id)
    {
        $module_name = $this->module_name;
        $Service = Service::find($id);
        $Service->service_title = $request->input('service_title');
        $Service->service_description = $request->input('service_description');
        if($request->hasfile('service_image')){
            $image = $request->file('service_image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/services'), $filename);
            $service->service_image =   $request->file('service_image')->getClientOriginalName();
        }
       
        $Service->update();
        Flash::success("<i class='fas fa-check'></i> Service Updated")->important();
        return redirect("admin/$module_name");
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
        return redirect("admin/$module_name");
    }   
    
}
