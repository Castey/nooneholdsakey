@extends("layouts.app")

@section("content")
    <h2>Анализ клавиатурного почерка</h2>
    <ul>
        <li>
            Инструменты
            <ul>
                <li><a href="/analysis">Анализ почерка по фразе</a></li>
                <li><a href="/auth-test">Сервис вторичной авторизации</a></li>
            </ul>
            <ul>
                <li>
                    <small><a href="#" class="">JS-библиотека (не опубликовано)</a></small>
                </li>
            </ul>
        </li>
        <hr />
        <li>
            Прочее
            <ul>
                <li><a href="/help-me">Анкета помощи</a></li>
            </ul>
        </li>
        <hr />
        <li>
            Документация и тексты исследования
            <ul>
                <li>
                    <small><a href="#">Документация (не опубликовано)</a></small>
                </li>
            </ul>
        </li>
    </ul>
@endsection