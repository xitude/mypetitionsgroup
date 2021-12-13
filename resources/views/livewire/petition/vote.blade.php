<div>
    <h2 id="stats-title" class="hidden sm:block text-lg font-medium text-gray-900">Votes</h2>

    <div class="hidden sm:block mt-6 flow-root">
        <p class="text-4xl" wire:poll>{{number_format($votes, 0, '.', ',')}}</p>
    </div>

    @auth
    <div class="sm:mt-6 flex flex-col justify-stretch">
        <form wire:submit.prevent="vote">
            <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Vote for Petition
            </button>
        </form>
    </div>
    @else
    <div class="mt-6 flex flex-col justify-stretch">
        <a href="{{route('login')}}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Login to Vote
        </a>
    </div>
    @endauth
</div>
