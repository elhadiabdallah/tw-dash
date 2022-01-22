<div>
قائمة الدول
<input type="text" wire:model='search' placeholder="ابحث عن الدولة" />
<a href="{{ route('system.country.create') }}" class="px-4 py-2 rounded bg-sky-600 text-white">إضافة دولة</a>
<table class="table p-4 bg-white shadow rounded-lg" wire:loading.class='opacity-50'>
    <thead>
        <tr>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                #
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                اسم الدولة
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                علم الدولة 
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                كود الهاتف
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                التعديل
            </th>

            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                الحذف
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries as $country)
        <tr class="text-gray-700">
            <td class="border-b-2 p-4 dark:border-dark-5">
                {{ $country->id }}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
               {{ $country->name_ar }}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
               {{ $country->flag }}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
               {{ $country->code_phone }}
            </td>

            <td class="border-b-2 p-4 dark:border-dark-5">
            <a href="{{ route('system.country.edit', $country->id) }}">
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
</a>
            </td>

            <td class="border-b-2 p-4 dark:border-dark-5">
            <button wire:click='delete({{ $country->id }})'>

               <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6 text-red-300 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg>
</button>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="my-3">
{!! $countries->links() !!}
</div>
@if($countries->isEmpty())
للا توجد دول
@endif
</div>

