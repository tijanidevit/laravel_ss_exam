@extends('teacher.layout.app')

@section('title')
    Dashboard
@endsection

@section('page_title')
    Welcome Teacher!
@endsection

@section('page_description')
    Dashboard
@endsection

@section('content')
<div class="row">
    
    <div class="col-xl-4 col-sm-6 col-12 d-flex">
        <div class="card bg-three w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{$forms_count}}</h3>
                        <h6>Assigned Class</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6 col-12 d-flex">
        <div class="card bg-one w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{$students_count}}</h3>
                        <h6>Students</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12 d-flex">
        <div class="card bg-four w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{$subjects_count}}</h3>
                        <h6>Subjects</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection