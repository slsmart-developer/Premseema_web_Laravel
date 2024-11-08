{{-- <x-guest-layout>
   <x-jet-authentication-card>
       <x-slot name="logo">
           <x-jet-authentication-card-logo />
       </x-slot>

       <x-jet-validation-errors class="mb-4" />

       @if (session('status'))
           <div class="mb-4 font-medium text-sm text-green-600">
               {{ session('status') }}
           </div>
       @endif

       <form method="POST" action="{{ route('login') }}">
           @csrf

           <div>
               <x-jet-label for="email" value="{{ __('Email') }}" />
               <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
           </div>

           <div class="mt-4">
               <x-jet-label for="password" value="{{ __('Password') }}" />
               <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
           </div>

           <div class="block mt-4">
               <label for="remember_me" class="flex items-center">
                   <x-jet-checkbox id="remember_me" name="remember" />
                   <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
           </div>
</label>

           <div class="flex items-center justify-end mt-4">
               @if (Route::has('password.request'))
                   <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                       {{ __('Forgot your password?') }}
                   </a>
               @endif

               <x-jet-button class="ml-4">
                   {{ __('Log in') }}
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
              <li><a href="#">Sign In</a></li>
              <li>Page active</li>
            </ul>
          </div>
          <h1>Sign In</h1>
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-6 col-md-8">
            <div class="box_account">
              <h3 class="client">Already Client</h3>

               <x-jet-validation-errors class="mb-4" />
               <form method="POST" action="{{ route('login') }}">
               @csrf
                  <div class="form_container">
                    
                    
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email*" :value="old('email')" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" id="password_in" value="" placeholder="Password*" required autocomplete="current-password">
                    </div>
                    <div class="clearfix add_bottom_15">
                      <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                          <input type="checkbox" name="remember">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                      <div class="float-right"><a id="forgot" href="{{route('password.request')}}">Lost Password?</a></div>
                    </div>
                    <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                    <div id="forgot_pw">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
                      </div>
                      <p>A new password will be sent shortly.</p>
                      <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                    </div>
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
