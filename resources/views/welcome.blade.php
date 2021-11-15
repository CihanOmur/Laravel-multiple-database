<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple Database</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <h3>Database 1</h3>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data1 as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td><form action="{{route('info.destroy',$item->id)}}" method="post">@csrf @method('DELETE') <input name="select" type="hidden" value="1"> <button type="submit">Delete</button></form></td>
            </tr>
            @endforeach
            <!-- and so on... -->
        </tbody>
    </table>
    
    <h3>Database 2</h3>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data2 as $items)
            <tr>
                <td>{{$items->name}}</td>
                <td>{{$items->surname}}</td>
                <td><form action="{{route('info.destroy',$items->id)}}" method="post"> @csrf @method('DELETE') <input name="select" type="hidden" value="2"> <button type="submit">Delete</button></form></td>
            </tr>
            @endforeach
            
            <!-- and so on... -->
        </tbody>
    </table>
</body>
</html>