<h1>{{ Lang::get('confide::confide.email.account_confirmation.subject') }}</h1>

<p>{{ Lang::get('confide::confide.email.account_confirmation.greetings', array( 'name' => $user->username)) }},</p>

<p>{{ Lang::get('confide::confide.email.account_confirmation.body') }}</p>
<a href='{{{ URL::to("en/backend/auth/confirm/{$user->confirmation_code}") }}}'>
    {{{ URL::to("en/backend/auth/confirm/{$user->confirmation_code}") }}}
</a>

<p>{{ Lang::get('confide::confide.email.account_confirmation.farewell') }}</p>
