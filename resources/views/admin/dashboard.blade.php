@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('page_title')
    Welcome Admin!
@endsection

@section('page_description')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
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
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-two w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{$teachers_count}}</h3>
                        <h6>Teachers</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-three w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="db-info">
                        <h3>{{$forms_count}}</h3>
                        <h6>Classes</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
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


<div class="row">
    <div class="col-md-6 d-flex">

        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title">Star Students</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th class="text-center">Marks</th>
                                <th class="text-center">Percentage</th>
                                <th class="text-end">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2209</div>
                                </td>
                                <td class="text-nowrap">John Smith</td>
                                <td class="text-center">1185</td>
                                <td class="text-center">98%</td>
                                <td class="text-end">
                                    <div>2019</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE1245</div>
                                </td>
                                <td class="text-nowrap">Jolie Hoskins</td>
                                <td class="text-center">1195</td>
                                <td class="text-center">99.5%</td>
                                <td class="text-end">
                                    <div>2018</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE1625</div>
                                </td>
                                <td class="text-nowrap">Pennington Joy</td>
                                <td class="text-center">1196</td>
                                <td class="text-center">99.6%</td>
                                <td class="text-end">
                                    <div>2017</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2516</div>
                                </td>
                                <td class="text-nowrap">Millie Marsden</td>
                                <td class="text-center">1187</td>
                                <td class="text-center">98.2%</td>
                                <td class="text-end">
                                    <div>2016</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2209</div>
                                </td>
                                <td class="text-nowrap">John Smith</td>
                                <td class="text-center">1185</td>
                                <td class="text-center">98%</td>
                                <td class="text-end">
                                    <div>2015</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 d-flex">

        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title">Student Activity</h5>
            </div>
            <div class="card-body">
                <ul class="activity-feed">
                    <li class="feed-item">
                        <div class="feed-date">Apr 13</div>
                        <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                    </li>
                    <li class="feed-item">
                        <div class="feed-date">Mar 21</div>
                        <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                    </li>
                    <li class="feed-item">
                        <div class="feed-date">Feb 2</div>
                        <span class="feed-text"><a>Justin Lee</a>attended internation conference in <a href="profile.html">"St.John School"</a></span>
                    </li>
                    <li class="feed-item">
                        <div class="feed-date">Apr 13</div>
                        <span class="feed-text"><a>John Doe</a> won 1st place in <a>"Chess"</a></span>
                    </li>
                    <li class="feed-item">
                        <div class="feed-date">Mar 21</div>
                        <span class="feed-text"><a>Justin Lee</a> participated in <a href="invoice.html">"Carrom"</a></span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection