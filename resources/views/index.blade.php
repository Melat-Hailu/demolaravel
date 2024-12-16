<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>product</h1>
    <div>
        <table border="1">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    NAME
                </th>
                <th>
                    QTY
                </th>
                <th>
                    PRICE
                </th>
                <th>
                    DESCRTPTION
                </th>

            </tr>
            @foreach($Flights as $flight)

            <tr>
                <td>{{$flight->id}}</td>
                <td>{{$flight->name}}</td>
                <td>{{$flight->qty}}</td>
                <td>{{$flight->price}}</td>
                <td>{{$flight->decription}}</td>


            </tr>
            @endforeach




        </table>
    </div>
</body>

</html>