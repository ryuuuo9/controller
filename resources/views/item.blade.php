<!DOCTYPE html>
<html>
<head>
    <title>Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Item Info</h2>
    <input type="text" class="form-control mb-2" value="{{ $itemNo }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $name }}" readonly>
    <input type="text" class="form-control mb-2" value="{{ $price }}" readonly>
</body>
</html>


