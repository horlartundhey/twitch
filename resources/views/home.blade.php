@extends('layouts.app')

@section('content')


<div class="lg:flex lg:justify-between">

    <div class="lg:w-32">        
        @include('sidebar_links')    
    </div>


    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">     
        @include('publish_tweet_panel')


        <div class="border border-gray-300 rounded-lg">
            @foreach ($twitch as $twitch)
                @include('twitch')
            @endforeach            
                    
        </div>



    </div>

    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
        @include('friends_lists')    
    </div>

</div>


{{-- Dashboard --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
