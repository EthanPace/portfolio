<div class="sm:min-w-[75rem] max-w-[100rem] bg-gray-700 rounded-lg text-white">
    @if(request()->query('edit'))
        <form id="edit" action="/tasks/{{ request()->query('edit') }}" method="post">@csrf</form>
    @endif

    <table class="w-full rounded-lg">
        <thead>
            <tr>
                <th class="text-left p-4">Title</th>
                <th class="text-center p-4">Updated</th>
                <th class="text-right p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                @if(request()->query('edit') == $task->id)
                    <x-task.edit :task="$task"/>
                @else
                    <x-task.row :task="$task"/>
                @endif
            @endforeach
        </tbody>
    </table>

    <div class="flex w-full bg-gray-700 py-2 px-4 items-center justify-end">
        <x-button.post action="/tasks/new" class="items-center">
            <x-heroicon-o-plus class="w-5 h-5 text-green-300 hover:text-green-400 mt-1 mr-2"/>
        </x-button.post>
    </div>
</div>

@if($errors->any())
    {{ $errors }}
@endif