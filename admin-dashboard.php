<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">
    <aside class="w-64 bg-blue-600 text-white p-5 min-h-screen">
        <h2 class="text-2xl font-bold mb-5">Admin Dashboard</h2>
        <ul>
            <li class="mb-3"><a href="#" class="hover:underline">Manage Users</a></li>
            <li class="mb-3"><a href="#" class="hover:underline">Reports</a></li>
            <li class="mb-3"><a href="#" class="hover:underline">Settings</a></li>
            <li class="mt-6"><a href="logout.php" class="text-red-300 hover:underline">Logout</a></li>
        </ul>
    </aside>
    <main class="flex-1 p-6">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Manage Users -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Manage Users</h2>
                <p>View, edit, and remove users from the system.</p>
            </div>
            
            <!-- Reports -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Reports</h2>
                <p>Generate and analyze system reports.</p>
            </div>
            
            <!-- Settings -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Settings</h2>
                <p>Configure system preferences and security settings.</p>
            </div>
        </div>
    </main>
</body>
</html>
