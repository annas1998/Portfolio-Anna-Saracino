<!DOCTYPE html>
<html>
<head>
    <title>Nuovo Messaggio di Contatto</title>
</head>
<body>
    <h1>Nuovo Messaggio di Contatto</h1>
    <p><strong>Nome:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Telefono:</strong> {{ $formData['phone'] }}</p>
    <p><strong>Messaggio:</strong> {{ $formData['message'] }}</p>
</body>
</html>
