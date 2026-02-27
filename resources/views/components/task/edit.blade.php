<tr class="odd:bg-gray-600 even:bg-gray-500">
    <td class="text-left py-1 w-[30rem]">
        <input class="bg-gray-800 text-white ml-2 py-1 w-full rounded-lg pl-2" field="title" name="title" value="{{ old('title', $task->title) }}" form="edit"></input>
    </td>

    <td class="text-center  py-2">{{ $task->updated_at->format('d/m/y h:m') }}</td>

    <td class="text-right pr-4 py-2 flex items-center justify-end">
        <x-button.submit class="text-green-500 hover:text-green-400" form="edit">
            <x-heroicon-o-check class="w-5 h-5 mr-2"/>
        </x-button.submit>

        <x-button.post action="{{ route('tasks.destroy', $task) }}" method="DELETE" class="text-red-500 hover:text-red-400">
            <x-heroicon-o-trash class="w-5 h-5 mr-2"/>
        </x-button.post>
    </td>
</tr>