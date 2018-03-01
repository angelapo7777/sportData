@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{__('messages.insert post')}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">

                            <div class="input-group mb-3 no-gutters">
                                <label class="sr-only" for="title">Τίτλος</label>
                                <div class="input-group-prepend col-2">
                                    <span class="input-group-text w-100">Τίτλος</span>
                                </div>
                                <input type="text" class="form-control col-10 px-2" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label class="form-check-label" for="body">Περιγραφή</label>
                                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-check-label" for="body">Κείμενο</label>
                                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                            </div>

                            <div class="input-group mb-3 no-gutters">
                                <label class="sr-only" for="reference">{{__('messages.reference')}}</label>
                                <div class="input-group-prepend col-2">
                                    <span class="input-group-text w-100">{{__('messages.reference')}}</span>
                                </div>
                                <input type="text" class="form-control col-10 px-2" id="reference" name="reference">
                            </div>

                            <div class="input-group mb-3 no-gutters">
                                <label for="team_id" class="sr-only">Ομάδα</label>
                                <div class="input-group-prepend col-2">
                                    <span class="input-group-text w-100">Ομάδα</span>
                                </div>
                                <select class="form-control col-10 px-2" id="team_id" name="team_id">
                                    @foreach($teams as $team)
                                        <option value="{{$team->id}}">
                                            {{$team->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group mb-3 no-gutters">
                                <label for="athlete_id" class="sr-only">Αθλητής</label>
                                <div class="input-group-prepend col-2">
                                    <span class="input-group-text w-100">Αθλητής</span>
                                </div>
                                <select class="form-control col-10 px-2" id="athlete_id" name="athlete_id">
                                    @foreach($athletes as $athlete)
                                        <option value="{{$athlete->id}}">
                                            {{$athlete->fullName}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row my-3 border">

                                <div class="form-group my-3 col-lg-6 col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="uploadFile" id="uploadFile"
                                               accept='image/*'>
                                        <label class="custom-file-label" for="customFile">{{__('messages.picture')}}</label>
                                    </div>
                                </div>

                                <div class="input-group my-3 col-lg-6 col-12">
                                    <label class="sr-only" for="photo_reference">{{__('messages.reference')}}</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{__('messages.reference')}}</span>
                                    </div>
                                    <input type="text" class="form-control" id="photo_reference" name="photo_reference">
                                </div>

                            </div>

                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary col-md-6 col-12 ml-auto mr-auto">
                                    {{__('messages.insert')}}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
