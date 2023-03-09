@extends('layout.master') @section('content')

<div class="col-md-12">
    <div class="card" id="viewbl">
        <div class="row pjhead mb-3">
            <div class="col-md-8 ml-2 mt-2">
                    <h3>{{ $project->title }}</h3>
                    @foreach($project->language as $l)
                    <i class="badge badge-info">{{$l->name
                    }}</i>
                    @endforeach
                </div>
                <div class="col-md-2 d-inline mt-2">
                    <small class="badge badge-light"
                        ><b class="badge badge-success">Posted</b>
                        {{$project->created_at->diffForHumans()
                        }}</small
                    >
                </div>
        </div>
        <div class="row mt-3 ml-2">
            <img src="{{ asset($project->image) }}" alt="" style="width: 90%" />
        </div>
        <div class="row mt-5">
            <h3>Project Info</h3>
            <table class="table table-striped">
                <tr>
                    <td>Developer Name</td>
                    <td>{{ $project->dev_name }}</td>
                </tr>
                <tr>
                    <td>GitHub Link</td>
                    <td>
                        <a
                            href="{{ $project->github }}" class="github_link"
                            >{{ $project->github }}</a
                        >
                    </td>
                </tr>
            </table>
        </div>
        <div class="row mt-5">
            <h3>Description</h3>
            <div class="col-md-12">
                <p>
                    {{ $project->description }}
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <h3>More Project Photos</h3>
            <div class="col-md-12">
                <img
                    src="{{ asset($project->image) }}"
                    style="width: 20%"
                    alt=""
                />
            </div>
        </div>
    </div>
    <div class="card mt-3 wrap">
        <div class="card-body">
            <div class="row comment d-inline">
                <form
                    action="{{ url('/comment') }}"
                    method="post"
                    class="cmtform"
                >
                    @csrf
                    <input
                        type="hidden"
                        name="project_id"
                        value="{{ $project->id }}"
                    />
                    <div class="form-group">
                        <textarea
                            name="message"
                            id=""
                            cols="20"
                            rows="3"
                            placeholder="Write Comment"
                            class="form-control"
                        ></textarea>
                    </div>
                    <input
                        type="submit"
                        value="Comment"
                        class="btn btn-sm btn-outline-success "
                    />
                </form>
            </div>
        </div>
        
            <h3 class=" px-2 py-3">Comments&nbsp;({{ count($project->comments) }})</h3>
            
                @foreach($project->comments as $comment)
                
                        
                    <div class="card message mb-3 ml-3 mr-3">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-6">
                                <b>{{ $comment->message }}</b>
                            </div>
                            <!-- <div class="col-md-1 ">
                        <a
                            href="{{ url('/commentdelete/'.$comment->id) }}"
                            class="badge badge-sm badge-danger cx"
                            >X</a
                        >
                        </div> -->
                    </div>
                
                </div>
        
                @endforeach
            </div>
            
        </div>
    </div>
</div>

@endsection()
