namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DateController extends Controller
{
    public function index()
    {
        return view('date-form');
    }

    public function process(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        $dates = [];
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            if ($date->isSaturday() || $date->isSunday()) {
                $dates[] = $date->format('l, d F Y');
            }
        }

        return view('date-form', compact('dates'));
    }
}
