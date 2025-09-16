@extends('layouts.admin_panel')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-[#1a1a1a] rounded-lg shadow-lg p-6 text-center">
        <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-exclamation-triangle text-2xl text-white"></i>
        </div>
        <h2 class="text-2xl font-bold text-white mb-4">Access Denied</h2>
        <p class="text-gray-400 mb-6">Sorry, you don't have permission to access this page. Only administrators can manage user access control.</p>
        <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
            Return to Dashboard
        </a>
    </div>
</div>
@endsection