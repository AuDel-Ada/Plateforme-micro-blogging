<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in ! These are the last posts on Blurry Tof :
                </div>
            </div>
        </div>
    </div>

    <div class="p-6">
              @foreach ($articles as $article)

              <div class="mt-5 text-gray-600 dark:text-gray-400 text-sm">

                <div>
                  <td>{{ $article->id }}</td>
                  <td><strong>{{ $article->created_at }}</strong></td>

                  <td>by</td>
                  <td><strong>{{ $article->user_id }}</strong></td>
                  
                  <div>
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

</x-app-layout>
