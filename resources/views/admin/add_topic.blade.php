@extends('base')

@section('page_title')
Add topic
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="container setting-container">
                        <div class="row">
                            <div class="col-md-4 setting-header">Topic title</div>
                            <div class="col-md-8">
                                <input class="form-control" name="topic-title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 setting-header">Topic description</div>
                            <div class="col-md-8">
                                <textarea name="topic-description" placeholder="Place your description here" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-block btn-primary">Add topic</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection