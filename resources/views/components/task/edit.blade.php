<tr class="odd:bg-gray-600 even:bg-gray-500">
    <td class="text-left py-1 w-[30rem]">
        <input class="bg-gray-800 text-white ml-2 py-1 w-full rounded-lg pl-2" field="title" name="title" value="{{ old('title', $task->title) }}" form="edit"></input>
    </td>

    <td class="text-center  py-2">{{ $task->updated_at->format('d/m/y h:m') }}</td>

    <td class="text-right pr-4 py-2 flex gap-2 items-center justify-end">
        <x-button.submit form="edit">
            <x-heroicon-o-check class="w-5 h-5"/>
        </x-button.submit>

        <x-button.post action="{{ route('tasks.destroy', $task) }}" method="DELETE">
            <x-heroicon-o-trash class="w-5 h-5"/>
        </x-button.post>
    </td>
</tr>