<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello {{ $userCharacter->GetName() }} you are {{ $userCharacter->GetAge() }}</h1>

    <form action="/character" method="POST">
        @csrf
        <label for="ageInput"> Age : </label><br>
        <input type="text" id="ageInput" name="ageInput"> <br><br>
        <label for="nameInput"> Name : </label><br>
        <input type="text" id="nameInput" name="nameInput"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>