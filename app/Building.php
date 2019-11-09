<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_building
 * @property integer $id_owner
 * @property string $name_building
 * @property string $address_building
 * @property integer $cost
 * @property int $capacity
 * @property string $description
 * @property string $files
 * @property string $criteria
 * @property boolean $submission
 * @property boolean $verif
 * @property boolean $edit
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Rental[] $rentals
 */
class Building extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_building';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_owner', 'name_building', 'address_building', 'cost', 'capacity', 'description', 'files', 'criteria', 'submission', 'verif', 'edit', 'created_at', 'updated_at'];

    /**
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_owner', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentals()
    {
        return $this->hasMany('App\Rental', 'building', 'id_building');
    }
}