<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_user
 * @property integer $role
 * @property string $name
 * @property string $company_name
 * @property string $user_address
 * @property string $email
 * @property string $phone
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Role $role
 * @property Building[] $buildings
 * @property Rental[] $rentals
 */
class User extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['role', 'name', 'company_name', 'user_address', 'email', 'phone', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'role', 'id_role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buildings()
    {
        return $this->hasMany('App\Building', 'id_owner', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentals()
    {
        return $this->hasMany('App\Rental', 'loaner', 'id_user');
    }
}
