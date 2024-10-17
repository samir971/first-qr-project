
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الوجبات</title>
    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">عرض الوجبات</h1>

    <a href="{{ route('meals.create') }}" class="btn btn-primary mb-3">إضافة وجبة جديدة</a>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الوصف</th>
                <th>السعر</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($meals as $meal)
                <tr>
                    <td>{{ $meal->name }}</td>
                    <td>{{ $meal->description }}</td>
                    <td>{{ $meal->price }} </td>
             
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        @foreach($meals as $meal)
        <div class="col-md-4">
            <div class="meal-card" onclick="showDetails({{ $meal->id }})">
                <img src="{{ asset('images/meals/' . $meal->image) }}" alt="{{ $meal->name }}" class="meal-image">
                <h3 class="meal-name">{{ $meal->name }}</h3>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

