<tr class="odd:bg-gray-600 even:bg-gray-500">
    <td class="text-left pl-4 py-2 w-[30rem]">{{ $task->title }}</td>
    <td class="text-center  py-2">{{ $task->updated_at->format('d/m/y h:m') }}</td>
    <td class="text-right pr-4 py-2 flex items-center justify-end">
        <x-button.get href="/tasks?edit={{ $task->id }}" class="text-green-500 hover:text-green-400">
            <x-heroicon-o-pencil class="w-5 h-5 mr-2"/>
        </x-button.get>

        <x-button.post action="{{ route('tasks.destroy', $task) }}" method="DELETE" class="text-red-500 hover:text-red-400">
            <x-heroicon-o-trash class="w-5 h-5 mr-2"/>
        </x-button.post>
    </td>
</tr>