<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Welcome to the Admin Dashboard,
                        <strong>{{ Auth::guard('admin')->user()->name }}</strong>!
                    </p>
                    <p class="mb-2">You are logged in as an administrator.</p>
                    <p>Email: {{ Auth::guard('admin')->user()->email }}</p>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="mt-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Quick Stats</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <p class="text-sm text-gray-600">Total Licenses</p>
                            <p class="text-2xl font-bold text-blue-600">{{ \App\Models\License::count() }}</p>
                        </div>
                        <div class="p-4 bg-green-50 rounded-lg">
                            <p class="text-sm text-gray-600">Active Licenses</p>
                            <p class="text-2xl font-bold text-green-600">
                                {{ \App\Models\License::where('expiry_date', '>=', now())->count() }}</p>
                        </div>
                        <div class="p-4 bg-yellow-50 rounded-lg">
                            <p class="text-sm text-gray-600">Expired Licenses</p>
                            <p class="text-2xl font-bold text-yellow-600">
                                {{ \App\Models\License::where('expiry_date', '<', now())->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="{{ route('admin.licenses.create') }}"
                            class="p-6 border-2 border-indigo-300 rounded-lg hover:border-indigo-500 hover:bg-indigo-50 transition duration-150">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-10 w-10 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Create New License</h4>
                                    <p class="text-sm text-gray-500">Add a new driving license to the system</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('admin.licenses.index') }}"
                            class="p-6 border-2 border-gray-300 rounded-lg hover:border-gray-500 hover:bg-gray-50 transition duration-150">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-10 w-10 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">View All Licenses</h4>
                                    <p class="text-sm text-gray-500">Browse and manage all licenses</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
