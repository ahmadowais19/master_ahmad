<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investa - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{asset('/img/carousel-3.jpg') }}'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }
        .register-container {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
        }
    </style>
</head>
{{-- <div style="background-image: url('{{ asset('Public/img/carousel-3.jpg') }}');"> --}}
<body class="flex items-center justify-center p-4">
    <div class="w-full max-w-md register-container rounded-xl shadow-2xl overflow-hidden border border-gray-200">
        <!-- Header Section -->
        <div class="bg-blue-800 text-white p-6 text-center">
            <h1 class="text-2xl font-bold">Our pips mentor Company</h1>
            <p class="mt-1 text-blue-100">The Most Prestigious Investments Company Worldwide</p>
        </div>

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}" class="p-6 space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input id="name" name="name" type="text" required autofocus
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    value="{{ old('name') }}" autocomplete="name">
                @if($errors->has('name'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input id="email" name="email" type="email" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    value="{{ old('email') }}" autocomplete="username">
                @if($errors->has('email'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    autocomplete="new-password">
                @if($errors->has('password'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    autocomplete="new-password">
            </div>

            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                    Already registered?
                </a>

                <button type="submit"
                    class="bg-blue-800 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                    Register
                </button>
            </div>
        </form>

        <!-- Footer Links -->
        <div class="px-6 py-4 bg-gray-50 text-center border-t border-gray-200">
            <p class="text-sm text-gray-600">
                By registering, you agree to our 
                <a href="#" class="font-medium text-blue-600 hover:text-blue-800">Terms of Service</a>
            </p>
        </div>
    </div>
</body>
</html>