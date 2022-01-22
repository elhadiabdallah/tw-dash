<div>
   <h1>إضافة دولة</h1>
   <form wire:submit.prevent='saveCountry'>
                <div>
                <x-label for="name_ar" :value="__('اسم الدولة')" />
                <x-input wire:model.lazy='name_ar' id="name_ar" class="block mt-1 w-full" type="text" name="name_ar" :value="old('name_ar')" />
                @error('name_ar') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

                        <div>
                <x-label for="flag" :value="__('علم الدولة')" />
                <x-input wire:model.lazy='flag' id="flag" class="block mt-1 w-full" type="text" name="flag" :value="old('flag')" />
                @error('flag') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

                        <div>
                <x-label for="code_phone" :value="__('رمز الهاتف للدولة')" />
                <x-input wire:model.lazy='code_phone' id="code_phone" class="block mt-1 w-full" type="text" name="code_phone" :value="old('code_phone')"  />
                @error('code_phone') <span class="text-red-500">{{ $message }}</span> @enderror
            </div> 
            <div class="mt-5">
                <button class="px-4 py-2 bg-emerald-600 hover:bg-emerald-800 rounded text-white" type="submit">إضافة</button>
                <button class="bg-gray-400 px-4 py-2 hover:bg-gray-500 rounded" type="button" wire:click='resetForm'>تفريغ</button>
            </div>
   </form>
</div>
