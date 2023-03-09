@extends('layout.master') @section('content')

<div class="card contact mt-3 mb-3">
    <div class="card-header">
        <h3>Contact</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea
                    name="message"
                    id=""
                    cols="30"
                    rows="5"
                    class="form-control"
                ></textarea>
            </div>
            <input
                type="submit"
                value="Send"
                class="btn btn-sm btn-outline-success rounded"
            />
        </form>
    </div>
</div>
@endsection()
