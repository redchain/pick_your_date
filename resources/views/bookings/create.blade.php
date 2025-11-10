<!DOCTYPE html>
<html>
<head>
    <title>Reservar servicio</title>
</head>
<body>
    <h1>Crear una reserva</h1>

    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service_id }}">

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
</body>
</html>
