@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="font-sm font-weight-bold mt-1 mr-2 text-center mb-0">CONTACT DETAILS</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('contact.update',$contact->id) }}" method="post">
                        @csrf @method('PATCH')
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                    value={{old('phonenumber') ? old('phonenumber') : $contact->phonenumber}}
                                    name='phonenumber' placeholder='Phonenumber'>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                            </div>
                            @error('phonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control"
                                    value={{old('email') ? old('email') : $contact->email}} name='email'
                                    placeholder='Email'>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                    value={{old('location') ? old('location') : $contact->location}} name='location'
                                    placeholder='Location'>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-map-marker pr-1"></i></span>
                                </div>
                            </div>
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary font-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection