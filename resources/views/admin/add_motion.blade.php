@extends('base')

@section('page_title')
Add motion
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-body">
                <form class="form">
                    <div class="container setting-container">
                        <div class="row">
                            <div class="col-md-4 setting-header">Motion title</div>
                            <div class="col-md-8">
                                <input class="form-control" name="motion-title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 setting-header">Motion description</div>
                            <div class="col-md-8">
                                <textarea name="motion-description" placeholder="Place your description here" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 setting-header">Motion author</div>
                            <div class="col-md-8">
                                <input class="form-control" name="motion-author">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 setting-header">Motion type</div>
                            <div class="col-md-8">
                                <select name="motion-type" class="form-control">
                                    <option value="reg_majority">Regular majority</option>
                                    <option value="twothirds">2/3 majority</option>
                                    <option value="threequarters">3/4 majority</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-block btn-primary">Add motion</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection