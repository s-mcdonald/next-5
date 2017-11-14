@extends('layout.app')

@section('content')
    <div class="container">
        @component('components.banner')
        @endcomponent
        <div id="page" style='display:hidden' data-value="index"></div>
        <div class="row">
            <div class="col-lg-12">
                <ul id="race">
                    {!!$payload!!}
                </ul>
            </div>
        </div>
        @component('components.page-footer')
        @endcomponent
    </div>
@endsection