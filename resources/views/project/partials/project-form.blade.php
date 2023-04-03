<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Project Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Create Project Information") }}
        </p>
    </header>

    <!-- <form id="contact-store" method="post" action="{{ route('contact.store') }}">
        @csrf
    </form> -->

    <form method="post" action="{{ route('testimonial.create') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        
            <div class="w-full mr-1">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  required autofocus autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" type="text" class="mt-1 block w-full rounded" required autofocus autocomplete="description"></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div class="w-full ml-1">
                <x-input-label for="img" :value="__('Image')" />
                <input id="img" name="img" type="file" class="mt-1 block w-full" required autofocus autocomplete="img" readonly />
                <x-input-error class="mt-2" :messages="$errors->get('img')" />
        </div>

       

        <div class="flex items-center gap-4">
            <!-- <x-primary-button>{{ __('Save') }}</x-primary-button> -->
            <button class="text-center w-full uppercase bg-gray-100 rounded py-2 font-semibold">Save</button>
            @if (session('status') === 'testimonial-updated')
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