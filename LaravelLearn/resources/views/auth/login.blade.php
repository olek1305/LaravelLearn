@include('layouts.footer')

@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-4">Login</h2>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

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
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                    <div class="mb-2 text-center">
                                        <label for="" class="form-label">User Password</label>
                                        <input name="password" type="password" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
