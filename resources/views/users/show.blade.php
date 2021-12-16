<x-app-layout>

  <x-slot name="header">
    <div class="flex items-right flex justify-left ml-10">

      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('My profile') }}
      </h2>
      <a href="/modifProfile" class="ml-40 underline ">Edit my profile</a>
      <a href="/writeNewPost" class="ml-20 underline ">New post</a>

    </div>
  </x-slot>

  <body class="antialiased">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
      <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

        <div class="p-6">

          <div class="flex items-center">
            <img src="{{ $user->img_profil }}" class="w-20 mb-3 shadow-xl rounded-full mt-0">
            <div class="ml-4 text-lg leading-7 font-semibold">{{$user->name }}</div>
          </div>

          <div class="flex items-center">
            <div class="ml-4 text-lg leading-7 font-semibold">Biography</div>
          </div>

            <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-lg">
                {{$user->biography}}
              </div>
            </div>
        </div>

          <div class="p-6 border-t border-gray-200 dark:border-gray-700">

            <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
              </svg>
              <div class="ml-4 text-lg leading-7 font-semibold">MyPosts</div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2" >
              @foreach($articles as $article)

              <div class="mt-5 text-gray-600 dark:text-gray-400 text-lg">

                <div>
                  <td>{{ $article->id }}</td>
                  <td><strong>{{ $article->created_at }}</strong></td>
                  
                  <div class="ml-10">
                    <td>{{ $article->description }}</td>
                    <td><img src="{{ $article->img_url }}"></td>
                    
                    <div  class="flex flex-row ml-20">
                      <td><a class="button is-warning border-2 mt-2" href="">Modifier</a>
                        <form action="" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="button is-danger border-2 mt-2 ml-2" type="submit">Supprimer</button>
                        </form>
                      </td>
                    </div>
                  </div>
                </div>

              </div>

              @endforeach
            </div>

          </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
          <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Blurry Tof by Aurelie Delaunay
          </div>
        </div>

      </div>
    </div>
  </body>

</x-app-layout>