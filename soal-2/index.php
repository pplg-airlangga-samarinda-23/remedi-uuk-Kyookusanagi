<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="header">
<h1>Soal No. 2</h1>
  </div>
<body>
<div class="form-container">
        <div class="form-group">
            <label for="siswa1">Siswa 1</label>
            <input type="text" id="siswa1">
        </div>
        <div class="form-group">
            <label for="siswa2">Siswa 2</label>
            <input type="text" id="siswa2">
        </div>
        <div class="form-group">
            <label for="siswa3">Siswa 3</label>
            <input type="text" id="siswa3">
        </div>
        <div class="form-group">
            <label for="siswa4">Siswa 4</label>
            <input type="text" id="siswa4">
        </div>
        <div class="form-group">
            <label for="siswa5">Siswa 5</label>
            <input type="text" id="siswa5">
        </div>
        <div class="form-group">
            <button onclick="calculateAverage()">Hitung</button>
        </div>
        <div class="form-group">
            <label for="hasil">Hasil</label>
            <input type="text" id="hasil" readonly>
        </div>
    </div>
    <div class="footer">
        Copyright 2024
    </div>
</body>
<script>
        function calculateAverage() {
            var siswa1 = parseFloat(document.getElementById('siswa1').value) || 0;
            var siswa2 = parseFloat(document.getElementById('siswa2').value) || 0;
            var siswa3 = parseFloat(document.getElementById('siswa3').value) || 0;
            var siswa4 = parseFloat(document.getElementById('siswa4').value) || 0;
            var siswa5 = parseFloat(document.getElementById('siswa5').value) || 0;

            var average = (siswa1 + siswa2 + siswa3 + siswa4 + siswa5) / 5;
            document.getElementById('hasil').value = average;
        }
    </script>
</html>