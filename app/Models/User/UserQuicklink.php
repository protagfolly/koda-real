<?php

namespace App\Models\User;

use App\Models\Model;

class UserQuicklink extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'url', 'sort',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_quicklinks';

    /**
     * Validation rules for character creation.
     *
     * @var array
     */
    public static $createRules = [
        'name' => 'required',
        'url' => 'url|nullable',
    ];

    /**
     * Validation rules for character updating.
     *
     * @var array
     */
    public static $updateRules = [
        'link_name' => 'required',
        'link_url' => 'url|nullable',
    ];

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get the user these quicklinks belong to.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
