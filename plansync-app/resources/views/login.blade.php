<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-zinc-100 dark:bg-zinc-900">
  <div class="bg-white dark:bg-zinc-800 p-8 rounded-lg shadow-lg max-w-sm w-full">
    <div class="flex flex-col items-center mb-6">
      <img src="logo.png" alt="Plan Sync Logo" class="mb-2">
      <h2 class="text-2xl font-semibold text-zinc-900 dark:text-white">Welcome to Plan Sync</h2>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
            <br>
        </div>
      @endif
    <form method="POST" action="{{route('sign-in')}}">
      @csrf
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="email">Email</label>
        <input class="w-full px-3 py-2 border border-zinc-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white" type="text" id="email" name="email" required>
      </div>
      <div class="mb-4">
        <label class="block text-zinc-700 dark:text-zinc-300 mb-2" for="password">Password</label>
        <input class="w-full px-3 py-2 border border-zinc-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white" type="password" id="password" name="password" required>
      </div>
      <div class="flex justify-between items-center mb-4">
        <button type="submit" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
      </div>
    </form>
    <div class="text-center">
        <p class="text-sm text-zinc-600 dark:text-zinc-400">Don’t have an account? <a href="{{route('sign-up')}}" class="font-semibold hover:underline">SIGN UP</a></p>
    </div>
  </div>
</div>
</body>
</html>
