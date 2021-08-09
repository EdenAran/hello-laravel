<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Laravel</title>
</head>

<style>
    table {
        margin: 0 auto;
        width: fit-content;
        border: 1px solid black;
        border-collapse: collapse;
    }

    .cell {
        border: 1px solid black;
        text-align: center;
        padding: 5px 15px;
        font-size: 1.2rem;
    }
</style>

<body>
    <table>
        <thead>
            <tr>
                @foreach(array_keys($users[0]) as $title)
                <th class="cell">{{ucwords($title)}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                @foreach($user as $data)
                <td class="cell">{{$data}}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>