@extends('admin.layout.app')

@section('title')
    students
@endsection

@section('page_title')
    students
@endsection

@section('page_description')
    All students List
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0 datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Class</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td>{{$student->reg_no}}</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            
                                            <a href="#" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('storage/students/images/'.$student->user->image)}}" alt="{{$student->user->fullname}}"></a>
                                            <a href="#">{{$student->user->fullname}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$student->user->email}}</td>
                                    <td>{{optional(optional($student->form_student)->form)->name}}</td>
                                </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection