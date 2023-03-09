@extends('admin.layout.master') @section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3>Create Your Blog</h3>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Language</label><br />
                    @foreach($lan as $l)
                    <span class="ml-3 mr-4">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="language[]"
                            value="{{ $l->id }}"
                        />
                        <label
                            class="form-check-label"
                            for="inlineCheckbox1"
                            >{{ $l->name }}</label
                        >
                    </span>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Developer Name</label>
                    <input
                        type="text"
                        name="dev_name"
                        id=""
                        class="form-control"
                    />
                </div>
                <div class="form-group">
                    <label>GitHub Link</label>
                    <input
                        type="text"
                        name="github"
                        id=""
                        class="form-control"
                    />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea
                        name="description"
                        class="form-control"
                        cols="30"
                        rows="10"
                    ></textarea>
                </div>
                <input
                    type="submit"
                    value="Create"
                    class="btn btn-sm btn-outline-success"
                />
            </form>
        </div>
    </div>
</div>
@endsection()
