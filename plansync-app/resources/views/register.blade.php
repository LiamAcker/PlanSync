<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-zinc-100 dark:bg-zinc-900">
  <div class="bg-white dark:bg-zinc-800 p-8 rounded-lg shadow-lg w-full max-w-md">
    <div class="flex flex-col items-center mb-6">
      <img src="logo.png" alt="logo" class="mb-4">
      <h2 class="text-2xl font-bold text-zinc-800 dark:text-zinc-200">Welcome to Plan Sync</h2>
    </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class=".text-danger">{{ $error }}</li>
                @endforeach
            </ul>
            <br>
        </div>
      @endif
    <form method="POST", action="{{route('sign-up')}}">
      @csrf
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="fullname">Full name</label>
        <input id="fullname" name= "fullname" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-200" type="text" value="{{old('fullname')}}" required autofocus>
      </div>
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="phone">Phone number</label>
        <input id="phone" name="phone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-200" type="tel" value="{{old('phone')}}" required>
      </div>
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="email">Email</label>
        <input id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-200" type="email" value="{{old('email')}}" required>
      </div>
      <div class="mb-6">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="password">Password</label>
        <input id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-200" type="password" required>
      </div>
      <div class="mb-6">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-200" type="password">
      </div>
      <button type="submit" name= "password_confirmation" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">SIGN UP</button>
    </form>
  </div>
</div>
  </body>
</html>