Task1:
composer global require laravel/installer

laravel new your-project-name

Task2:
php artisan make:controller UserController

Task3:
use App\Http\Controllers\UserController;

Route::get('/hello', [UserController::class, 'hello']);




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello()
    {
        return 'Hello, Laravel!';
    }
}

Task4:
php artisan serve