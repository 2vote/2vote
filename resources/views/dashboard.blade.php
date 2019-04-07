@extends('base')

@section('page_title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Current and future meetings</h6>
            </div>
            <div class="card-body">
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 33%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a href="#">
                                <span class="meeting-title">Board of Governors meeting</span>
                            </a>
                            <span class="small">Today 16:00 UTC</span>
                        </div>
                        <div class="card-meta">
                            <a href="#">
                                <i class="material-icons" title="Enter meeting">input</i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 33%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a href="#">
                                <span class="meeting-title">General Assembly meeting</span>
                            </a>
                            <span class="small">Today 20:00 UTC</span>
                        </div>
                        <div class="card-meta">
                            <a href="#">
                                <i class="material-icons" title="Enter meeting">input</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Previous meetings</h6>
            </div>
            <div class="card-body">
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 33%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a href="#">
                                <span class="meeting-title">Board of Governors meeting</span>
                            </a>
                            <span class="small">01 JAN 2008 16:00 UTC</span>
                        </div>
                        <div class="card-meta">
                            <a href="#">
                                <i class="material-icons" title="View report">format_list_bulleted</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection