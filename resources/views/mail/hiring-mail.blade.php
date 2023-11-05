<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition Current Status Mail</title>
</head>
<body>
    <p>Hi {{$petition->clientname}}</p>
    <p>Your petition has been successfully Submited in {{$petition->court->courtname}} {{$petition->city->city_name}}.
       which start at {{$petition->case_start_date}}.Current Status update following.
    </p>
    <br>
    <table class="table-striped">
        <thead>
            <tr>
                <th>Remarks</th>
                <th>Next Date</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petition->hirings as $hiring)
            <tr>
                <td>{{$hiring->remarks}}</td>
                <td>{{$hiring->next_hiring_date}}</td>
                <td>{{$hiring->created_at}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>