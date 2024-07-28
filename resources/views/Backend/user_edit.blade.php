<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update User') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        

            <div class="card">
            <div class="card-header text-center">
            Update User
            </div>
            <div class="card-body">

<form method="POST" action="{{route('user.update',$user -> id)}}">
@csrf
@method('PUT')
<!-- User first name -->
<div class="mb-3">
<label for="user_name" class="form-label">First Name</label>
<input type="text" class="form-control" value="{{$user -> name}}" name="name" id="user_name">
@error('name')
{{$message}}
@enderror
</div>

<!-- user last name -->
<div class="mb-3">
<label for="user_last_name" class="form-label">Last Name</label>
<input type="text" class="form-control" value="{{$user -> last_name}}" name="last_name" id="user_last_name">
@error('name')
{{$message}}
@enderror
</div>

<!-- user email -->
<div class="mb-3">
<label for="user_email" class="form-label">Email</label>
<input type="email" class="form-control" value="{{$user -> email}}" name="email" id="user_email">
@error('email')
{{$message}}
@enderror
</div>

<!-- user phone -->
<div class="mb-3">
<label for="user_phone" class="form-label">Phone</label>
<input type="text" class="form-control" value="{{$user -> user_phone}}" name="user_phone" id="user_phone">
@error('user_phone')
{{$message}}
@enderror
</div>

<!-- user age -->
<div class="mb-3">
<label for="user_age" class="form-label">Age</label>
<input type="Number" class="form-control" value="{{$user -> user_age}}" name="user_age" id="user_age">
@error('user_age')
{{$message}}
@enderror
</div>

<!-- user gender -->
<div class="mb-3">
<label for="user_gender" class="form-label">Gender</label>
<select class="form-select" name="user_gender" id="user_gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>
</div>

<!-- user auth -->
<div class="mb-3">
<label for="user_auth" class="form-label">Auth</label>
<select class="form-select" name="user_auth" id="user_auth">
    <option value="user">User</option>
    <option value="admin">Admin</option>
</select>
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

<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
           
            </div>
            </div>


            </div>
        </div>
    </div>
</x-app-layout>
