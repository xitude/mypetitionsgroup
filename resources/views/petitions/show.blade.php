@section('title', \Illuminate\Support\Str::limit($petition->title, 8, '...'))

<x-app-layout>
    <div class="hidden sm:block mt-2 sm:mt-8 w-full px-4 mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl">
        <h1 class="text-lg md:text-3xl">
            {{$petition->title}}
        </h1>
    </div>
    <div class="sm:mt-8 max-w-3xl mx-auto grid grid-cols-1 sm:gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="sm:space-y-6 lg:col-start-1 lg:col-span-2">

            <section aria-labelledby="petition-information-title">
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="hidden sm:block px-4 py-5 sm:px-6">
                        <h2 id="petition-information-title" class="text-lg leading-6 font-medium text-gray-900">
                            Petition Information
                        </h2>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <p class="sm:hidden font-bold mb-1">{{$petition->title}}</p>
                        <p class="sm:hidden text-sm font-thin text-gray-400 mb-1">by {{$petition->creator->name}}</p>
                        <p class="sm:hidden text-sm font-thin text-gray-400 mb-3">created {{$petition->created_at->diffForHumans()}}</p>
                        {!! htmlspecialchars_decode($petition->description) !!}
                        <div class="mt-6 flex justify-between space-x-8">
                            <div class="flex space-x-6">
                    <span class="inline-flex items-center text-sm">
                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/thumb-up -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                        </svg>
                        <span class="font-medium text-gray-900">{{number_format($petition->votes->count(), 0, '.', ',')}}</span>
                        <span class="sr-only">votes</span>
                      </button>
                    </span>
                                <span class="inline-flex items-center text-sm">
                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/chat-alt -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium text-gray-900">{{number_format($petition->comments->count(), 0, '.', ',')}}</span>
                        <span class="sr-only">comments</span>
                      </button>
                    </span>
                                <span class="inline-flex items-center text-sm">
                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/eye -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                          <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium text-gray-900">{{number_format($petition->impressions->count(), 0, '.', ',')}}</span>
                        <span class="sr-only">views</span>
                      </button>
                    </span>
                            </div>
                            <div class="flex text-sm">
                    <span class="inline-flex items-center text-sm">
                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/share -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                        </svg>
                        <span class="font-medium text-gray-900">Share</span>
                      </button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sm:hidden">
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                    <livewire:petition.vote :petition="$petition"></livewire:petition.vote>
                </div>
            </section>

            <section aria-labelledby="comments-title">
                <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                    <div class="divide-y divide-gray-200">
                        <div class="px-4 py-2 sm:py-5 sm:px-6">
                            <h2 id="comments-title" class="text-sm sm:text-lg font-medium text-gray-900">Comments</h2>
                        </div>
                        <div class="px-4 py-6 sm:px-6">
                            <livewire:petition.comments :petition="$petition"></livewire:petition.comments>
                        </div>
                    </div>
                    @auth
                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                        <livewire:petition.comment-create :petition="$petition"></livewire:petition.comment-create>
                    </div>
                    @endauth
                </div>
            </section>
        </div>

        <section aria-labelledby="stats-title" class="hidden sm:block lg:col-start-3 lg:col-span-1">
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                <livewire:petition.vote :petition="$petition"></livewire:petition.vote>
            </div>
        </section>
    </div>
@push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--        <script>--}}

{{--            function log_impression(){--}}
{{--                axios.get('/api/analytics/impression')--}}
{{--                    .then(function (response) {--}}
{{--                        let data;--}}
{{--                        console.log(data);--}}
{{--                    });--}}
{{--            }--}}

{{--            $(function(){--}}
{{--                log_impression()--}}
{{--            });--}}

{{--        </script>--}}
@endpush
</x-app-layout>
