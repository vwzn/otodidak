<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Time Line') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card dark:bg-gray-800">
                <div class="card-body ">
                    <form action="{{ route('tweets.store') }}" method="POST">
                        @csrf
                        <textarea name="content" class="textarea textarea-bordered w-full" rows="3" placeholder="What Do You Think ??"></textarea>
                        <input type="submit" value="Tweet" class="btn btn-secondary w-full my-3">
                    </form>
                </div>
            </div>
            @foreach ($tweets as $tweet)
                <div class="card my-4 dark:bg-gray-800">
                    <div class="card-body">
                        <div class="text-xl font-bold">
                            {{ $tweet->user->name }}
                        </div>
                        <p>
                            {{ $tweet->content }}
                        </p>
                        <div class="text-end">
                            <a href="{{ route('tweets.edit', $tweet->id)}}" class="link link-hover text-blue-400">Edit</a>
                            <span class="text-sm">
                                {{ $tweet->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
