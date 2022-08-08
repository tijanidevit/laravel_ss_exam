@extends('admin.layout.app')

@section('title')
    Add Teacher
@endsection

@section('page_title')
    Add Teacher
@endsection

@section('page_description')
    Add a new teacher here
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('admin.teachers.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title"><span>Teacher Details</span></h5>
                        </div>
                        <div class="col-12">
                            @if (session('error'))
                                <div class="text-danger">{{session('error')}}</div>
                            @endif
                        </div>
                        
                        <div class="col-12">
                            @if (session('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                        </div>

                        
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Teacher ID</label>
                                <input type="text" name="staff_id" value="{{old('staff_id')}}" class="form-control">
                                @error('staff_id')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="fullname" value="{{old('fullname')}}" class="form-control">
                                @error('fullname')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" accept="image/*" value="{{old('image')}}" class="form-control">
                                @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    
                    <div class="col-12">
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea type="text" name="bio"  class="form-control">{{old('bio')}}</textarea>
                            @error('bio')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection