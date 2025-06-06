@extends('layouts.app')

@section('content')
    
    @include('layouts.index.header')
    <!-- About Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">My name is David Torres and I help brands grow.</p>
                        <p class="text-muted">I'am a software developer with a passion for creating innovative solutions
                            that make a difference. I'm a self-taught developer who has always been fascinated by
                            technology and programming. I'm constantly learning and improving my skills to stay ahead of
                            the curve. I'm also a lifelong learner and enjoy exploring new ideas and concepts. I'm
                            excited to contribute to the development of new technologies and create innovative solutions
                            that make a positive impact on people's lives.</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="{{ ENV('APP_GITHUB_DEVELOPMENT') ?? '#' }}"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
