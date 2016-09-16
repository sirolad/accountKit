<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ load_asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ load_asset('css/style.css') }}">
</head>

<body>
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Phone</a></li>
            <li class="tab"><a href="#login">Email</a></li>
        </ul>
        <form action="/login" method="post" id="form">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="code" id="code" />
        </form>
        <div class="tab-content">
            <div id="signup">
                <h1>Account Kit</h1>
                <div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                &nbsp; Country Code<span class="req">*</span>
                            </label>
                            <input type="text" id="country" value="+" required autocomplete="off" />
                        </div>
                        <div class="field-wrap">
                            <label>
                                Number<span class="req">*</span>
                            </label>
                            <input type="text" id="phone" required autocomplete="off" />
                        </div>
                    </div>
                    <button onclick="smsLogin()" class="button button-block" />Get Started</button>
                </div>
            </div>
            <div id="login">
                <h1>Account Kit</h1>
                <div>
                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" id="email" required autocomplete="off" />
                    </div>
                    <button type="submit" class="button button-block" onclick="emailLogin()"/>Log In</button>
                </div>
            </div>
        </div>
        <!-- tab-content -->
    </div>
    <!-- /form -->
    <script src="js/ack.js"></script>
    <script type="text/javascript" src="https://sdk.accountkit.com/en_US/sdk.js"></script>
    <script src='js/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>

</html>
