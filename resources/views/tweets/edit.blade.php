<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card dark:bg-gray-800">
                <div class="card-body ">
                    <form action="{{ route('tweets.update', $tweet->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <textarea name="content" class="textarea textarea-bordered w-full" rows="3">{{ $tweet->content }}</textarea>
                        <input type="submit" value="Edit" class="btn btn-secondary w-full my-3">
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
