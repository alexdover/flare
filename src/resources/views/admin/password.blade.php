@include('flare::admin.sections.head')
 
    <div class="container-fluid" style="padding-top: 120px">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4">
                <h1 class="text-{{ Flare::config('admin_theme') }}" style="text-align: center; padding-bottom: 40px;">
                    {!! Flare::config('admin_title') !!}
                </h1>

                <div style="margin: 0 20px; padding: 40px 25px 35px; border: 1px solid rgba(0,0,0,0.15); box-shadow: 0 4px 20px rgba(0,0,0,0.15)">
                    @if (count($errors) > 0)
                        <div style="padding-left: 15px; padding-right: 15px">
                            <div class="alert alert-warning">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if (session('status'))
                        <div style="padding-left: 15px; padding-right: 15px">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('flare::email') }}">                     
                        {!! csrf_field() !!}

                        <div class="form-group" style="padding-left: 15px; padding-right: 15px;">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default pull-right">
                                Reset Password
                            </button>
                        </div>

                        <div class="clearfix"></div>
                    </form>
                </div>

                <div class="col-lg-12" style="padding-top: 30px;text-align: center;">
                    <a class="text-{{ Flare::config('admin_theme') }}" style="border-bottom: 1px dotted;" href="{{ route('flare::login') }}">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>

@include('flare::admin.sections.foot')
