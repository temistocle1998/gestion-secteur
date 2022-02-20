@extends('layouts.app')
@section('content')
    
        <div class="col-lg-12">
          <div class="card">
            <div class="card-toolbar clearfix">
             
            </div>
            <div class="card-body">
              
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

            @endif
        </div>
   
            </div>
          </div>
          @endsection
