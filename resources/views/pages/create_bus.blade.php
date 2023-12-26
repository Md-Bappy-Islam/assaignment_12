@extends('layout.app')

@section('name')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-10">
                        <form action="{{ route('bus.add') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                @if (session("success"))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                </div>
                                    
                                @endif
                                <div  class=" col-md-6 mb-5">
                                 <label for="trip" class="form-floating">Add Bus</label>
                                <input type="text" name="name" id="trip" class="form-control" placeholder="Symoly">
                                @error('name')
                                <p class="text-danger"> {{ $message }}</p>
                            @enderror
                                </div>
                             </div>
                             <div class="row">
                                <div  class=" col-md-6 mb-5">
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