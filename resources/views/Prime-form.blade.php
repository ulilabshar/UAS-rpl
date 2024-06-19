<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Prime Number Finder</h2>
    <form action="{{ route('find.primes') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start">Start Number:</label>
            <input type="number" class="form-control" id="start" name="start" required>
        </div>
        <div class="form-group">
            <label for="end">End Number:</label>
            <input type="number" class="form-control" id="end" name="end" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if(isset($primes))
        <h3 class="mt-4">Prime Numbers between {{ $start }} and {{ $end }}:</h3>
        <ul>
            @foreach($primes as $prime)
                <li>{{ $prime }}</li>
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>
