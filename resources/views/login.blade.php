@extends('base')

@section('page_title')
Welcome
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <form>
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#settings-general" role="tab" aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Activate voting
                                key</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="settings-general" role="tabpanel" aria-labelledby="home-tab">
                            <form class="form" action="/" method="post">
                                <div class="container setting-container">
                                    <div class="row">
                                        <div class="col-md-6 setting-header">User name</div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="username" value="user123">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 setting-header">Password</div>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="password" value="pass123">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 setting-header">Stay logged in</div>
                                        <div class="col-md-6">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" name="stay_logged_in" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">
                                                    &nbsp;</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <button type="submit" class="btn btn-block btn-primary">Log
                                                in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container setting-container">
                                <div class="row">
                                    <div class="col-md-12">Please enter your voting key below to login.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="1234-5678-9012-3456" name="voting_key">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection