<html>
<body>
<center><h1>User Want To connect</h1>
    <table>
        <tr>
            <th> Hello sir, I am <strong>{{ $data->fname }}</strong></th>
        </tr>
        <tr>
            <th> Kindly contact with me at <strong>{{ $data->email }}</strong></th>
        </tr>

        <tr>
            <th> Subject: <strong>{{ $data->subject }}</strong></th>
        </tr>
        <tr>
            <th> I have some query: <strong>{{ $data->comment }}</strong></th>
        </tr>
    </table>
</center>
</body>
</html>