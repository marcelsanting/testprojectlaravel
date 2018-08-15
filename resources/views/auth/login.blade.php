@extends('layouts.admin')

@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("{{ asset('/static/images/bg.jpg') }}")'>
            <div class="pos-a centerXY">
                <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
                    <img class="pos-a centerXY" src="{{ URL::to('/static/images/logo.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
            <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="text-normal text-dark">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="John Doe" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password" class="text-normal text-dark">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <input type="checkbox" id="remember" name="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class=" peers peer-greed js-sb ai-c">
                                    <span class="peer peer-greed"> {{ __('Remember Me') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="peer">
                            <button type="submit" class="btn btn-primary"> {{ __('Login') }}</button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

