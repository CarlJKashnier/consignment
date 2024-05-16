<x-VendorManagementLayout>
    <form method="POST" action="{{ route('update.vendors') }}" class="w-full max-w-lg">
        @csrf

        <!-- Name -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="company_name" :value="__('Company Name')"/>
                <x-text-input id="name" class="mt-1 w-full" type="text" name="company_name" :value="old('company_name')"
                              required autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('company_name')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="dba_name" :value="__('DBA Name')"/>
                <x-text-input id="name" class="mt-1 w-full" type="text" name="dba_name" :value="old('dba_name')"
                              required autocomplete="dba_name"/>
                <x-input-error :messages="$errors->get('dba_name')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="primary_contact_name" :value="__('Primary Contact')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text"
                              name="primary_contact_name"
                              :value="old('primary_contact_name')" required autocomplete="primary_contact_name"/>
                <x-input-error :messages="$errors->get('primary_contact_name')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="address_of_record" :value="__('Address')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text"
                              name="address_of_record"
                              :value="old('address_of_record')" required autocomplete="address_of_record"/>
                <x-input-error :messages="$errors->get('address_of_record')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="address2_of_record" :value="__('Address Line 2')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text"
                              name="address2_of_record"
                              :value="old('address2_of_record')" autocomplete="address2_of_record"/>
                <x-input-error :messages="$errors->get('address2_of_record')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="city_of_record" :value="__('City')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text" name="city_of_record"
                              :value="old('city_of_record')" required autocomplete="city_of_record"/>
                <x-input-error :messages="$errors->get('city_of_record')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="state_of_record" :value="__('State')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text" name="state_of_record"
                              :value="old('state_of_record')" required autocomplete="state_of_record"/>
                <x-input-error :messages="$errors->get('state_of_record')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="zip_of_record" :value="__('Zip Code')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text" name="zip_of_record"
                              :value="old('zip_of_record')" required autocomplete="zip_of_record"/>
                <x-input-error :messages="$errors->get('zip_of_record')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="consignment_percentage" :value="__('Consignment %')"/>
                <x-text-input id="name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="number"
                              name="consignment_percentage"
                              :value="old('consignment_percentage')" autocomplete="consignment_percentage"/>
                <x-input-error :messages="$errors->get('consignment_percentage')" class="mt-2"/>
            </div>
        </div>


        <div class="flex items-center justify-end mt-4 block">

            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>

    </form>
</x-VendorManagementLayout>
