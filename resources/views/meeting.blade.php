@extends('base')

@section('page_title')
Meeting title
@endsection

@section('page_subtitle')
01 JAN 2008 16:00 UTC
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Meeting status</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#attendance">For attendance see below or click here</a>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 meeting-status-line">
                        <strong>Meeting quorum</strong>
                    </div>
                    <div class="col-md-5 meeting-status-line">
                        Not specified. 1 topic requires 50% quorum.
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 meeting-status-line">
                        <strong>Currently attending</strong>
                    </div>
                    <div class="col-md-5 meeting-status-line">
                        5 people have entered the meeting out of 83 invited.
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 meeting-status-line">
                        <strong>Meeting status</strong>
                    </div>
                    <div class="col-md-5 meeting-status-line text-success">
                        Started
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
                <h6 class="card-title mb-0">Approval of Meeting Minutes</h6>
            </div>
            <div class="card-body">
                <p>No additional information available.</p>
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a data-toggle="collapse" href="#motion-1" aria-expanded="false" aria-controls="motion-1">
                                <span class="meeting-title">Approve minutes of last meeting</span>
                            </a>
                            <span class="small">Not open for voting yet</span>
                        </div>
                        <div class="card-meta">
                            <span class="motion-label d-none d-xl-block">MOTION</span>
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
                <h6 class="card-title mb-0">Article 1 rewrite</h6>
            </div>
            <div class="card-body">
                <p>Summary of recent discussion:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper velit eget odio tincidunt semper. Sed eu lorem pulvinar, ultricies orci ut, blandit dui. Nulla mattis augue mauris, non elementum nibh faucibus ut. Pellentesque ultricies arcu id nunc sollicitudin dictum. Morbi aliquet felis ut ligula lobortis, sed congue justo porta. Sed ut ultricies enim. Quisque ut pretium felis, at luctus lorem. Nulla facilisi. Aenean fermentum pulvinar sem, eget mattis nulla accumsan et. Curabitur eu lectus fringilla, dictum felis in, condimentum elit. Sed blandit finibus ipsum non vestibulum. In aliquam tempus sapien at iaculis.</p>
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a data-toggle="collapse" href="#motion-1" aria-expanded="false" aria-controls="motion-1">
                                <span class="meeting-title">Accept changes to statutes</span>
                            </a>
                            <span class="small">Currently voting. 15 more votes expected.</span>
                        </div>
                        <div class="card-meta">
                            <span class="motion-label d-none d-xl-block">MOTION</span>
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
                <h6 class="card-title mb-0">Meeting attendance</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <strong>Present</strong>
                        <ul>
                            <li>Person One</li>
                            <li>Man Two</li>
                            <li>Woman Three</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <strong>Absent</strong>
                        <br>-
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection