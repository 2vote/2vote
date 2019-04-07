@extends('base')

@section('page_title')
Add meeting
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="container setting-container">
                        <div class="row">
                            <div class="col-md-6 setting-header">Group</div>
                            <div class="col-md-6">
                                <select name="meeting-group" class="form-control">
                                    <option value="GA">GA</option>
                                    <option value="BOG">BOG</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 setting-header">Meeting date</div>
                            <div class="col-md-6">
                                <input class="form-control" name="meeting-date" placeholder="yyyy-mm-dd">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 setting-header">Meeting start time</div>
                            <div class="col-md-6">
                                <input class="form-control" name="meeting-time" placeholder="hh:mm">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 setting-header">Chairman</div>
                            <div class="col-md-6">
                                <input class="form-control" name="meeting-chairman" placeholder="123456">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 setting-header">Meeting called by</div>
                            <div class="col-md-6">
                                <input class="form-control" name="meeting-called-by" placeholder="123456">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-block btn-primary">Add meeting</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection