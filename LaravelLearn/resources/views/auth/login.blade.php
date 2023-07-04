@include('layouts.footer')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf
                            <div class="mb-2 text-center">
                                <label for="" class="form-label">User Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="mb-2 text-center">
                                <label for="" class="form-label">User Email</label>
                                <input name="email" type="text" class="form-control">
                            </div>
                            <div class="mb-2 text-center">
                                <label for="" class="form-label">User Password</label>
                                <input name="password" type="text" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary btn-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div
