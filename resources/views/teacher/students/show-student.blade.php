@extends('teacher.layout.app')

@section('title')
    {{$student->user->fullname}}
@endsection

@section('page_title')
    {{$student->user->fullname}}
@endsection

@section('page_description')
    Student's Details
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="about-info">
                    <div class="media mt-3  d-flex">
                        <img style="max-height:300px !important;min-height:300px !important;max-width:300px !important;min-width:300px !important" src="{{asset('storage/students/images/'.$student->user->image)}}" class="me-3 flex-shrink-0" alt="{{$student->user->fullname}}">
                        <div class="media-body flex-grow-1">
                            <ul>
                                <li>
                                    <span class="title-span">Full Name : </span>
                                    <span class="info-span">{{$student->user->fullname}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Reg No</span>
                                    <span class="info-span">{{$student->reg_no}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Email : </span>
                                    <span class="info-span">{{$student->user->email}}</span>
                                </li>
                                <li>
                                    <span class="title-span">Class</span>
                                    <span class="info-span">{{optional($student->form_student->form)->name}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    

                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <h4>Performance</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>Subject</th>
                                                    <th>Score</th>
                                                    <th>Percentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($results as $result)
                                                    <tr>
                                                        <td>{{$result->subject->name}}</td>
                                                        <td>
                                                            {{$result->score}}
                                                        </td>
                                                        <td>{{$result->percentage}}</td>
                                                        
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection