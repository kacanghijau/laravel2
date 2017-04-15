@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         @if(count($errors) > 0)
               
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <div class="row">
                        <div class="col-md-8">
                            <h5> Create New </h5>
                        </div>
                        <div class="col-md-4">
                            <span class="pull-right">
                                <a href="{{ route('post.index') }}" class="btn btn-primary">Cancel</a>
                            </span>
                        </div>
                     </div>
                </div>

                <form class="form-group" action="{{ route('post.save') }}" method="post">
                    <div class="panel-body">
                    {{ csrf_field() }}
                        <div class="col-md-8 col-md-offset-2">
                        
                            <label>Title: </label>
                            <input type="text" name="title" class="form-control input-lg"></input>
                            
                            <label>Story: </label>
                            <textarea name="story" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-block btn-success">Save </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

