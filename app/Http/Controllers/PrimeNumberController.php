namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function findPrimes(Request $request)
    {
        $request->validate([
            'start' => 'required|integer',
            'end' => 'required|integer|gte:start',
        ]);

        $start = $request->input('start');
        $end = $request->input('end');
        $primes = $this->getPrimes($start, $end);

        return view('welcome', compact('primes', 'start', 'end'));
    }

    private function isPrime($n)
    {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    private function getPrimes($start, $end)
    {
        $primes = [];
        for ($num = $start; $num <= $end; $num++) {
            if ($this->isPrime($num)) {
                $primes[] = $num;
            }
        }
        return $primes;
    }
}
