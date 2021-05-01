@extends('layouts.master-login')

@section('content')



    <div id="layoutAuthentication" class="bg-success">
        <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-10">
                               
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col">
                                            <img src="{{asset('foto/LOGO.png')}}" alt="" width="120">
                                        </div>
                                    </div><br><br>
                                    <!-- Login form-->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-- Form Group (email address)-->
                                        

                                        <div class="form-group">
                                            <label for="email" class="small mb-1"><h4>{{ __('E-Mail Address') }}</h4></label>
                    
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror py-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>
                                        <!-- Form Group (password)-->
                                        

                                        <div class="form-group">
                                            <label for="password" class="small mb-1"> <h4>{{ __('Password') }}</h4> </label>

                                           
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror py-4" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                          
                                        </div>
                                        
                                        <div class="form-group">
                                            
                                                <button type="submit" class="btn btn-success">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn text-danger" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                           
                                        </div>
                                    </form>                                    
                                </div>                               
                            </div>
                        </div>                         
                    </div>
                    <br><br>
                    {{-- <div class="copyright">
                            <div class="row text-center">
                                <div class="col">
                                    <h6 class="text-light">© Copyright <b>PBN.</b> All Rights Reserved</h6>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
            
        </div>    
@endsection