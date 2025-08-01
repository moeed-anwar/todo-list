<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Task') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-gray-100 via-white to-gray-200 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-12 px-4">
        <div class="max-w-xl mx-auto bg-white dark:bg-gray-800 shadow-xl rounded-xl p-8">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-800 dark:text-white mb-8">Update Task</h1>

            <form action="{{ route('todos.update', ['task' => $task]) }}" method="POST" class="space-y-6">
                @csrf
                @method('put')

                <div class="flex flex-col">
                    <label for="name" class="mb-1 text-lg text-gray-700 dark:text-gray-200 font-medium">Task Name</label>
                    <input 
                        id="name" 
                        name="name" 
                        type="text" 
                        value="{{ $task->name }}" 
                        required 
                        placeholder="Name"
                        class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    >
                </div>

                <div class="flex flex-col">
                    <label for="status" class="mb-1 text-lg text-gray-700 dark:text-gray-200 font-medium">Task Status</label>
                    <input 
                        id="status" 
                        name="status" 
                        type="text" 
                        value="{{ $task->status }}" 
                        required 
                        placeholder="Status"
                        class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    >
                </div>

                <div class="flex justify-center">
                    <button 
                        type="submit" 
                        class="text-black dark:text-white border border-black dark:border-white rounded-lg px-6 py-2 transition-all hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black"
                    >
                        Update Task
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
