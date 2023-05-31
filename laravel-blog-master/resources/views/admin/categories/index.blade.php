@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Категория

                            <a href="{{ url('admin/categories/create') }}" class="btn btn-default pull-right">Добавить новую</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Количество постов</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->posts_count }}</td>
                                        <td>
                                            <a href="{{ url("/admin/categories/{$category->id}/edit") }}" class="btn btn-xs btn-info">Изменить</a>
                                            <a href="{{ url("/admin/categories/{$category->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Вы уверены?" class="btn btn-xs btn-danger">Удалить</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Категорий нет</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $categories->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
