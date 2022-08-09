@extends('teacher.layout.app')

@section('title')
    {{$form->name}}
@endsection

@section('page_title')
    {{$form->name}}
@endsection

@section('page_description')
    Your assigned class
@endsection

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <h4>Students</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0 datatable">
                        <thead>
                            <tr>
                                <th>Reg Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($form_students as $form_student)
                                <tr>
                                    <td>{{$form_student->student->reg_no}}</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            
                                            <a href="#" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('storage/students/images/'.$form_student->student->user->image)}}" alt="{{$form_student->student->user->fullname}}"></a>
                                            <a href="#">{{$form_student->student->user->fullname}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$form_student->student->user->email}}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('teacher.students.show', $form_student->student->id)}}" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-eye"></i> View Performance
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection