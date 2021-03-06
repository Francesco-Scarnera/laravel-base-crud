<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav-brand">Fleet</div>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cars.index') }}">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cars.create') }}">Add car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('salesmen.index') }}">Salesmen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('garages.index') }}">Garage</a>
                </li>
            </ul>
        </nav>
    </header>