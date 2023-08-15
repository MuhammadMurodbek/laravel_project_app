<x-layout>

    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="min-h-screen bg-gray-200">

        <x-navbar></x-navbar>

        @can('create applications')

            @if (session()->get('submit'))
                <div class=" w-1/3 bg-green-400 text-white text-center mx-auto mt-3 rounded-md px-4 py-1">
                    {{ session()->get('submit') }}
                </div>
            @endif
            <div class="w-full text-center mt-5 font-bold">Crate Application</div>
            <x-form-user></x-form-user>
        @endcan

        @can('show applications')
            <div class="w-full text-center mt-5 font-bold">Blogs</div>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
            <x-blogs></x-blogs>
        @endcan
    </div>

</x-layout>
