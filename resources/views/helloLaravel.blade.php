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

    th {
        font-size: 1.4rem;
    }
</style>

<body>
    <table>
        <thead>
            <tr>
                <th class="cell id">ID</th>
                <th class="cell fname">First Name</th>
                <th class="cell lname">Last Name</th>
                <th class="cell email">Email</th>
                <th class="cell gender">Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="cell id">{{$user['id']}}</td>
                <td class="cell fname">{{$user['first_name']}}</td>
                <td class="cell lname">{{$user['last_name']}}</td>
                <td class="cell email">{{$user['email']}}</td>
                <td class="cell gender">{{$user['gender']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>