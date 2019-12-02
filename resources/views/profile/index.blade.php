@extends('layouts.profilefront')
@section('title', 'プロフィール紹介')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2" style="position: static; width: auto;">
                                    <h1>{{ str_limit($headline->name) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->gender) }}</p>
                            <p class="body mx-auto">{{ str_limit($headline->hobby) }}</p>
                            <p class="body mx-auto">{{ str_limit($headline->introduction) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
    </div>
    </div>
@endsection