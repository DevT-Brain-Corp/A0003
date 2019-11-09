<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_payment
 * @property integer $rental
 * @property string $day_payment
 * @property integer $salary
 * @property string $approvement
 * @property string $created_at
 * @property string $updated_at
 * @property Rental $rental
 */
class Payment extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_payment';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['rental', 'day_payment', 'salary', 'approvement', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rental()
    {
        return $this->belongsTo('App\Rental', 'rental', 'id_rental');
    }
}
