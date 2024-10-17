<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Dashboard</title>
   <style>
    .meal-card {
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    text-align: center;
    cursor: pointer;
    margin-bottom: 20px;
    transition: transform 0.2s;
}

.meal-card:hover {
    transform: scale(1.05);
}

.meal-image {
    width: 100%;
    height: auto;
}

.meal-name {
    font-size: 1.5rem;
    margin: 10px 0;
}

.modal {
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    text-align: center;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
   </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
