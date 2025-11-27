<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create License') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.licenses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-2 gap-6">
                            <!-- License Number -->
                            <div>
                                <x-input-label for="license_number" :value="__('License Number')" />
                                <x-text-input id="license_number" class="block mt-1 w-full" type="text"
                                    name="license_number" :value="old('license_number')" required autofocus />
                                <x-input-error :messages="$errors->get('license_number')" class="mt-2" />
                            </div>

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- NRC Number -->
                            <div>
                                <x-input-label for="nrc_number" :value="__('NRC Number')" />
                                <x-text-input id="nrc_number" class="block mt-1 w-full" type="text" name="nrc_number"
                                    :value="old('nrc_number')" required />
                                <x-input-error :messages="$errors->get('nrc_number')" class="mt-2" />
                            </div>

                            <!-- Date of Birth -->
                            <div>
                                <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
                                <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date"
                                    name="date_of_birth" :value="old('date_of_birth')" required />
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                            </div>

                            <!-- Blood Type -->
                            <div>
                                <x-input-label for="blood_type" :value="__('Blood Type')" />
                                <x-text-input id="blood_type" class="block mt-1 w-full" type="text" name="blood_type"
                                    :value="old('blood_type')" maxlength="3" placeholder="e.g. A+" />
                                <x-input-error :messages="$errors->get('blood_type')" class="mt-2" />
                            </div>

                            <!-- Expiry Date -->
                            <div>
                                <x-input-label for="expiry_date" :value="__('Expiry Date')" />
                                <x-text-input id="expiry_date" class="block mt-1 w-full" type="date"
                                    name="expiry_date" :value="old('expiry_date')" required />
                                <x-input-error :messages="$errors->get('expiry_date')" class="mt-2" />
                            </div>

                            <!-- License Type -->
                            <div>
                                <x-input-label for="license_type" :value="__('License Type')" />
                                <x-text-input id="license_type" class="block mt-1 w-full" type="text"
                                    name="license_type" :value="old('license_type')" required maxlength="10"
                                    placeholder="e.g. A, B, C" />
                                <x-input-error :messages="$errors->get('license_type')" class="mt-2" />
                            </div>

                            <!-- Photo Upload -->
                            <div>
                                <x-input-label for="photo" :value="__('Photo (Optional)')" />
                                <input id="photo"
                                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    type="file" name="photo" accept="image/*" />
                                <p class="mt-1 text-sm text-gray-500">Accepted formats: JPEG, PNG, JPG, GIF (Max: 2MB)
                                </p>
                                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mt-6">
                            <x-input-label for="address" :value="__('Address (Optional)')" />
                            <textarea id="address" name="address" rows="3"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('address') }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Actions -->
                        <div class="flex items-center justify-end mt-6 gap-4">
                            <a href="{{ route('admin.licenses.index') }}"
                                class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                Cancel
                            </a>
                            <x-primary-button>
                                Create License
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
