<x-VendorManagementLayout>
    <form method="POST" action="{{ route('update.vendors') }}" class="w-full max-w-lg">
        @csrf

        <!-- Name -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="company_name" :value="__('Company Name')"/>
                <x-text-input id="company_name" class="mt-1 w-full" type="text" name="company_name" :value="$vendorData['company_name']"
                              required autofocus autocomplete="company_name" v/>
                <x-input-error :messages="$errors->get('company_name')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="dba_name" :value="__('DBA Name')"/>
                <x-text-input id="dba_name" class="mt-1 w-full" type="text" name="dba_name" :value="$vendorData['dba_name']"
                              required autocomplete="dba_name"/>
                <x-input-error :messages="$errors->get('dba_name')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="primary_contact_name" :value="__('Primary Contact')"/>
                <x-text-input id="primary_contact_name" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text"
                              name="primary_contact_name"
                              :value="$vendorData['primary_contact_name']" required autocomplete="primary_contact_name"/>
                <x-input-error :messages="$errors->get('primary_contact_name')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="address_of_record" :value="__('Address')"/>
                <x-text-input id="address_of_record" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text"
                              name="address_of_record"
                              :value="$vendorData['address_of_record']" required autocomplete="address_of_record"/>
                <x-input-error :messages="$errors->get('address_of_record')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="address2_of_record" :value="__('Address Line 2')"/>
                <x-text-input id="address2_of_record" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text"
                              name="address2_of_record"
                              :value="$vendorData['address2_of_record']" autocomplete="address2_of_record"/>
                <x-input-error :messages="$errors->get('address2_of_record')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="city_of_record" :value="__('City')"/>
                <x-text-input id="city_of_record" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text" name="city_of_record"
                              :value="$vendorData['city_of_record']" required autocomplete="city_of_record"/>
                <x-input-error :messages="$errors->get('city_of_record')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="state_of_record" :value="__('State')"/>
                <x-text-input id="state_of_record" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text" name="state_of_record"
                              :value="$vendorData['state_of_record']" required autocomplete="state_of_record"/>
                <x-input-error :messages="$errors->get('state_of_record')" class="mt-2"/>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="zip_of_record" :value="__('Zip Code')"/>
                <x-text-input id="zip_of_record" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="text" name="zip_of_record"
                              :value="$vendorData['zip_of_record']" required autocomplete="zip_of_record"/>
                <x-input-error :messages="$errors->get('zip_of_record')" class="mt-2"/>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-input-label for="consignment_percentage" :value="__('Consignment %')"/>
                <x-text-input id="consignment_percentage" class="w-full md:w-1/2 px-3 mb-6 md:mb-0" type="number"
                              name="consignment_percentage"
                              :value="$vendorData['consignment_percentage']" autocomplete="consignment_percentage"/>
                <x-input-error :messages="$errors->get('consignment_percentage')" class="mt-2"/>
                <x-text-input id="id" class="hidden" type="number"
                              name="id"
                              :value="$vendorData['id']" autocomplete="id"/>
            </div>
        </div>


        <div class="flex items-center justify-end mt-4 block">

            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>

    </form>
</x-VendorManagementLayout>
