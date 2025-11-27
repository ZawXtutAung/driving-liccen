<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit License') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.licenses.update', $license) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-6">
                            <!-- License Number -->
                            <div>
                                <x-input-label for="license_number" :value="__('License Number')" />
                                <x-text-input id="license_number" class="block mt-1 w-full" type="text"
                                    name="license_number" :value="old('license_number', $license->license_number)" required autofocus />
                                <x-input-error :messages="$errors->get('license_number')" class="mt-2" />
                            </div>

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name', $license->name)" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- NRC Number -->
                            <div>
                                <x-input-label for="nrc_number" :value="__('NRC Number')" />
                                <x-text-input id="nrc_number" class="block mt-1 w-full" type="text" name="nrc_number"
                                    :value="old('nrc_number', $license->nrc_number)" required />
                                <x-input-error :messages="$errors->get('nrc_number')" class="mt-2" />
                            </div>

                            <!-- Date of Birth -->
                            <div>
                                <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
                                <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date"
                                    name="date_of_birth"
                                    value="{{ old('date_of_birth', $license->date_of_birth->format('Y-m-d')) }}"
                                    required />
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                            </div>

                            <!-- Blood Type -->
                            <div>
                                <x-input-label for="blood_type" :value="__('Blood Type')" />
                                <x-text-input id="blood_type" class="block mt-1 w-full" type="text" name="blood_type"
                                    :value="old('blood_type', $license->blood_type)" maxlength="3" placeholder="e.g. A+" />
                                <x-input-error :messages="$errors->get('blood_type')" class="mt-2" />
                            </div>

                            <!-- Expiry Date -->
                            <div>
                                <x-input-label for="expiry_date" :value="__('Expiry Date')" />
                                <x-text-input id="expiry_date" class="block mt-1 w-full" type="date"
                                    name="expiry_date"
                                    value="{{ old('expiry_date', $license->expiry_date->format('Y-m-d')) }}" required />
                                <x-input-error :messages="$errors->get('expiry_date')" class="mt-2" />
                            </div>

                            <!-- License Type -->
                            <div>
                                <x-input-label for="license_type" :value="__('License Type')" />
                                <x-text-input id="license_type" class="block mt-1 w-full" type="text"
                                    name="license_type" :value="old('license_type', $license->license_type)" required maxlength="10"
                                    placeholder="e.g. A, B, C" />
                                <x-input-error :messages="$errors->get('license_type')" class="mt-2" />
                            </div>

                            <!-- Photo Path -->
                            <div>
                                <x-input-label for="photo_path" :value="__('Photo Path (Optional)')" />
                                <x-text-input id="photo_path" class="block mt-1 w-full" type="text" name="photo_path"
                                    :value="old('photo_path', $license->photo_path)" placeholder="e.g. /photos/license.jpg" />
                                <x-input-error :messages="$errors->get('photo_path')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mt-6">
                            <x-input-label for="address" :value="__('Address (Optional)')" />
                            <textarea id="address" name="address" rows="3"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('address', $license->address) }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Actions -->
                        <div class="flex items-center justify-end mt-6 gap-4">
                            <a href="{{ route('admin.licenses.index') }}"
                                class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                Cancel
                            </a>
                            <x-primary-button>
                                Update License
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
