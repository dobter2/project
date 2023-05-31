@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Профиль
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    <td>Имя</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Электронная почта</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Дата регистрации</td>
                                    <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Права администратора</td>
                                    <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <td>API токен</td>
                                    <td>{{ $user->api_token }}</td>
                                </tr>
                                <tr>
                                    <td>Количество постов</td>
                                    <td>{{ $user->posts_count }}</td>
                                </tr>
                                <tr>
                                    <td>Количество комментариев</td>
                                    <td>{{ $user->comments_count }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
