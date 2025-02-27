<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">
    <aside class="w-64 bg-blue-600 text-white p-5 min-h-screen">
        <h2 class="text-2xl font-bold mb-5">Dashboard</h2>
        <ul>
            <li class="mb-3"><a href="#" class="hover:underline">Workouts</a></li>
            <li class="mb-3"><a href="#" class="hover:underline">Chatbot</a></li>
            <li class="mb-3"><a href="#" class="hover:underline">Progress</a></li>
        </ul>
    </aside>
    <main class="flex-1 p-6">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Workouts Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Workouts</h2>
                <p>Track and manage your workouts here.</p>
            </div>
            
            <!-- Chatbot Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Chatbot</h2>
                <p>Ask the chatbot for fitness guidance.</p>
            </div>
            
            <!-- Progress Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Progress</h2>
                <p>Monitor your progress over time.</p>
            </div>
        </div>
    </main>
</body>
</html>
