<x-layout>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-8 text-2xl">
            All Tasks
        </div>
        <div class="mt-6 text-gray-500">
            Laravel has wonderful, thorough documentation covering every aspect of the
            framework. Whether you are new to Laravel or have previous experience, we
            recommend reading all of the documentation from beginning to end.
        </div>

        <x-toolbar show-toolbar="{{ $showToolbar }}" :tasks="$tasks" />
    </div>
    <div class="container mx-auto">
        @foreach ($tasks as $task)
            {{-- <x-task :task="$task"/> --}}
            <x-task :$task />
        @endforeach
    </div>
</x-layout>
