@if ($showToolbar)
    <x-task-status :status="request()->get('status')" />
    <p>
        Total Tasks = {{ count($tasks) }}
    </p>
@else
    <a href="{{ route('tasks.index') }}"
        class="my-5 inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2">
        All Tasks
    </a>
@endif
