<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl mb-4">Admin Panel</h1>
        <!-- 添加 admin 功能的代碼 -->
    </div>
    <!-- Button -->
<button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Admin Button</button>

<!-- Table -->
<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 text-left py-3 px-4">Name</th>
            <th class="w-1/3 text-left py-3 px-4">Email</th>
            <th class="text-left py-3 px-4">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Sample Row -->
        <tr class="text-gray-700">
            <td class="text-left py-3 px-4">John Doe</td>
            <td class="text-left py-3 px-4">john.doe@example.com</td>
            <td class="text-left py-3 px-4">
                <a href="#" class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>
                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

<!-- Form Control -->
<form class="mt-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter Name">
</form>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
