@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Phone Number') }}</div>

                <div class="card-body">
                    <!-- @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif -->

                    {{ __('Before proceeding, please check your phone for a verification code.') }}<br>
                    {{ __('Enter the Code') }}<br>
                    <form class="d-inline" method="POST" action="{{route('verify_code')}}">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="code" type="number" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>
                                <input id="email" type="hidden" name='email' value='{{auth()->user()->email}}'>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection