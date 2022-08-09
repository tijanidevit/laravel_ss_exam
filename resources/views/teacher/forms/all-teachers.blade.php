@extends('admin.layout.app')

@section('title')
    Teachers
@endsection

@section('page_title')
    Teachers
@endsection

@section('page_description')
    All Teachers List
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
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher->staff_id}}</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            
                                            <a href="#" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('storage/teachers/images/'.$teacher->user->image)}}" alt="{{$teacher->user->fullname}}"></a>
                                            <a href="#">{{$teacher->user->fullname}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$teacher->user->email}}</td>
                                    <td>{{optional(optional($teacher->form_teacher)->form)->name}}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('admin.teachers.show', $teacher->id)}}" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-eye"></i> View Details
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