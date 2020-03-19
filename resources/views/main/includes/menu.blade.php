<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color sticky-top">
    <a class="navbar-brand" href="{{ URL::to(Session()->get('role')) }}">{{  config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item rotate">
                <a class="nav-link" href="{{ URL::to('carCreate') }}">Добавить</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a target="new" href="https://teleg.run/" class="nav-link">
                    <i class="fab fa-telegram-plane"></i>
                </a>
            </li>
            <li class="nav-item">
                <a target="new" href="https://wa.me" class="nav-link">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('questionCreate') }}" class="nav-link">
                    <i class="fas fa-at"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<br/>
@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
