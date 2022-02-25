<x-guest-layout>
    @section('content')
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group has-feedback feedback-left">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
            </div>

            <div class="form-group has-feedback feedback-left">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                <span class="mdi mdi-email form-control-feedback" aria-hidden="true"></span>
            </div>

            <div class="form-group has-feedback feedback-left">
                <x-jet-label for="telephone" value="{{ __('Telephone') }}" />
                <x-jet-input id="telephone" class="form-control" type="telephone" name="telephone" :value="old('telephone')" required />
                <span class="mdi mdi-phone form-control-feedback" aria-hidden="true"></span>
            </div>
            

            <div class="form-group">
                <select class="form-control @error('region_id') is-invalid @enderror" name="region_id" id="">
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}" {{ $region->id ? 'selected' : '' }}>{{ $region->nom }}</option>
                    @endforeach
                </select>
                @error('region_id')
                    <div class="invalid-feedback">
                        {{$errors->first('region_id')}}
                    </div>
                @enderror
            </div>
            
            <div class="form-group has-feedback feedback-left">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
            </div>

            <div class="form-group has-feedback feedback-left">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form-group has-feedback feedback-left">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="btn btn-primary">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        <hr>
        <footer class="col-sm-12 text-center">
          <p class="m-b-0">Copyright © 2020-2021 <a href="#">LMIO3</a>. Tous droits réservés</p>
        </footer>
@endsection
</x-guest-layout>
