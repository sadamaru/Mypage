<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h2 class="font-semibold text-xl text-blueGray-700">{{ __('Create new project') }}</h2>
            </div>
          </div>
        </div>

        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <form method="POST" action="{{ route('project.store') }}">
            @csrf

            <div>
              <x-input-label for="project_name" :value="__('Project name')" />
              <x-text-input id="project_name" class="block mt-1 w-full" type="text" name="project_name" :value="old('project_name')" required autofocus autocomplete="project_name" />
              <x-input-error :messages="$errors->get('project_name')" class="mt-2" />
            </div>
    
            <div class="mt-4">
              <x-input-label for="project_detail" :value="__('Project detail')" />
              <x-textarea-input id="project_detail" class="block mt-1 w-full" name="project_detail" :value="old('project_detail')" autocomplete="project_detail" />
              <x-input-error :messages="$errors->get('project_detail')" class="mt-2" />
            </div>
    
            <div class="mt-4">
              <x-input-label for="src_url" :value="__('Source code URL')" />
              <x-text-input id="src_url" class="block mt-1 w-full" type="text" name="src_url" :value="old('src_url')" autofocus autocomplete="src_url" />
              <x-input-error :messages="$errors->get('src_url')" class="mt-2" />
            </div>
    
            <div class="mt-4">
              <x-input-label for="demo_url" :value="__('Demo URL')" />
              <x-text-input id="demo_url" class="block mt-1 w-full" type="text" name="demo_url" :value="old('demo_url')" autofocus autocomplete="demo_url" />
              <x-input-error :messages="$errors->get('demo_url')" class="mt-2" />
            </div>

            <div class="mt-4">
              <x-input-label for="start_date" :value="__('Start date')" />
              <x-text-input id="start_date" class="block mt-1 w-auto" type="date" name="start_date" :value="old('start_date')" required autofocus autocomplete="start_date" />
              <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>

            <div class="mt-4">
              <x-input-label for="end_date" :value="__('End date')" />
              <x-text-input id="end_date" class="block mt-1 w-auto" type="date" name="end_date" :value="old('end_date')" required autofocus autocomplete="end_date" />
              <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>

            <div class="mt-4">
              <x-input-label for="reward_money" :value="__('Reward money')" />
              <x-text-input id="reward_money" class="block mt-1 w-full" type="text" onblur="kanmaChange(this);" pattern="\d*" name="reward_money" :value="old('reward_money')" autofocus autocomplete="reward_money" />
              <x-input-error :messages="$errors->get('reward_money')" class="mt-2" />
            </div>

            <div class="mt-4">
              <x-input-label for="category" :value="__('Category')" />
              <label for="web" class="me-3 inline-flex items-center">
                <input id="web" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="web">
                <span class="ms-2 text-sm text-gray-600">{{ __('Web') }}</span>
              </label>
              <label for="wordpress" class="me-3 inline-flex items-center">
                <input id="wordpress" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="wordpress">
                <span class="ms-2 text-sm text-gray-600">{{ __('Wordpress') }}</span>
              </label>
              <label for="csharp" class="me-3 inline-flex items-center">
                <input id="csharp" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="csharp">
                <span class="ms-2 text-sm text-gray-600">{{ __('C#') }}</span>
              </label>
              <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ms-4">
                {{ __('Save') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<script>
  function kanmaChange(inputAns){
    let inputAnsValue = inputAns.value;
    let numberAns = inputAnsValue.replace(/[^0-9]/g, "");
    kanmaAns = numberAns.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
    if(kanmaAns.match(/[^0-9]/g)){
      inputAns.value= kanmaAns;
      return true;
    }
  };
</script>