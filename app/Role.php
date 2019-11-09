<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_role
 * @property string $role_name
 * @property string $created_at
 * @property string $updated_at
 * @property User[] $users
 */
class Role extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_role';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['role_name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'role', 'id_role');
    }
}
