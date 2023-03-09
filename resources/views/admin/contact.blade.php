@extends('admin.layout.master') @section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3>Inbox SMS</h3>
        </div>
        <div class="card-body">
            @foreach($contact as $c)
            <div class="card mt-3 contact">
                <div class="row">
                    <div class="col-md-11">
                        <h5>
                            {{ $c->email }}
                        </h5>
                        <i class="badge badge-warning"
                            >Sent
                            {{$c->created_at->diffForHumans()
                            }}</i
                        >
                        <p class="mt-3">{{ $c->message }}</p>
                    </div>
                    <div class="col-md-1">
                        <a
                            href="{{ url('/admin/contactdelete/'.$c->id) }}"
                            class="badge badge-sm badge-danger cx"
                            >X</a
                        >
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-3 ml-2">
            {{ $contact->links() }}
        </div>
    </div>
</div>

@endsection()
