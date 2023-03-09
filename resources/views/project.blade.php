@extends('layout.master') @section('content')
<div class="row mt-5 mb-4">
    @foreach($project as $p)

    <div class="col-md-4">
        <div class="card" id="viewbl">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h4>{{ $p->title }}</h4>
                </div>
            
                
            </div>
            <div class="row ml-2">
                <img src="{{ asset($p->image) }}" alt="" style="width: 80%" />
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <p>
                        {{ Illuminate\Support\Str::limit($p->description, 5) }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a
                    href="{{ url('/detail/'.$p->id) }}"
                    class="btn btn-sm btn-outline-info"
                    "
                    >View</a
                >
                </div>
                <div class="col-md-4 offset-2 mt-2">
                    <i
                        class="badge badge-secondary"
                        >{{$p->created_at->diffForHumans()
                        }}</i
                    >
                </div>
                
            </div>
        </div>
    </div>

    @endforeach
</div>
<div class="mt-3">
    {{ $project->links() }}
</div>
@endsection()
