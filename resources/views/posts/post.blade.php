<x-app-layout>
    <x-slot name="header">
        <x-nav-link :href="route('post.viewList')">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Post list') }}
            </h2>
        </x-nav-link>
        <x-nav-link :href="route('post.create')">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create post') }}
            </h2>
        </x-nav-link>
    </x-slot>


        <div class="pt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p class="pb-3">{{ $post['title'] }}</p>
                        <hr>
                        <p class="py-4">{{ $post['description'] }}</p>
                        <hr>
                        <p class="pt-3">{{ $post['author_name'] }}</p>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
