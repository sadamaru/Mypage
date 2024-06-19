<x-app-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
              <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                  <h2 class="font-semibold text-xl text-blueGray-700">{{ __('List projects') }}</h2>
                </div>
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                  <x-a-primary-button href="{{ route('project.create') }}">{{ __('Create') }}</x-a-primary-button>
                </div>
              </div>
            </div>
          
            <!-- component -->
            <div class="rounded-t mb-0 px-4 py-3 border-0">
            <table class="border-collapse w-full">
              <thead>
                <tr>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Project name</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Category</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Start date</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">End date</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    KnobHome
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    German
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    2024/6/1
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    2024/6/30
                  </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                      <x-a-secondary-button href="{{ route('project.create') }}">{{ __('Show') }}</x-a-secondary-button>
                      <x-a-primary-button href="{{ route('project.create') }}">{{ __('Edit') }}</x-a-primary-button>
                      <x-a-danger-button href="{{ route('project.create') }}">{{ __('Delete') }}</x-a-danger-button>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>
