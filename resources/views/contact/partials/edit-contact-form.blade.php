<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Contact Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update Contact Information") }}
        </p>
    </header>

    <!-- <form id="contact-store" method="post" action="{{ route('contact.store') }}">
        @csrf
    </form> -->

    <form method="post" action="{{ route('contact.update', $contact->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $contact->phone)" required autofocus autocomplete="phone" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>

            <div class="w-full ml-1">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $contact->email)" required autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
      
        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="longitude" :value="__('Longitude')" />
                <x-text-input id="longitude" name="longitude" type="text" class="mt-1 block w-full" :value="old('longitude', $contact->longitude)" required autofocus autocomplete="longitude" />
                <x-input-error class="mt-2" :messages="$errors->get('longitude')" />
            </div>

            <div class="w-full ml-1">
                <x-input-label for="latitude" :value="__('Latitude')" />
                <x-text-input id="latitude" name="latitude" type="text" class="mt-1 block w-full" :value="old('latitude', $contact->latitude)" required autofocus autocomplete="latitude" />
                <x-input-error class="mt-2" :messages="$errors->get('latitude')" />
            </div>
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $contact->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="whatsapp_link" :value="__('Whatsapp_Link')" />
                <x-text-input id="whatsapp_link" name="whatsapp_link" type="text" class="mt-1 block w-full" :value="old('whatsapp_link', $contact->whatsapp_link)" required autofocus autocomplete="whatsapp_link" />
                <x-input-error class="mt-2" :messages="$errors->get('whatsapp_link')" />
            </div>

            <div class="w-full ml-1">
                <x-input-label for="linkedin_link" :value="__('Linkedin_Link')" />
                <x-text-input id="linkedin_link" name="linkedin_link" type="text" class="mt-1 block w-full" :value="old('linkedin_link', $contact->linkedin_link)" required autofocus autocomplete="linkedin_link" />
                <x-input-error class="mt-2" :messages="$errors->get('linkedin_link')" />
            </div>
        </div>

        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="instagram_link" :value="__('Instagram_Link')" />
                <x-text-input id="instagram_link" name="instagram_link" type="text" class="mt-1 block w-full" :value="old('instagram_link', $contact->instagram_link)" required autofocus autocomplete="instagram_link" />
                <x-input-error class="mt-2" :messages="$errors->get('instagram_link')" />
            </div>

            <div class="w-full ml-1">
                <x-input-label for="facebook_link" :value="__('Facebook_Link')" />
                <x-text-input id="facebook_link" name="facebook_link" type="text" class="mt-1 block w-full" :value="old('facebook_link', $contact->facebook_link)" required autofocus autocomplete="facebook_link" />
                <x-input-error class="mt-2" :messages="$errors->get('facebook_link')" />
            </div>
        </div>

        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="twitter_link" :value="__('Twitter_Link')" />
                <x-text-input id="twitter_link" name="twitter_link" type="text" class="mt-1 block w-full" :value="old('twitter_link', $contact->twitter_link)" required autofocus autocomplete="twitter_link" />
                <x-input-error class="mt-2" :messages="$errors->get('twitter_link')" />
            </div>

            <div class="w-full ml-1">
            <x-input-label for="user" :value="__('User')" />
            <x-text-input id="user" name="created_by" type="text" class="mt-1 block w-full" :value="old('created_by', $user->email)" required autofocus autocomplete="username" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('created_by')" />
            </div>
        </div>



        <div class="flex items-center gap-4">
            <!-- <x-primary-button>{{ __('Save') }}</x-primary-button> -->
            <button class="text-center w-full uppercase bg-gray-100 rounded py-2 font-semibold">Save</button>
            @if (session('status') === 'contact-created')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
