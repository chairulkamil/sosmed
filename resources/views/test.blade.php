<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button id="btn">click me</button>
</body>

<script>
    const btn = document.getElementById('btn');
    btn.addEventListener('click', function(){
        swal("Here's the title!", "...and here's the text!");
    });
</script>
</html>