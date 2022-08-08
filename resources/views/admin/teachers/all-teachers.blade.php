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
                                <th>Class</th>
                                <th>Gender</th>
                                <th>Subject</th>
                                <th>Section</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PRE2209</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="teacher-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        <a href="teacher-details.html">Aaliyah</a>
                                    </h2>
                                </td>
                                <td>10</td>
                                <td>Female</td>
                                <td>Mathematics</td>
                                <td>A</td>
                                <td>097 3584 5870</td>
                                <td>911 Deer Ridge Drive,USA</td>
                                <td class="text-end">
                                    <div class="actions">
                                        <a href="edit-teacher.html" class="btn btn-sm bg-success-light me-2">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm bg-danger-light">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection