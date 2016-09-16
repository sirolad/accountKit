<!DOCTYPE html>
<html>

<head>
    <title>Account Kit (Laravel)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #e5e5e5;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #286090;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    </style>
</head>
<body>
  <div class="container">
    <div class="jumbotron">
            <h1>Account Kit on Laravel</h1>
            <p>Facebook's Passwordless Login</p>
            <hr>

            <h4>User ID</h4>
            <hr>
            <pre>{{ $userId }}</pre>

            <h4>Phone</h4>
            <hr>
            <pre>{{ $phone }}</pre>

            <h4>Email</h4>
            <hr>
            <pre>{{ $email }}</pre>

            <h4>Token</h4>
            <hr>
            <pre>{{ $userAccessToken }}</pre>

            <h4>Time Interval</h4>
            <hr>
            <pre>{{ $refreshInterval }}</pre>
  </div>

  <a href="/logout"><button class="btn btn-success" >Logout</button></a>
</body>
</html>
