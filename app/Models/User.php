<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use function Illuminate\Events\queueable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
    * Get the products the user has added.
    */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

     /**
     * Get the reviews the user has made.
     */
    public function reviews()
    {
       return $this->hasMany(Review::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }


/**
 * The "booted" method of the model.
 *
 * @return void
 */
protected static function booted()
{
    /*static::updated(queueable(function ($customer) {
        $customer->syncStripeCustomerDetails();
    }));*/
}
/**
 * Get the customer name that should be synced to Stripe.
 *
 * @return string|null
 */
/*
public function stripeName()
{
    return $this->company_name;
}
*/
}
