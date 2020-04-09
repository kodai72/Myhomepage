<p>{{$message}}</p>
<table>
    <form action="auth" method="post">
        @csrf
        <tr>
            <th>mail:</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>pass:</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>