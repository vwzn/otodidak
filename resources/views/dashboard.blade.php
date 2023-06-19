<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-body dark:bg-gray-800">
                    <form action="" method="POST">
                        @csrf
                        <textarea name="" class="textarea textarea-bordered w-full" rows="3" placeholder="What Do You Think ??"></textarea>
                        <input type="submit" value="Tweet" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
