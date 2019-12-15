<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 08 Jan 2019 17:05:52 +0000.
 */

namespace App\Models;
use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Reliese\Database\Eloquent\Model as Eloquent;
use JWTAuth;

class BaseModel extends Eloquent
{
    //use Notifiable;
    use SoftDeletes;
    use  CausesActivity;
    protected $enableLoggingModelsEvents = false;


    public static $logFillable =  true;
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $user = Auth::id();
            activity($model->getTable())
                ->performedOn($model)
                ->causedBy($user)
                ->withProperties($model->toArray())
                ->log('Account Created');
        });

        static::deleting(function ($model) {
            $user = Auth::id();
            activity($model->getTable())
                ->performedOn($model)
                ->causedBy($user)
                ->withProperties($model->toArray())
                ->log('Account Deleted');
        });

        static::updating(function ($model) {
            $user = Auth::id();
            activity($model->getTable())
                ->performedOn($model)
                ->causedBy($user)
                ->withProperties(['attributes' =>$model->toArray(),
                    'old' => $model->getOriginal()
                ])
                ->log('Account updated');
        });

    }
}
