<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-6 text-center">
                        <h2 class="text-2xl font-bold">Register</h2>
                    </div>
                    <div class="p-6">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Name:</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg" required>
                                @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email:</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
                                @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password:</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg" required>
                                @error('password')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="block text-gray-700">Confirm Password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg" required>
                                @error('password_confirmation')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg">Register</button>
                        </form>
                    </div>
                    <div class="p-6 text-center">
                        <p>Already have an account? <a href="/login" class="text-blue-500">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
