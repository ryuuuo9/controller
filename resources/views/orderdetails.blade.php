<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Order Details</h2>
    <input type="text" class="form-control mb-2" value="{{ $transNo }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $orderNo }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $itemId }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $name }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $price }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $qty }}" readonly>
</body>
</html>


