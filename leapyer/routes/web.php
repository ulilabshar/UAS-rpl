use App\Http\Controllers\LeapYearController;

Route::get('/', [LeapYearController::class, 'index']);
Route::post('/calculate', [LeapYearController::class, 'calculateLeapYears']);
