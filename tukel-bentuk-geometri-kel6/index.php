<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Geometri</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Kalkulator Geometri</h2>
        <select id="shape" onchange="rumus()">
            <option value="lingkaran">Luas Lingkaran</option>
            <option value="persegi">Luas Persegi</option>
            <option value="segitiga">luas Segitiga</option>
        </select>
        <div id="input">
        </div>
        <div id="output">
        </div>
    </div>

    <script src="function.js"></script>
</body>

</html>