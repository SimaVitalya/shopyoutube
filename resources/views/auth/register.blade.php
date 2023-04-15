@extends('auth.layouts.master')
@section('title','Регистрация ')
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Регистрация</div>

            <div class="card-body">
                <form method="POST" action="{{route('register')}}" aria-label="Register">
                    @csrf
                    <div style="justify-content: center ">
                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="name">Имя</label>

                                <input id="name" type="text" class="form-control" name="name"
                                       value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="email">E-Mail</label>

                                <input id="email" type="email" class="form-control"
                                       name="email" value="" required>

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="password">Пароль</label>

                                <input id="password" type="password" class="form-control"
                                       name="password" required>

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="password-confirm">Подтвердите пароль</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
