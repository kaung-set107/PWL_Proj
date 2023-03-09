@extends('admin.layout.master') @section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3>Blogs</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Title</th>

                    <th>Image</th>
                    <th>Description</th>
                    <th>Option</th>
                </tr>
                @foreach($show as $s)
                <tr>
                    <td>{{  $s->title  }}</td>

                    <td>
                        <img src="{{ asset($s->image) }}" style="width: 60px" />
                    </td>
                    <td>
                        {{  Illuminate\Support\Str::limit($s->description, 10)  }}
                    </td>
                    <td>
                        <a
                            href="{{ url('/admin/update/'.$s->id) }}"
                            class="badge badge-warning"
                            >Update</a
                        >
                        <a
                            href="{{ url('/admin/delete/'.$s->id) }}"
                            class="badge badge-danger"
                            >Delete</a
                        >
                        <a
                            href="{{ url('/admin/detail/'.$s->id) }}"
                            class="badge badge-info"
                            >Detail</a
                        >
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="mt-3">
        {{ $show->links() }}
    </div>
</div>

@endsection()
