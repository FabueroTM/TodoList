<x-app-layout>

<<<<<<< HEAD
    <div class="bg-blue-200 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-between">
            <div class="lg:text-center lg:w-1/2">
                <h2 class="text-xl leading-8 font-extrabold text-blue-600 sm:text-4xl sm:leading-10">
                    Modifier une tâche
                </h2>
=======
<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-10 md:px-20 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PUT')

                    <div class="mt-4">
                        <label for="name" class="block text-2xl font-bold text-purple-700 mb-2">
                            Nom de la tâche
                        </label>
                        <input id="name"
                            class="mb-8 border-2 border-purple-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-800 focus:border-transparent text-black block w-full"
                            type="text" name="name" value="{{ old('name', $task->name) }}" required autofocus />
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">Le nom est obligatoire.</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="description"
                            class="block text-2xl font-bold text-purple-700 mb-2">Description de la tâche</label>
                        <input id="description"
                            class="mb-8 border-2 border-purple-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-800 focus:border-transparent text-black block w-full"
                            name="description" value="{{ old('description', $task->description) }}" />
                        @error('description')
                        <p class="text-red-500 text-xs mt-1">La description est obligatoire.</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="status" class="block text-2xl font-bold text-purple-700 mb-2">Statut de la
                            tâche</label>
                        <select id="status"
                            class="mb-8 border-2 border-purple-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-800 focus:border-transparent text-black block w-full"
                            name="status">
                            <option value="A faire" class="text-red-500"
                                {{ old('status', $task->status) === 'A faire' ? 'selected' : '' }}>A faire</option>
                            <option value="En cours" class="text-amber-500"
                                {{ old('status', $task->status) === 'En cours' ? 'selected' : '' }}>En cours</option>
                            <option value="Terminé" class="text-green-500"
                                {{ old('status', $task->status) === 'Terminé' ? 'selected' : '' }}>Terminé</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                            class="bg-purple-600 hover:bg-purple-800 text-white font-semibold py-2 px-4 rounded-lg">
                            <i class="fas fa-arrow-right mr-2"></i>Modifier
                        </button>
                    </div>
                </form>
>>>>>>> 99748b79a291d86727a0a6babce535306ed449b5
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('tasks.update', $task) }}">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <label for="name" class="block text-2xl font-bold text-blue-600 mb-2">Nom de la tâche</label>
                            <input id="name" class="mb-8 border-2 border-blue-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent text-black block w-full" type="text" name="name" value="{{ old('name', $task->name) }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="description" class="block text-2xl font-bold text-blue-600 mb-2">Description de la tâche</label>
                            <input id="description" class="mb-8 border-2 border-blue-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent text-black block w-full" name="description" value="{{ old('description', $task->description) }}"/>
                        </div>

                        <div class="mt-4">
                            <label for="status" class="block text-2xl font-bold text-blue-600 mb-2">Statut de la tâche</label>
                            <select id="status" name="status" class="mb-8 border-2 border-blue-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent text-black block w-full">
                                <option value="A faire" {{ old('status', $task->status) === 'A faire' ? 'selected' : '' }}>A faire</option>
                                <option value="En cours" {{ old('status', $task->status) === 'En cours' ? 'selected' : '' }}>En cours</option>
                                <option value="Terminé" {{ old('status', $task->status) === 'Terminé' ? 'selected' : '' }}>Terminé</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-lg"><i class="fas fa-arrow-right mr-2"></i>Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=======
>>>>>>> 99748b79a291d86727a0a6babce535306ed449b5
</x-app-layout>
