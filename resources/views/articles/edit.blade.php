<x-app-layout>

    <x-slot name="pageTitle">
        Edit Article
    </x-slot>

    <div class="my-12 p-6 max-w-3xl mx-auto shadow bg-white rounded-lg">
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-6">
                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Fullname
                </label>
                <input value="{{ $article->fullname }}" name="fullname" type="text" id="fullname"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                @error('fullname')
                    <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Content
                </label>
                <textarea name="content" rows="5" type="text" id="content"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                    {{ $article->content }}
                </textarea>

                @error('content')
                    <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Rating
                </label>
                <input value="{{ $article->rating }}" name="rating" type="text" id="rating"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                @error('rating')
                <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="cover_image" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Cover Image
                </label>
                <input name="cover_image" type="file" id="cover_image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                @error('cover_image')
                    <p class="text-sm text-red-500"> {{ $message }} </p>
                @enderror
            </div>

            <div class="mb-6 w-1/2">
                <img src="{{ asset('storage/media/articles/' . $article->cover_image) }}" alt="cover iamge"
                    class="rounded">
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
        </form>
    </div>

</x-app-layout>
