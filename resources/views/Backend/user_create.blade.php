<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        

            <div class="card">
            <div class="card-header text-center">
            Add New User
            </div>
            <div class="card-body">

<form method="POST" action="{{route('user.store')}}">
@csrf

<div class="mb-3">
<label for="user_name" class="form-label">First Name</label>
<input type="text" class="form-control" name="name" id="user_name">
@error('name')
{{$message}}
@enderror
</div>

<div class="mb-3">
<label for="user_email" class="form-label">Email</label>
<input type="email" class="form-control" name="email" id="user_email">
@error('email')
{{$message}}
@enderror
</div>

<div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


<button type="submit" class="btn btn-primary">Submit</button>
</form>
           
            </div>
            </div>


            </div>
        </div>
    </div>
</x-app-layout>
