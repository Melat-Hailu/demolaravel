<h1> database user </h1>
<div>
    <h3>Database Users Found In Your System</h3>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified At</th>
            <th>Password</th>
            <th>Remember Token</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->remember_token}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</div>