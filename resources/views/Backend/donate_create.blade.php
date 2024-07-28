<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donate Now!') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        

            <div class="card">
            <div class="card-header text-center">
            Add New Blood Donation
            </div>
            <div class="card-body">

<form method="POST" action="{{route('donations.store')}}">
@csrf

<div class="mb-3">
<label for="blood_group" class="form-label">Blood Group</label>
<select name="blood_group" class="form-select" id="blood_group">
    <option value="ORH+">ORH+</option>
    <option value="ORH-">ORH-</option>
    <option value="ARH+">ARH+</option>
    <option value="ARH+">ARH-</option>
    <option value="BRH+">BRH+</option>
    <option value="BRH-">BRH-</option>
</select>
@error('blood_group')
{{$message}}
@enderror
</div>

<div class="mb-3">
<label for="blood_cost" class="form-label">Cost (USD)</label>
<input type="Number" class="form-control" name="blood_cost" id="blood_cost">
@error('blood_cost')
{{$message}}
@enderror
</div>

<div class="mb-3">
<label for="blood_amount" class="form-label">Amount (CC)</label>
<input type="Number" class="form-control" name="blood_amount" id="blood_amount">
@error('blood_amount')
{{$message}}
@enderror
</div>




<button type="submit" class="btn btn-primary">Submit</button>
</form>
           
            </div>
            </div>


            </div>
        </div>
    </div>
</x-app-layout>
