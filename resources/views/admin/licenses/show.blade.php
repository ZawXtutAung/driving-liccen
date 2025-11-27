<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('License Details') }}
            </h2>
            <div class="flex gap-2">
                <a href="{{ route('admin.licenses.edit', $license) }}"
                    class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <a href="{{ route('admin.licenses.index') }}"
                    class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back to List
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- License Header Card -->
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 overflow-hidden shadow-lg rounded-lg mb-6">
                <div class="p-6 text-white">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-2xl font-bold mb-2">{{ $license->name }}</h3>
                            <p class="text-indigo-100 text-lg">{{ $license->license_number }}</p>
                        </div>
                        <div class="text-right">
                            @if ($license->expiry_date >= now())
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Active
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-red-100 text-red-800">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Expired
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Personal Information
                    </h4>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Full Name</p>
                            <p class="mt-2 text-base font-medium text-gray-900">{{ $license->name }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">NRC Number</p>
                            <p class="mt-2 text-base font-medium text-gray-900">{{ $license->nrc_number }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Date of Birth</p>
                            <p class="mt-2 text-base font-medium text-gray-900">
                                {{ $license->date_of_birth->format('M d, Y') }}</p>
                        </div>

                        @if ($license->blood_type)
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Blood Type</p>
                                <p class="mt-2 text-base font-medium text-gray-900">{{ $license->blood_type }}</p>
                            </div>
                        @endif

                        @if ($license->address)
                            <div class="bg-gray-50 p-4 rounded-lg md:col-span-2 lg:col-span-2">
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Address</p>
                                <p class="mt-2 text-base font-medium text-gray-900">{{ $license->address }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- License Details -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        License Details
                    </h4>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                            <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider">License Type</p>
                            <p class="mt-2 text-2xl font-bold text-blue-900">{{ $license->license_type }}</p>
                        </div>

                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <p class="text-xs font-semibold text-green-600 uppercase tracking-wider">Issue Date</p>
                            <p class="mt-2 text-lg font-semibold text-green-900">
                                {{ $license->created_at->format('M d, Y') }}</p>
                        </div>

                        <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                            <p class="text-xs font-semibold text-red-600 uppercase tracking-wider">Expiry Date</p>
                            <p class="mt-2 text-lg font-semibold text-red-900">
                                {{ $license->expiry_date->format('M d, Y') }}</p>
                            <p class="mt-1 text-sm text-red-600">
                                @if ($license->expiry_date >= now())
                                    Valid for {{ now()->diffInDays($license->expiry_date) }} more days
                                @else
                                    Expired {{ $license->expiry_date->diffForHumans() }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo Section -->
            @if ($license->photo_path)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                        <h4 class="text-lg font-semibold text-gray-900 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Photo
                        </h4>
                    </div>
                    <div class="p-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex flex-col items-center">
                                @php
                                    $photoUrl = $license->photo_path;
                                    // If it's not a full URL or absolute path, prepend storage path
if (!str_starts_with($photoUrl, 'http') && !str_starts_with($photoUrl, '/')) {
    $photoUrl = asset('storage/' . $photoUrl);
                                    }
                                @endphp
                                <img src="{{ $photoUrl }}" alt="License Photo"
                                    class="max-w-md rounded-lg shadow-lg" onerror="this.style.display='none'">
                                <p class="mt-4 text-sm text-gray-500 text-center">{{ $license->photo_path }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- QR Code Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                        </svg>
                        Public License QR Code
                    </h4>
                </div>
                <div class="p-6">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex flex-col items-center">
                            <div id="qrcode"
                                class="mb-4 p-4 bg-white rounded-lg shadow-sm flex justify-center items-center min-h-[256px]">
                            </div>
                            <button id="download-qr-btn"
                                class="hidden mb-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download QR Code
                            </button>
                            <p class="text-sm text-gray-600 text-center mb-2">Scan to view public license details</p>
                            @php
                                $publicUrl =
                                    url('/detail') . '?id=' . $license->id . '&nrc_number=' . $license->nrc_number;
                            @endphp
                            <a href="{{ $publicUrl }}" target="_blank"
                                class="text-sm text-indigo-600 hover:text-indigo-800 underline break-all">
                                {{ $publicUrl }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Metadata -->
            <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between gap-4 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="font-medium text-gray-700">Created:</span>
                            <span class="ml-2">{{ $license->created_at->format('M d, Y h:i A') }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span class="font-medium text-gray-700">Last Updated:</span>
                            <span class="ml-2">{{ $license->updated_at->format('M d, Y h:i A') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- QR Code Generation (using local library from app.js) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const qrUrl = '{{ url('/detail') }}?id={{ $license->id }}&nrc_number={{ $license->nrc_number }}';
            const qrContainer = document.getElementById('qrcode');

            if (!qrContainer) {
                console.error('QR code container not found');
                return;
            }

            // Show loading message
            qrContainer.innerHTML = '<p class="text-gray-500 text-center">Loading QR code...</p>';

            let attempts = 0;
            const maxAttempts = 50; // 5 seconds

            function checkAndGenerate() {
                attempts++;

                if (typeof window.QRCode !== 'undefined' && typeof window.QRCode.toCanvas === 'function') {
                    // Library is loaded, generate QR code
                    qrContainer.innerHTML = '';

                    const canvas = document.createElement('canvas');
                    canvas.id = 'qrcode-canvas';
                    canvas.style.display = 'block';
                    canvas.style.margin = '0 auto';
                    canvas.style.maxWidth = '100%';
                    canvas.style.height = 'auto';

                    try {
                        window.QRCode.toCanvas(canvas, qrUrl, {
                            width: 256,
                            margin: 2,
                            color: {
                                dark: '#000000',
                                light: '#FFFFFF'
                            },
                            errorCorrectionLevel: 'M'
                        }, function(error) {
                            if (error) {
                                console.error('QR Code generation error:', error);
                                qrContainer.innerHTML =
                                    '<p class="text-red-500 text-center">Failed to generate QR code. Please try again.</p>';
                            } else {
                                qrContainer.appendChild(canvas);

                                // Show download button
                                const downloadBtn = document.getElementById('download-qr-btn');
                                if (downloadBtn) {
                                    downloadBtn.classList.remove('hidden');
                                }

                                // Setup download functionality
                                setupDownloadButton(canvas);
                            }
                        });
                    } catch (e) {
                        console.error('QR Code exception:', e);
                        qrContainer.innerHTML =
                            '<p class="text-red-500 text-center">Error generating QR code: ' + e.message + '</p>';
                    }
                } else if (attempts < maxAttempts) {
                    // Library not loaded yet, wait and retry
                    setTimeout(checkAndGenerate, 100);
                } else {
                    // Max attempts reached, show error
                    qrContainer.innerHTML =
                        '<p class="text-red-500 text-center">QR Code library failed to load. Please refresh the page.</p>';
                }
            }

            // Start checking after a short delay to allow app.js to load
            setTimeout(checkAndGenerate, 100);

            // Download button functionality
            function setupDownloadButton(canvas) {
                const downloadBtn = document.getElementById('download-qr-btn');
                if (!downloadBtn) return;

                downloadBtn.addEventListener('click', function() {
                    try {
                        // Convert canvas to blob
                        canvas.toBlob(function(blob) {
                            if (!blob) {
                                alert('Failed to generate image. Please try again.');
                                return;
                            }

                            // Create download link
                            const url = URL.createObjectURL(blob);
                            const link = document.createElement('a');
                            link.href = url;
                            link.download = 'license-qr-code-{{ $license->license_number }}.png';
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);

                            // Clean up
                            setTimeout(function() {
                                URL.revokeObjectURL(url);
                            }, 100);
                        }, 'image/png');
                    } catch (e) {
                        console.error('Download error:', e);
                        alert('Failed to download QR code. Please try again.');
                    }
                });
            }
        });
    </script>
</x-admin-layout>
