<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-6 text-center">
                        <h2 class="text-2xl font-bold">Edit Pegawai</h2>
                    </div>
                    <div class="p-6">
                        <form action="/pegawai/update/{{ $pegawai->id }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nama" class="block text-gray-700">Nama:</label>
                                <input type="text" id="nama" name="nama" value="{{ $pegawai->nama }}" class="w-full px-4 py-2 border rounded-lg" required>
                                @error('nama')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="block text-gray-700">Alamat:</label>
                                <input type="text" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" class="w-full px-4 py-2 border rounded-lg" required>
                                @error('alamat')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
