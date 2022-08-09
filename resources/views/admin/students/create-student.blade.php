@extends('admin.layout.app')

@section('title')
    Add Student
@endsection

@section('page_title')
    Add Student
@endsection

@section('page_description')
    Add a new student here
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('admin.students.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title"><span>Student Details</span></h5>
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
                                <label>Class</label>
                                <select name="form_id" class="form-control">
                                    @forelse ($forms as $form)
                                        <option value="{{$form->id}}">{{$form->name}}</option>
                                    @empty
                                        
                                    @endforelse
                                </select>
                                @error('form_id')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Registration number</label>
                                <input type="text" name="reg_no" value="{{old('reg_no')}}" class="form-control">
                                @error('reg_no')
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
                                <label>Image</label>
                                <input type="file" name="image" accept="image/*" value="{{old('image')}}" class="form-control">
                                @error('image')
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