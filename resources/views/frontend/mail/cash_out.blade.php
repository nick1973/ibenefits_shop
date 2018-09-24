<body>
<img src="{{ $message->embed('img/frontend/logo_horiz.png') }}">
<h4>Hi {{ $user->first_name }}, please find details of your <b>Cash Out</b> below:</h4>
<hr>
<p><strong>Your requested Cash Out:</strong> {{ $cashout }}</p>
<p><strong>Your New Balance:</strong> {{ $user->balance }}</p>
</body>