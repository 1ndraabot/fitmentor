namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunMentor extends Authenticatable
{
    protected $table = 'akun_mentor';
    protected $primaryKey = 'id_akun';
    
    protected $fillable = [
        'email',
        'password',
        'nama'
    ];

    protected $hidden = [
        'password'
    ];
}
