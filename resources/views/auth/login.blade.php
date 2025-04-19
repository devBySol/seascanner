@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto py-12">
  <h2 class="text-2xl font-bold text-center mb-6">Login to SeaScanner</h2>

  @if ($errors->any())
  <div class="bg-red-100 text-red-600 px-4 py-2 rounded mb-4">
    {{ $errors->first() }}
  </div>
  @endif

  <form method="POST" action="{{ route('login') }}" class="space-y-4">
    @csrf
    <div>
      <label class="block text-sm mb-1">Email</label>
      <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded" />
    </div>

    <div>
      <label class="block text-sm mb-1">Password</label>
      <input type="password" name="password" required class="w-full px-4 py-2 border rounded" />
    </div>

    <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded hover:bg-teal-600">
      Login
    </button>
  </form>
</div>
@endsection