@section('title', 'My Petitions Group')

<x-app-layout>
    <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Get important stuff done..</span>
                <span class="block">Start using My Petitions Group.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-indigo-200">Find out whats important to people and vote to get it done.</p>
            <a href="{{route('register')}}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                Sign up for free
            </a>
        </div>
    </div>
    <main class="w-full sm:max-w-7xl py-7 mx-auto">
        <div class="px-4 sm:px-0">
            <div class="sm:hidden">
                <label for="question-tabs" class="sr-only">Select a tab</label>
                <select id="question-tabs" class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                    <option selected>Recent</option>

                    <option>Most Liked</option>

                    <option>Most Answers</option>
                </select>
            </div>
            <div class="hidden sm:block">
                <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                    <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                    <a href="#" aria-current="page" class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                        <span>Recent</span>
                        <span aria-hidden="true" class="bg-rose-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                    </a>

                    <a href="#" class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                        <span>Most Liked</span>
                        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </a>

                    <a href="#" class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                        <span>Most Answers</span>
                        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </a>
                </nav>
            </div>
        </div>
        <div class="mt-4">
            <h1 class="sr-only">Recent questions</h1>
            <livewire:petition.petitions></livewire:petition.petitions>
        </div>
    </main>
</x-app-layout>
