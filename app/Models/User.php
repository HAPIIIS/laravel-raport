<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'nisn';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nisn',
        'name',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["siswa", "admin"][$value],
        );
    }

    public $timestamps = false;

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nisn', 'like', '%'. $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('role', 'like', '%' . $search . '%');
        });
    }

    public function setPasswordAttribute($password){

        $this->attributes['password'] = Hash::make($password);
    }

    public function matematika(){
        return $this->belongsTo(Matematika::class, 'nisn', 'nisn');
    }
    public function arab(){
        return $this->belongsTo(Arab::class, 'nisn', 'nisn');
    }
    public function inggris(){
        return $this->belongsTo(Inggris::class, 'nisn', 'nisn');
    }
    public function ipa(){
        return $this->belongsTo(IPA::class, 'nisn', 'nisn');
    }
    public function ips(){
        return $this->belongsTo(IPS::class, 'nisn', 'nisn');
    }
    public function pai(){
        return $this->belongsTo(PAI::class, 'nisn', 'nisn');
    }
    public function pjok(){
        return $this->belongsTo(PJOK::class, 'nisn', 'nisn');
    }
    public function pkn(){
        return $this->belongsTo(PKN::class, 'nisn', 'nisn');
    }
    public function sbdp(){
        return $this->belongsTo(SBDP::class, 'nisn', 'nisn');
    }
    public function sunda(){
        return $this->belongsTo(Sunda::class, 'nisn', 'nisn');
    }
    public function tik(){
        return $this->belongsTo(TIK::class, 'nisn', 'nisn');
    }
    public function tahfidz(){
        return $this->belongsTo(Tahfidz::class, 'nisn', 'nisn');
    }
    public function hadis(){
        return $this->belongsTo(Hadis::class, 'nisn', 'nisn');
    }
}
