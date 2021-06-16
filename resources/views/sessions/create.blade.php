<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In</h1>
            <form method="POST" action="/sessions" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full"
                           name="username"
                           id="username"
                           value="{{ old('username') }}"
                           required
                    >
                    @error('username')
                    <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="password" class="border border-gray-400 p-2 w-full"
                           name="password"
                           id="password"
                           required
                    >
                    @error('password')
                    <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600"
                    > Log In
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
