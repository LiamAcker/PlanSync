<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <form method="POST" action="{{route('sign-up') }}">
        @csrf
        <h1>Sign Up</h1>

        <div>
            <label for="fullname">Full Name</label>
            <input id="fullname" type="text" name="fullname" value="{{ old('fullname') }}" required autofocus>
        </div>

        <div>
            <label for="phone">Phone Number</label>
            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>


        <div>
            <button type="submit">Sign Up!</button>
        </div>
    </form>
</body>
</html>
