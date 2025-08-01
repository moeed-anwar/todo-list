<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todo List') }}
        </h2>
    </x-slot>

    <div class="min-h-screen py-10 px-4 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
<div class="overflow-x-auto bg-white dark:bg-inherit shadow">
        <table class="w-full border-collapse text-sm">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 text-black dark:text-white">
                        <th class="border px-4 py-3">ID</th>
                        <th class="border px-4 py-3">NAME</th>
                        <th class="border px-4 py-3">STATUS</th>
                        <th class="border px-4 py-3">CREATED AT</th>
                        <th class="border px-4 py-3">UPDATED AT</th>
                        <th class="border px-4 py-3">EDIT</th>
                        <th class="border px-4 py-3">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $index => $task)
                    <tr class="{{ $index % 2 === 0 ? 'bg-white dark:bg-gray-800' : 'bg-gray-100 dark:bg-gray-700' }}">
                        <td class="border dark:text-white px-4 py-3">{{ $index + 1 }}:</td>
                        <td class="border  dark:text-white px-4 py-3">{{ $task->name }}</td>
                        <td class="border dark:text-white px-4 py-3">
                            @if($task->status)
                            <span class="text-green-500 font-semibold"><i class="ri-checkbox-circle-line"></i> Completed</span>
                            @else
                            <span class="text-red-500 font-semibold"><i class="ri-close-circle-line"></i> Not Completed</span>
                            @endif
                        </td>
                        <td class="border dark:text-white px-4 py-3">{{ $task->created_at->format('d M, Y H:i') }}</td>
                        <td class="border px-4 py-3 dark:text-white">{{ $task->updated_at->format('d M, Y H:i') }}</td>
                        <td class="border px-4 py-3 text-blue-600 hover:underline dark:text-blue-400">
                            <a href="{{ route('todos.edit', ['task' => $task]) }}">
                                <i class="ri-edit-fill"></i> Edit
                            </a>
                        </td>
                        <td class="border px-4 py-3">
                            <form class="w-fit m-auto flex items-center gap-1" action="{{ route('todos.delete', ['task' => $task]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="text-red-600 hover:underline cursor-pointer bg-transparent border-none" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="flex justify-center mt-8">
                <a href="/create" class="text-black dark:text-white border border-black dark:border-white px-5 py-2 rounded-lg transition duration-300 ease-in-out hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black">
                    Add Task
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
