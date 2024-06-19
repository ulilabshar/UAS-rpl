<!DOCTYPE html>
<html>
<head>
    <title>Date Form</title>
</head>
<body>
    <h1>Date Form</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/process" method="POST">
        @csrf
        <div>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required>
        </div>
        <div>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required>
        </div>
        <button type="submit">Submit</button>
    </form>

    @if (isset($dates))
        <h2>Dates:</h2>
        <ul>
            @foreach ($dates as $date)
                <li>{{ $date }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
