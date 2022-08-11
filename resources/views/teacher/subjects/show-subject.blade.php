@extends('teacher.layout.app')

@section('title')
    {{$subject->name}}
@endsection

@section('page_title')
    {{$subject->name}}
@endsection

@section('page_description')
    Student's Performance in {{$subject->name}}
@endsection

@section('content')

<div class="row mt-5">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <h4>Performance</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0 datatable">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Score</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($results as $result)
                                <tr>
                                    <td><a href="{{route('teacher.students.show',$result->student->id)}}">{{$result->student->user->fullname}}</a></td>
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

@endsection