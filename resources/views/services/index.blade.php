<!DOCTYPE html>
<html>
<head>
    <title>Servicios disponibles</title>
</head>
<body>
    <h1>Servicios disponibles</h1>

    @foreach($services as $service)
        <div>
            <h3>{{ $service->name }}</h3>
            <p>{{ $service->description }}</p>
            <p>Precio: €{{ number_format($service->price, 2) }}</p>
            <a href="{{ route('services.show', $service->id) }}">Ver detalles</a>
        </div>
        <hr>
    @endforeach
</body>
</html>
