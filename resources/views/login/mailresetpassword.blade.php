<p>Hello!</p>
<p>You are receiving this email because we received a password reset request for your account.</p>
<p>Click the following link to reset your password:</p>
<form action="{{ url('resetPassword') }}" method="GET">
    @csrf
    <input type="hidden" name="resetToken" value="{{ $resetToken }}">
    <button type="submit" color="success">Reset Password</button>
</form>


