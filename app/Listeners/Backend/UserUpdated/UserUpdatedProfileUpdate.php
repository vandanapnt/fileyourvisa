<?php

namespace App\Listeners\Backend\UserUpdated;

use App\Events\Backend\UserUpdated;
use App\Models\Userprofile;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUpdatedProfileUpdate implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //            
    }

    /**
     * Handle the event.
     *
     * @param UserUpdated $event
     *
     * @return void
     */
    public function handle(UserUpdated $event)
    {
        $user = $event->user;
       // $this->id = $user->id;
        //$this->name = $user->name;
        
        $userprofile = Userprofile::where('user_id', $user->id)->first();
       //var_dump($user);  echo  $this->name;
       
        $userprofile->name = $user->name;
        $userprofile->first_name = $user->first_name;
        $userprofile->last_name = $user->last_name;
        $userprofile->username = $user->username;
        $userprofile->email = $user->email;
        $userprofile->mobile = $user->mobile;
        $userprofile->gender = $user->gender;
        $userprofile->date_of_birth = $user->date_of_birth;
        $userprofile->avatar = $user->avatar;
        $userprofile->status = $user->status;
        $userprofile->updated_at = $user->updated_at;
        $userprofile->updated_by = $user->updated_by;
        $userprofile->deleted_at = $user->deleted_at;
        $userprofile->deleted_by = $user->deleted_by;
        $userprofile->save();

        // Clear Cache
        \Artisan::call('cache:clear');
    }
}
