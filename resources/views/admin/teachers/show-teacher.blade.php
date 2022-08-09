@extends('admin.layout.app')

@section('title')
    {{$teacher->user->fullname}}
@endsection

@section('page_title')
    {{$teacher->user->fullname}}
@endsection

@section('page_description')
    Teacher's Details
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="about-info">
                    <div class="media mt-3  d-flex">
                        <img style="max-height:300px !important;min-height:300px !important;max-width:300px !important;min-width:300px !important" src="{{asset('storage/teachers/images/'.$teacher->user->image)}}" class="me-3 flex-shrink-0" alt="{{$teacher->user->fullname}}">
                        <div class="media-body flex-grow-1">
                            <ul>
                                <li>
                                    <span class="title-span">Full Name : </span>
                                    <span class="info-span">{{$teacher->user->fullname}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Staff ID</span>
                                    <span class="info-span">{{$teacher->staff_id}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Email : </span>
                                    <span class="info-span">{{$teacher->user->email}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Class : </span>
                                    <span class="info-span">{{optional(optional($teacher->form_teacher)->form)->name}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Bio : </span>
                                    <span class="info-span">{{$teacher->bio}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <p>{{$teacher->bio}}</p>
                        </div>
                    </div>
                    <div class="row follow-sec">
                        <h5 class="text-center">Assign new class</h5>
                        <div class="col-md-12 mb-3">
                            <form action="{{route('admin.form-teacher.store', $teacher->id)}}" method="post">
                                @csrf
                                <div class="col-md-12 mb-3">
                                
                                    <div class="col-12">
                                        @if (session('success'))
                                            <div class="alert alert-success">{{session('success')}}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">Select class</label>
                                        <div class="input-group">
                                            <select class="form-control" name="form_id" id="form_id">
                                                @forelse ($forms as $form)
                                                    <option value="{{$form->id}}">{{$form->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            <div class="input-group-prepend">
                                                <button class="btn btn-primary">Assign class to teacher</button>
                                            </div>
                                        </div> 

                                        @error('form_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror

                                    </div>
                                    
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection