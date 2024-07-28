<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Profile Picture') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure to upload your own image before any activity in the system.') }}
        </p>
    </header>
    <div class="p-3">
        <img src="{{asset($profile_photo)}}" alt="user-profile" height="150px" width="120px">
    </div>

    <form method="POST" action="{{ route('image') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="user_image" :value="__('Profile Picture')" />
            <x-text-input id="user_image" name="user_image" type="file" class="mt-1 block w-full" :value="old('user_image', $user->user_image)" autocomplete="user_image" />
            <x-input-error :messages="$errors->updatePassword->get('user_image')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
