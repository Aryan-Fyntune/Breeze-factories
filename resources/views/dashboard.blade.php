<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6">
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 p-8 text-white shadow-2xl">

        <!-- Animated Background Circles -->
        <div class="absolute -top-10 -left-10 h-40 w-40 rounded-full bg-white/10 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 h-56 w-56 rounded-full bg-white/10 animate-ping"></div>

        <!-- Content -->
        <div class="relative z-10">
            <h1 class="text-4xl font-bold mb-3 animate-bounce">
                Welcome Back 👋
            </h1>

            <h2>Students List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    <?php foreach($students as $student): ?>

    <tr>
        <td><?= $student->id ?></td>
        <td><?= $student->name ?></td>
        <td><?= $student->email ?></td>
        <td><?= $student->age ?></td>
    </tr>

    <?php endforeach; ?>

</table>
            </div>
        </div>

    </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
