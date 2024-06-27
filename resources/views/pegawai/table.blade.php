<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-gray-200 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-xl font-bold" href="#">Dashboard</a>
            <form action="{{ route('logout.post') }}" method="post">
                @csrf
                <button type="submit" class="text-blue-500">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl text-center mb-6">Welcome to the Dashboard</h1>

        <h1 class="text-xl mb-4">Pegawai List</h1>
        <a href="/pegawai/create" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add New Pegawai</a>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="w-full bg-gray-100 text-left">
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Alamat</th>
                        <th class="border px-4 py-2 text-center">Edit</th>
                        <th class="border px-4 py-2 text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1 @endphp
                    @foreach ($pegawai as $p)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $count++ }}</td>
                        <td class="border px-4 py-2">{{ $p->nama }}</td>
                        <td class="border px-4 py-2">{{ $p->alamat }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="/pegawai/edit/{{ $p->id }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <a onclick="return confirm('apakah ingin menghapus?')" href="/pegawai/delete/{{ $p->id }}" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
