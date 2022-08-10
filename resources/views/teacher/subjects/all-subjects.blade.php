@extends('teacher.layout.app')

@section('title')
    Subjects
@endsection

@section('page_title')
    Subjects
@endsection

@section('page_description')
    {{$form->name}} subjects
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
                                <th>Subject</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($form_subjects as $form_subject)
                                <tr>
                                    <td>{{$form_subject->subject->name}}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('teacher.subjects.show', $form_subject->id)}}" class="btn btn-sm bg-success-light me-2">
                                                <i class="fas fa-eye"></i> Student Performance
                                            </a>
                                            
                                            <a href="{{route('teacher.subjects.questions', $form_subject->id)}}" class="btn btn-sm bg-primary-light me-2">
                                                <i class="fas fa-pen"></i> Questions
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