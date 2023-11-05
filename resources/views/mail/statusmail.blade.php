<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition Submition Confirmation Mail</title>
</head>
<body>
    <p>Hi {{$petition->clientname}}</p>
    <p>Your petition has been successfully Submited in {{$petition->court->courtname}} {{$petition->city->city_name}}.
       Your Petition first hiring date is {{$petition->case_start_date}}.
    </p>
    <br>
</body>
</html>