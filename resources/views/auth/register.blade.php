@extends('template')

    @section('title') Cadastro de usuário @endsection

    @section('estilo')

        header{
                display:none;
            }

    @endsection

    @section('nav&footer')

    <!-- Início formulário -->
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-8 col-xs-8 mx-auto mt-5 text-light">

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                       <label class="form-label">Nome de usuário</label>
                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                       <label class="form-label">E-mail</label>
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                       @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                       <label class="form-label">Senha</label>
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                       @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror      
                    </div>

                    <div class="mb-4">
                       <label class="form-label">Confirme sua senha</label>
                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                       @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror      
                    </div>

                     <button class="btn btn-light mt-2 mb-4" type="submit">Cadastrar</button>
                </form> 
            </div>
        </div>
    <!-- Fim formulário -->

    @endsection