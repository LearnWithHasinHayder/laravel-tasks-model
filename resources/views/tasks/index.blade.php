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

        @if ($showToolbar)
            <x-task-status :status="request()->get('status')" />
            <p>
                Total Tasks = {{ count($tasks) }}
            </p>
        @else
            <a href="{{route('tasks.index')}}"
                class="my-5 inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2">
                All Tasks
            </a>
        @endif
    </div>
    <div class="container mx-auto">
        @foreach ($tasks as $task)
            {{-- <x-task :task="$task"/> --}}
            <x-task :$task />
        @endforeach
    </div>
</x-layout>
