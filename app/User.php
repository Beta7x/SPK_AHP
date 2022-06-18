<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // JABATAN
    const TIM_SPK_ROLE = 'Tim_SPK';
    const ADMIN_ROLE = 'Admin';
    const SISWA_ROLE = 'Siswa';

    // JENIS KELAMIN
    const MALE_TYPE = "Pria";
    const FEMALE_TYPE = "Wanita";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip', 'nama', 'username', 'password', 'jabatan', 'jenis_kelamin'
    ];

    // protected $with = ['penilaian'];


    public function penilaian()
    {
        return $this->hasMany('App\Penilaian');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $unique = [
    //     'nip', 'username',
    // ];

    public static function formatJabatan($jabatan)
    {
        $jabatan_name = '';
        switch ($jabatan) {
            case self::ADMIN_ROLE:
                $jabatan_name = 'Admin';
                break;
            case self::TIM_SPK_ROLE:
                $jabatan_name = 'Tim SPK';
                break;
            default:
                $jabatan_name = $jabatan;
                break;
        }
        return $jabatan_name;
    }
}
