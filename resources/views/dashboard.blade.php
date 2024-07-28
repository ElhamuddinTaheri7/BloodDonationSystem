
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="card text-dark bg-warning mb-3" style="max-width: 100%;">
                    <div class="card-header text-center">Your Sweet Profile</div>
                    <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12  col-md-4 d-flex justify-content-center align-items-center" height="200px">
                            <img

                                src="{{asset($user_info->user_image)}}"
    
                                height="160px"
                                width="160px"
                                class="rounded-circle d-flex justify-content-center align-items-center"
                                alt="user profile"
                            /> 
                        </div>
                        <div class="col-sm-12  col-md-4" height="200px">
                            
                            <p class="card-title bold fs-3 fw-bolder">{{$user_info->name}} {{$user_info -> last_name}}</p>
                            <p class="card-text">{{$user_info->user_age}} years old </p>
                            <p class="card-text">Gender: {{$user_info->user_gender}} </p>
                            <p class="card-text">Tel: {{$user_info->user_phone}}</p>

                            <p class="card-text">Email: {{$user_info->email}}</p>
                        </div>
                        <div class="col-sm-12  col-md-4" height="200px">
                            <p class="card-text fs-5"><b>Note:</b>You can change or update your profile and authentication information  in any time you want. </p>
                            <br>
                            <a class="text-decoration-none fs-5 text-dark" href="{{route('profile.edit')}}" class="card-text fs-5">Click for Profile Settings!</a>

                        </div>
                    </div>
                    
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-light bg-primary mb-3">
                        <a href="{{route('my_messages')}}" class="text-decoration-none">
                        <div class="card-body">
                        <h5 class="card-title text-center text-light fs-1 fw-bolder">{{$message_model}}</h5>
                        <p class="card-text text-center text-light fs-1">Messages</p>
                        </div>
                        </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="card  bg-danger mb-3">
                        <a href="{{route('donations.index')}}" class="text-decoration-none">
                        <div class="card-body">
                        <h5 class="card-title fs-1 text-light text-center fw-bolder">{{$blood_active}}</h5>
                        <p class="card-text fs-1 text-light text-center">Active Donations</p>
                        </div>
                        </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="card bg-success mb-3">
                        <a href="{{route('donations.index')}}" class="text-decoration-none">
                        <div class="card-body">
                        <h5 class="card-title text-light text-center fs-1 fw-bolder">{{$blood_disabled}}</h5>
                        <p class="card-text text-light text-center fs-1">Disabled Donations</p>
                        </div>
                        </a>
                        </div>
                    </div>



                        
                        
                    
                    
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
<!-- 
    <h5 class="card-title">Warning</h5>
                    <p class="card-text">Some.</p>
 -->
