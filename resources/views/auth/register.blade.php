{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
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

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



<x-guest-layout>
  <main class="bg_gray">

        <div class="container margin_30">
          <div class="page_header">
            <div class="breadcrumbs">
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Register</a></li>
                <li>Page active</li>
              </ul>
            </div>
            <h1>Create an Account</h1>
          </div>
          <!-- /page_header -->
          <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-8">
              <div class="box_account">
                <h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>

                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form_container">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email_2" placeholder="Email*" :value="email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password_in_2" value="" placeholder="Password*" required autocomplete="new-password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" id="password_in_2" value="" placeholder="Confirm Password*" required autocomplete="new-password">
                  </div>
                  <div class="private box">
                    <div class="row no-gutters">
                      <div class="col-6 pr-1">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Name*" :value="name" required autofocus autocomplete="name">
                        </div>
                      </div>
                      <div class="col-6 pl-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Last Name*">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Full Address*">
                        </div>
                      </div>
                    </div>
                    <!-- /row -->
                    <div class="row no-gutters">
                      <div class="col-6 pr-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="City*">
                        </div>
                      </div>
                      <div class="col-6 pl-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Postal Code*">
                        </div>
                      </div>
                    </div>
                    <!-- /row -->

                    <div class="row no-gutters">
                      <div class="col-6 pr-1">
                        <div class="form-group">
                          <div class="custom-select-form">
                            <select class="wide add_bottom_10" name="country" id="country">
                              <option value="" selected>Country*</option>
                              <option value="Europe">Europe</option>
                              <option value="United states">United states</option>
                              <option value="Asia">Asia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 pl-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Telephone *">
                        </div>
                      </div>
                    </div>
                    <!-- /row -->

                  </div>
                  <!-- /private -->
                  <div class="company box" style="display: none;">
                    <div class="row no-gutters">
                      <div class="col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Company Name*">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Full Address">
                        </div>
                      </div>
                    </div>
                    <!-- /row -->
                    <div class="row no-gutters">
                      <div class="col-6 pr-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="City*">
                        </div>
                      </div>
                      <div class="col-6 pl-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Postal Code*">
                        </div>
                      </div>
                    </div>
                    <!-- /row -->
                    <div class="row no-gutters">
                      <div class="col-6 pr-1">
                        <div class="form-group">
                          <div class="custom-select-form">
                            <select class="wide add_bottom_10" name="country" id="country_2">
                              <option value="" selected>Country*</option>
                              <option value="Europe">Europe</option>
                              <option value="United states">United states</option>
                              <option value="Asia">Asia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 pl-1">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Telephone *">
                        </div>
                      </div>
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /company -->
                  <hr>
                  <div class="form-group">
                    <label class="container_check">Accept <a href="#0">Terms and conditions</a>
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="text-center"><input type="submit" name="register" value="Register" class="btn_1 full-width"></div>
                </div>
                </form>
                <!-- /form_container -->
              </div>
              <!-- /box_account -->
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </main>
</x-guest-layout>
