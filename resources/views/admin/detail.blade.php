@extends('admin.layout.master') @section('content')

<div class="col-md-9">
    <div class="card" id="viewbl">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8 ml-2 mt-2">
                    <h3>{{ $detail->title }}</h3>
                    @foreach($detail->language as $l)
                    <i class="badge badge-info">{{$l->name
                    }}</i>
                    @endforeach
                </div>
                <div class="col-md-2 d-inline mt-2">
                    <small class="badge badge-light"
                        ><b class="badge badge-success">Posted</b>
                        {{$detail->created_at->diffForHumans()
                        }}</small
                    >
                </div>
            </div>
        </div>
        <div class="row mt-3 ml-5">
            <img src="{{ asset($detail->image) }}" alt="" style="width: 90%" />
        </div>
        <div class="row mt-2">
            <div class="col-md-12" id="detaildes">
                <p>
                    {{ $detail->description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection()
