namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'Building_name',
        'opinion'
        ];



}
