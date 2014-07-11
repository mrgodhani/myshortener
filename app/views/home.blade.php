@extends('layout.masterfront')
@section('content')
<div class="col-md-12 shortlink-form">
    <div class="row">
        <h2 class="text-center">Generate Short link</h2>
        <br/>
        <br/>
        <div class="center-block">
            <form class="form">
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="url" placeholder="Paste your link here ..." class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Shrink !</button>
                              </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop