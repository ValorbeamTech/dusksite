<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Member Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Create Member Information") }}
        </p>
    </header>

    <!-- <form id="contact-store" method="post" action="{{ route('contact.store') }}">
        @csrf
    </form> -->

    <form method="post" action="{{ route('member.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')"/>
            </div>
            <div class="w-full ml-1">
                <x-input-label for="profession" :value="__('Profession')" />
                <x-text-input id="profession" name="profession" type="text" class="mt-1 block w-full" required autofocus autocomplete="profession" />
                <x-input-error class="mt-2" :messages="$errors->get('profession')" />
            </div>
        </div>
      


        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="instagram_link" :value="__('Instagram_Link')" />
                <x-text-input id="instagram_link" name="instagram_link" type="text" class="mt-1 block w-full" required autofocus autocomplete="instagram_link" />
                <x-input-error class="mt-2" :messages="$errors->get('instagram_link')" />
            </div>

            <div class="w-full ml-1">
                <x-input-label for="facebook_link" :value="__('Facebook_Link')" />
                <x-text-input id="facebook_link" name="facebook_link" type="text" class="mt-1 block w-full" required autofocus autocomplete="facebook_link" />
                <x-input-error class="mt-2" :messages="$errors->get('facebook_link')" />
            </div>
        </div>

        <div class="flex row justify-between">
            <div class="w-full mr-1">
                <x-input-label for="twitter_link" :value="__('Twitter_Link')" />
                <x-text-input id="twitter_link" name="twitter_link" type="text" class="mt-1 block w-full" required autofocus autocomplete="twitter_link" />
                <x-input-error class="mt-2" :messages="$errors->get('twitter_link')" />
            </div>

            <div class="w-full ml-1">
                <x-input-label for="img" :value="__('Image')" />
                <input id="img" name="img" type="file" class="mt-1 block w-full" required autofocus autocomplete="img" readonly />
                <x-input-error class="mt-2" :messages="$errors->get('img')" />
            </div>
        </div>



        <div class="flex items-center gap-4">
            <!-- <x-primary-button>{{ __('Save') }}</x-primary-button> -->
            <button class="text-center w-full uppercase bg-gray-100 rounded py-2 font-semibold">Save</button>
            @if (session('status') === 'member-created')
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