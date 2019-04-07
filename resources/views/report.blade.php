@extends('base')

@section('page_title')
Meeting title - report
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
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Approval of Meeting Minutes</h6>
            </div>
            <div class="card-body">
                <p>There was no discussion on this topic.</p>
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a data-toggle="collapse" href="#motion-1" aria-expanded="false" aria-controls="motion-1">
                                <span class="meeting-title">Approve minutes of last meeting</span>
                            </a>
                            <span class="small">Unanimous</span>
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
                <h6 class="card-title mb-0">GA Elections</h6>
            </div>
            <div class="card-body">
                <p>There was no discussion on this topic.</p>
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a data-toggle="collapse" href="#motion-1" aria-expanded="false" aria-controls="motion-1">
                                <span class="meeting-title">Accept 108576 - Alessandro Caproni as member of the GA</span>
                            </a>
                            <span class="small">Motion failed by 16 votes (11 for, 27 against, 6 abstain)</span>
                        </div>
                        <div class="card-meta">
                            <span class="motion-label d-none d-xl-block">MOTION</span>
                        </div>
                    </div>
                </div>
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a data-toggle="collapse" href="#motion-1" aria-expanded="false" aria-controls="motion-1">
                                <span class="meeting-title">Accept 306926 - Danny Richmond as member of the GA</span>
                            </a>
                            <span class="small">Motion tied (21 for, 21 against, 2 abstain)</span>
                        </div>
                        <div class="card-meta">
                            <span class="motion-label d-none d-xl-block">MOTION</span>
                        </div>
                    </div>
                </div>
                <div class="card card-task">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <a data-toggle="collapse" href="#motion-1" aria-expanded="false" aria-controls="motion-1">
                                <span class="meeting-title">Accept 173657 - Peter Ermerins as member of the GA</span>
                            </a>
                            <span class="small">Motion passed by 17 votes (29 for, 12 against, 3 abstain)</span>
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
@endsection