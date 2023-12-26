@extends('layout.app')

@section('name')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col">
                        <div class="h-10">
                            <form  action="{{ route('purchase.ticket') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="bus_id" value="{{ $bus_id }}">

                                    <div class=" col-md-6 mb-3">
                                        <label for="trip" class="form-floating">Select Trip</label>
                                        <select name="trip_id" id="trip" class="form-select col-md-6">
                                            <option></option>
                                            @foreach ($trips as $trip)
                                                <option value="{{ $trip->id }}">{{ $trip->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('trip_id')
                                        <p class="text-danger"> {{ $message }}</p>
                                    @enderror

                                    <div class=" col-md-6 mb-3">
                                        <label for="time" class="form-floating">Journey time</label>
                                        <select name="time" id="time" class="form-select col-md-6">
                                            <option></option>
                                            @foreach ($trips as $trip)
                                                <option value="{{ $trip->id }}">{{ $trip->time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('time')
                                        <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                    <div class=" col-md-6 mb-3">
                                        <label for="datepicker" class="form-floating">Date</label>
                                        <input type="text" id="datepicker" name="datepicker" class="form-control">

                                    </div>
                                    @error('datepicker')
                                        <p class="text-danger"> {{ $message }}</p>
                                    @enderror

                                    <div class=" col-md-6 mb-3">
                                        <label for="seat" class="form-floating">Seat</label>
                                        <select name="seat_id" id="seat" class="form-select col-md-6">
                                            <option></option>
                                            @foreach ($seats as $seat)
                                                <option value="{{ $seat->id }}">{{ $seat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('datepicker')
                                        <p class="text-danger"> {{ $message }}</p>
                                    @enderror

                                    <div class="row">
                                        <div class=" mb-3">
                                            <input type="submit" value="Purchase" class="btn btn-primary px-5 float-end">
                                        </div>
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
