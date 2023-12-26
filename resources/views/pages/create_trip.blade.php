@extends('layout.app')

@section('name')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                @if (session("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
                    
                @endif
                <div class="col">
                    <div class="h-10">
                        <form action="{{ route('trip.add') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               <div  class=" col-md-6 mb-3">
                                <label for="bus" class="form-floating">Select Bus</label>
                                <select name="bus_id" id="bus" class="form-select col-md-6">
                                    <option></option>
                                    @foreach ($buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->name }}</option>
                                    @endforeach
                                </select>
                               </div>
                               @error('bus_id')
                               <p class="text-danger"> {{ $message }}</p>
                           @enderror
                            </div>
                            <div class="row">
                                <div  class=" col-md-6 mb-3">
                                 <label for="line" class="form-floating">Select Line</label>
                                 <select name="line_id" id="line" class="form-select col-md-6">
                                    <option></option>
                                    @foreach ($lines as $line)
                                    <option value="{{ $line->id }}">{{ $line->name }}</option>
                                    @endforeach
                                 </select>
                                </div>
                                @error('line_id')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                            </div>
                             <div class="row">
                                <div  class=" col-md-6 mb-3">
                                 <label for="trip" class="form-floating">Trip Name</label>
                                <input type="text" name="name" id="trip" class="form-control" placeholder="Dhaka to Borisal">
                                </div>
                                @error('name')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                             </div>
                             <div class="row">
                                <div  class=" col-md-6 mb-3">
                                 <label for="time" class="form-floating">Trip Time</label>
                                <input type="time" name="time" id="time" class="form-control">
                                </div>
                                @error('time')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                             </div>
                             <div class="row">
                                <div  class=" col-md-6 mb-3">
                                    <input type="submit" value="Create" class="btn btn-primary px-5 float-end">
                                </div>
                             </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection