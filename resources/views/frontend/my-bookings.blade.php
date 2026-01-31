<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Bookings</title>
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h2 class="text-center mb-4">Your Bookings</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(isset($bookings) && count($bookings) > 0)
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Car Type</th>
                    <th>Pick Up</th>
                    <th>Drop Off</th>
                    <th>Pick Up Date & Time</th>
                    <th>Drop Off Date & Time</th>
                    <th>Booked On</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $key => $b)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $b->car_type }}</td>
                        <td>{{ $b->pickup_location }}</td>
                        <td>{{ $b->dropoff_location }}</td>
                        <td>{{ $b->pickup_date }} {{ $b->pickup_time }}</td>
                        <td>{{ $b->dropoff_date }} {{ $b->dropoff_time }}</td>
                        <td>{{ $b->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">You have no bookings yet.</p>
    @endif

    <div class="text-center mt-4">
        <a href="/book-now" class="btn btn-primary">Book Another Car</a>
    </div>
</div>
</body>
</html>
