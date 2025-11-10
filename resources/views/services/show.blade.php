<!DOCTYPE html>
<html>
<head>
    <title>{{ $service->name }}</title>
</head>
<body>
    <h1>{{ $service->name }}</h1>
    <p>{{ $service->description }}</p>
    <p>Duración: {{ $service->duration }} minutos</p>
    <p>Precio: €{{ number_format($service->price, 2) }}</p>

    <h2>Reserva este servicio</h2>

    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">

        <label>Nombre:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Fecha:</label><br>
        <input type="date" name="date" required><br><br>

        <label>Hora:</label><br>
        <input type="time" name="time" required><br><br>

        <button type="submit">Confirmar reserva</button>
    </form>
    <br><br>
    <a href="{{ route('services.index') }}">Volver</a>
</body>
</html>
