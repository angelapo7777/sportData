@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{__('messages.update team')}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PUT">
                            @csrf

                            <div class="input-group mb-3 no-gutters">
                                <label class="sr-only" for="name">{{__('messages.name')}}</label>
                                <div class="input-group-prepend col-2">
                                    <span class="input-group-text w-100">{{__('messages.name')}}</span>
                                </div>
                                <input type="text" class="form-control col-10 px-2" id="name" name="name" value="{{$team->name}}">
                            </div>

                            <div class="input-group mb-3 no-gutters">
                                <label class="sr-only" for="city">{{__('messages.city')}}</label>
                                <div class="input-group-prepend col-2">
                                    <span class="input-group-text w-100">{{__('messages.city')}}</span>
                                </div>
                                <input type="text" class="form-control col-10 px-2" id="city" name="city" value="{{$team->city}}">
                            </div>

                            <div class="row border p-2">

                                <div class="col-lg-5">
                                    <img src="{{$team->logo ? $team->logo->fullPathName : 'http://via.placeholder.com/100x100'}}" class="img-fluid">
                                </div>

                                <div class="col-lg-7 col-12 my-auto">

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="uploadFile" id="uploadFile"
                                                   accept='image/*'>
                                            <label class="custom-file-label" for="customFile">Logo</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="form-group row my-3">
                                <button type="submit" class="btn btn-primary col-md-6 col-12 ml-auto mr-auto">
                                    {{__('messages.update')}}
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection