@extends('base')

@section('page_title')
Meeting title - report
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
        <div class="card">
            <div class="card-body">
                <form>
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#settings-general" role="tab" aria-controls="home" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Meetings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Topics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Motions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Groups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Backup/Export</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="settings-general" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container setting-container">
                                <div class="row">
                                    <div class="col-md-6 setting-header">Application name</div>
                                    <div class="col-md-6"><input type="text" class="form-control" id="organization-name" value="iVote"><small class="form-text text-muted">Specifies how the application is called.</small></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 setting-header">Organization name</div>
                                    <div class="col-md-6"><input type="text" class="form-control" id="organization-name" value="IVAO VZW"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 setting-header">Show 2vote name in footer</div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1"> &nbsp;</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container setting-container">
                                <div class="row">
                                    <div class="col-md-12">These are the default meeting settings. These can be overridden while creating a meeting and before a meeting is started.</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 setting-header">Default meeting group</div>
                                    <div class="col-md-6">
                                        <select class="custom-select custom-select-sm">
                                            <option selected>General Assembly</option>
                                            <option value="1">BoG</option>
                                        </select></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 setting-header">Show meeting on Meeting Schedule</div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1"> &nbsp;</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection