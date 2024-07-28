@extends('frontend.front_master')

@section('content')
<div class="container">
<h3 class="text text-center my-2">Explore Blood Bank</h3>
<hr>
@if(count($all_data) == 0)
<h4 style="height:90vh;display:flex;justify-content:center;align-items:center;">Ooops! No Records Avialable!</h4>
@endif

@foreach($all_data as $data)

<div class="card mb-3" style="max-width: 100%;">
<div class="row g-0">

    <div class="col-sm-4  col-md-3 d-flex justify-content-center align-items-center" height="200px">
    <img
    src="{{asset($data->user_image)}}"
    height="160px"
    width="160px"
    class="rounded-circle d-flex justify-content-center align-items-center"
    alt="user profile"
    /> 
    </div>

<div class="col-sm-8 col-md-9">
<div class="card-body">
<div class="container">
    <div class="row">
    <h5 class="card-title col-sm-12">{{$data -> user_name}} {{$data->last_name}}</h5>
    <p class="card-text col-sm-12 col-md-6">Blood Group: {{$data -> blood_group}}</p>
    <p class="card-text col-sm-12 col-md-6">Age: {{$data -> user_age}}</p>
    <p class="card-text col-sm-12 col-md-6">Maximum Amount: {{$data -> blood_amount}} cc</p>
    <p class="card-text col-sm-12 col-md-6">Gender: {{$data -> user_gender}}</p>
    <p class="card-text col-sm-12 col-md-6">Cost: {{$data -> blood_cost}} $</p>
    <a href="{{route('contact',$data ->user_id)}}" class="card-text col-sm-12 col-md-6 btn btn-outline-primary">Contact</a>
    </div>
</div>
<p class="card-text"><small class="text-muted">Last Update: @php echo substr($data -> date,0,10) @endphp</small></p>
</div>
</div>
</div>
</div>
@endforeach

</div>
</div>


@endsection