@section('title', 'Petitions')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Petitions') }}
        </h2>
    </x-slot>
    @guest
    <div class="w-full sm:py-6 sm:px-6 sm:max-w-7xl mx-auto">
        <div class="bg-gradient-to-r sm:rounded from-indigo-500 via-purple-500 to-pink-500">
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
    </div>
    @endif
    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
                    <div class="pb-8 space-y-1">
                        <a href="#" class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                            <span class="truncate">
                                Popular
                            </span>
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <span class="truncate">
                                Trending
                            </span>
                        </a>
                    </div>
                </nav>
            </div>
            <main class="lg:col-span-9 xl:col-span-6">
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
            <aside class="hidden xl:block xl:col-span-4">
                <div class="sticky top-4 space-y-4">

                    @auth
                    <button onclick="Livewire.emit('openModal', 'petition.create-modal')" class="transition ease-in-out delay-150 bg-gradient-to-r rounded text-white font-bold hover:bg-gradient-to-l py-2 w-full from-indigo-500 via-purple-500 to-pink-500 duration-300">
                        Create Petition
                    </button>
                    @endauth

                    <section aria-labelledby="trending-heading">
                        <div class="bg-white rounded-lg shadow">
                            <div class="p-6">
                                <h2 id="trending-heading" class="text-base font-medium text-gray-900">
                                    Trending
                                </h2>
                                <div class="mt-6 flow-root">
                                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                                        <li class="flex py-4 space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Floyd Miles">
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-sm text-gray-800">What books do you have on your bookshelf just to look smarter than you actually are?</p>
                                                <div class="mt-2 flex">
                                                  <span class="inline-flex items-center text-sm">
                                                    <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                      <!-- Heroicon name: solid/chat-alt -->
                                                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                                      </svg>
                                                      <span class="font-medium text-gray-900">291</span>
                                                    </button>
                                                  </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-6">
                                    <a href="{{route('petitions.index')}}" class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        View all
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </aside>
        </div>
    </div>
    </div>
</x-app-layout>
