<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('About Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update About Information") }}
        </p>
    </header>

    <!-- <form id="contact-store" method="post" action="{{ route('contact.store') }}">
        @csrf
    </form> -->

    <form method="post" action="{{ route('about.update', $about->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
       

        <div>
            <x-input-label for="about_paragraph" :value="__('Description')" />
            <textarea id="about_paragraph" name="about_paragraph" type="text" class="mt-1 block w-full rounded" required autofocus autocomplete="about_paragraph">{{ old('about_paragraph', $about->about_paragraph) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('about_paragraph')" />
        </div>

        <div>
            <x-input-label for="design_approach" :value="__('Design Approach')" />
            <textarea id="design_approach" name="design_approach" type="text" class="mt-1 block w-full rounded" required autofocus autocomplete="design_approach">{{ old('design_approach', $about->design_approach) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('design_approach')" />
        </div>

        <div>
            <x-input-label for="innovative_solutions" :value="__('Innovative Solutions')" />
            <textarea id="innovative_solutions" name="innovative_solutions" type="text" class="mt-1 block w-full rounded" required autofocus autocomplete="innovative_solutions">{{ old('innovative_solutions', $about->innovative_solutions) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('innovative_solutions')" />
        </div>


        <div>
            <x-input-label for="project_management" :value="__('Project Management')" />
            <textarea id="project_management" name="project_management" type="text" class="mt-1 block w-full rounded" required autofocus autocomplete="project_management">{{ old('project_management', $about->project_management) }} </textarea>
            <x-input-error class="mt-2" :messages="$errors->get('project_management')" />
        </div>
   

        <div class="w-full mr-1">
                <x-input-label for="years_of_experienece" :value="__('Years Of Experience')" />
                <x-text-input id="years_of_experienece" name="years_of_experienece" type="text" class="mt-1 block w-full" :value="old('years_of_experienece', $about->years_of_experienece)" required autofocus autocomplete="years_of_experienece" />
                <x-input-error class="mt-2" :messages="$errors->get('years_of_experienece')" />
        </div>

        <div class="flex items-center gap-4">
            <!-- <x-primary-button>{{ __('Save') }}</x-primary-button> -->
            <button class="text-center w-full uppercase bg-gray-100 rounded py-2 font-semibold">Save</button>
            @if (session('status') === 'about-updated')
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
