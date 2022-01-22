<div class="flex flex-col">

  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <input class="w-1/4 rounded my-2"  type="text" wire:model='search' placeholder="ابحث عن المستخدمين" />
     <select wire:model='field'>
        <option value=0>بواسطة الاسم واللقب</option>
        <option value=1>بواسطة الايميل</option>
        <option value = 2>بواسطة اسم المستخدم</option>
     </select>

    <select wire:model='field'>
        <option value=0>اختر المستوى</option>
        <option value=1>بواسطة الايميل</option>
        <option value = 2>بواسطة اسم المستخدم</option>
     </select>

    <select wire:model='field'>
        <option value=0>اختر الشارة</option>
        <option value=1>بواسطة الايميل</option>
        <option value = 2>بواسطة اسم المستخدم</option>
     </select>

         <select wire:model='field'>
        <option value=0>اختر البلد</option>
        <option value=1>بواسطة الايميل</option>
        <option value = 2>بواسطة اسم المستخدم</option>
     </select>
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
             الاسم الكامل
              </th>
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                البريد الالكتروني
              </th>
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                حالة الحساب
              </th>
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                اﻷدوات
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($users as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10 ml-4">
                    <img class="h-10 w-10 rounded-full" src="{{asset('images/'.$user->profile->avatar) }}" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $user->profile->full_name }}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{ $user->username }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
            {{ $user->email }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                @if($user->email_verified_at)
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  مفعّل
                </span>
                @else
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                   غير مفعّل
                </span> 
                @endif             
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Admin
              </td>
            </tr>
            @endforeach

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
