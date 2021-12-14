<x-guest-layout>

    <div class="row row-x-center s-styles">
      <div class="column large-6 tab-12">

        <form class="h-add-bottom" method="POST" action="{{ route('writeNewPost') }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        
          <!-- description -->
          <div>
            <label for="description">@lang('Description')</label> 
            <input 
              id="description" 
              class="h-full-width" 
              type="text" 
              name="description" 
              placeholder="@lang('So what is it ?')">
            </div>

            <!-- photo -->
            <div>
              <label for="img_url">@lang('Photo')</label> 
              <input 
                id="img_url" 
                class="h-full-width" 
                type="file" 
                name="img_url" >
            </div>
        
            <x-button class="ml-3">
              {{ __('save') }}
            </x-button> 
        </form>
    
    </div>
  </div>
</x-guest-layout>