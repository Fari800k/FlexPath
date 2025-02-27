<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">
    <aside class="w-64 bg-blue-600 text-white p-5 min-h-screen">
        <h2 class="text-2xl font-bold mb-5">Trainer Dashboard</h2>
        <ul>
            <li class="mb-3"><a href="#" class="hover:underline">Manage Clients</a></li>
            <li class="mb-3"><a href="#" class="hover:underline">Assign Workouts</a></li>
            <li class="mb-3"><a href="#" class="hover:underline">Track Progress</a></li>
            <li class="mt-6"><a href="logout.php" class="text-red-300 hover:underline">Logout</a></li>
        </ul>
    </aside>
    <main class="flex-1 p-6">
        <h1 class="text-3xl font-bold mb-6">Trainer Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Manage Clients -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Manage Clients</h2>
                <p>View and manage your clients' details.</p>
            </div>
            
            <!-- Assign Workouts -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Assign Workouts</h2>
                <p>Create and assign workout plans to clients.</p>
            </div>
            
            <!-- Track Progress -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Track Progress</h2>
                <p>Monitor and analyze your clients' progress.</p>
            </div>
        </div>
    </main>
</body>
</html>
