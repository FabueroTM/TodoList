<x-app-layout>

<div class="bg-blue-200 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-between">
    <div class="lg:text-center">
      <h2 class="text-xl leading-8 font-extrabold r text-blue-600 sm:text-4xl sm:leading-10 font-montserrat">
        MyToTool, Bienvenue
      </h2>
    </div>
  </div>
</div>
<p class="text-blue-600 text-center font-black text-5xl"> Gestion des tâches </p>
<div class="flex flex-col pt-2 pb-10">
  <div class="-my-2 overflow-x-auto">
    <div class="mx-auto max-w-xs sm:max-w-5xl">
      <div class="py-2 sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-blue-600 sm:rounded-lg">
        <ul class="bg-transparent divide-y divide-gray-200">
          <!-- Ajouter une tâche -->
          <li class="px-6 py-4 flex items-center bg-blue-300">
  <form method="POST" action="{{ route('tasks.store') }}" class="flex items-center justify-between w-full">
    @csrf
    <div class="flex items-center">
      <div>
        <input type="text" name="name" placeholder="Nom de la tâche" class="border-2 border-blue-600 px-2 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent mr-4">
      </div>
      <div>
        <input type="text" name="description" placeholder="Description de la tâche" class="border-2 border-blue-600 px-12 py-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent mr-4">
      </div>
      <div>
                    <select name="status" class="border-2 border-blue-600 px-8 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent">
                        <option value="A faire">A faire</option>
                        <option value="En cours">En cours</option>
                        <option value="Terminé">Terminé</option>
                    </select>
                    
      </div>
    </div>
    <div class="ml-auto">
      <button type="submit" class="w-10 h-10 bg-blue-100 hover:bg-gray-00 text-blue-600 font-bold rounded-full transition-colors duration-300 shadow-md">
        <i class="fas fa-plus-circle"></i>
      </button>
    </div>
  </form>
</li>

          <!-- Liste des tâches existantes -->
@foreach($tasks as $task)
    <li class="px-6 py-4 bg-white mt-1">
        <div class="flex justify-between items-center">
            <div>
                <div class="text-2xl font-bold text-blue-700">
                    {{ $task->name }}
                </div>
                <div class="py-4">
                    <div class="whitespace-normal break-words text-sm font-medium w-96">{{ $task->description }}</div>
                  </div>
            </div>
            <div class="flex items-center">
        @if($task->status === 'A faire')
          <div class="w-4 h-4 bg-red-500 rounded-full mx-2"></div>
        @elseif($task->status === 'En cours')
          <div class="w-4 h-4 bg-yellow-500 rounded-full mx-2"></div>
        @elseif($task->status === 'Terminé')
          <div class="w-4 h-4 bg-blue-500 rounded-full mx-2"></div>
        @endif
            <div class="text-md text-black font-medium mr-12">
              {{ $task->status }}
            </div>
            <div>
            <form method="GET" action="{{ route('tasks.edit', $task) }}" class="inline">
    @csrf
    <button type="submit" class="w-10 h-10 bg-white hover:bg-gray-200 text-blue-600 font-bold rounded-full transition-colors duration-300 shadow-md">
        <i class="fas fa-pencil-alt"></i>
    </button>
</form>

                <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-10 h-10 bg-white hover:bg-gray-200 text-red-600 font-bold rounded-full transition-colors duration-300 shadow-md">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </li>
@endforeach

        </ul>
      </div>
    </div>
  </div>
</div>



</x-app-layout>