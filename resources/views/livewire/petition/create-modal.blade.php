<div class="p-4">
    <form class="space-y-6" wire:submit.prevent="create" autocomplete="off">
        <div class="bg-blue-500 bg-opacity-50 rounded border border-blue-400 p-4 text-blue-600">
            <p class="font-bold">Creating a Petition.</p>
            <p>
                Provide as much information about what you'd like to see changed, as successful petition contains more
                than just emotion, provide research.
            </p>
        </div>
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">
                Title<span class="text-red-600">*</span>
            </label>
            <div class="mt-1">
                <input id="title" wire:model.defer="title" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">
                Description<span class="text-red-600">*</span>
            </label>
            <div class="mt-1">
                <textarea id="description" wire:model.defer="description" rows="10" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
        </div>
        <div>
            <button class="transition ease-in-out delay-150 bg-blue-500 hover:bg-gradient-to-r rounded text-white font-bold py-2 w-full hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500 duration-300">Submit Petition</button>
        </div>
    </form>
</div>
