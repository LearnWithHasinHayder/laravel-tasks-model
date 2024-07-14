<div class="my-5">
    <select id='taskStatus' onChange='filterStatus()'
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="all" @if ($status == 'all') selected @endif>All</option>
        <option value="completed" @if ($status == 'completed') selected @endif>Completed</option>
        <option value="pending" @if ($status == 'pending') selected @endif>Pending</option>
    </select>

    <script>
        function filterStatus() {
            let status = document.getElementById('taskStatus').value;
            if (status == 'all') {
                location.href = "{{ route('tasks.index') }}"
            } else {
                location.href = "/tasks?status=" + status
            }
        }
    </script>
</div>
