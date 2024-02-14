<h1>My name is : <?php echo $name . ' I\'m ' . $age?> !</h1>

<table border='1px'>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
    </tr>
    @foreach($users as $user)
    <tr style="{{$loop->odd ? 'background: #ddd' :''}}">
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['age']}}</td>
    </tr>
    @endforeach
</table>