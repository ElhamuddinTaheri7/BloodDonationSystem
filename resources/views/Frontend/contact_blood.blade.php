@extends('frontend.front_master')

@section('content')

<h1 class="title text-center">Contact Blood Donner</h1>
<hr>
<div class="container" style="padding-bottom:180px;min-height:calc(100vh-180px);">
<div class="card border-primary mb-3" style="max-width: 100%;">
  <div class="card-header">Request Form</div>
  <div class="card-body text-primary">
    <form action="{{route('contact_submit')}}" method="post">
      @csrf
      <input type="text" name="r_id" value="{{$r_id}}" readonly hidden>

      <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      @error('r_name')
      <p class="text-danger">{{'This field is required.'}}</p> 
      @enderror
      <input type="Text" class="form-control" id="name" name="r_name" placeholder="Name">
      </div>


      <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      @error('r_age')
      <p class="text-danger">{{'This field is required.'}}</p>
      @enderror
      <input type="Number" class="form-control" name="r_age" id="age" placeholder="Age">
      </div>

      <div class="mb-3">
      <label for="sickness" class="form-label">Sickness</label>
      @error('r_sickness')
      <p class="text-danger">{{'This field is required.'}}</p>
      @enderror
      <input type="Text" name="r_sickness" class="form-control" id="sickness" placeholder="Sickness">
      </div>

      <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      @error('r_email')
      <p class="text-danger">{{'This field is required.'}}</p>
      @enderror
      <input type="email" class="form-control" name="r_email" id="email" placeholder="Email">
      </div>

      <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      @error('r_gender')
      <p class="text-danger">{{'This field is required.'}}</p>
      @enderror
      <select name="r_gender" class="form-select" id="gender" aria-label="Default select example">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="none">Something else</option>
      </select>
      </div>

      <div class="mb-3">
      <label for="condition" class="form-label">Patient Condition</label>
      @error('r_condition')
      <p class="text-danger">{{'This field is required.'}}</p>
      @enderror
      <select class="form-select" name="r_condition" id="condition" aria-label="Default select example">
      <option value="good">Good</option>
      <option value="bad">Bad</option>
      <option value="very bad">Very Bad</option>
      <option value="extremly bad">Extremly Bad</option>
      </select>
      </div>

      
      <div class="mb-3">
      
    <input type="submit" name="submit" class="form-control py-2 mt-2 mb-3 bg-primary text-light" id="submit" value="Submit">
      </div>
      

    </form>
  </div>
</div>

</div>


@endsection