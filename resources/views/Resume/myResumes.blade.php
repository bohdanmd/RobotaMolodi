@extends('cabinet/cabinet')
@section('contents')

<div><h2>Мої резюме</h2></div>
<div>
    {!! link_to_route('resume.create', 'Написати резюме') !!}
</div>


    @foreach($resumes as $resume) <!-- Прийом данних і вибірка необхідних полів і значень -->
        <article>
            <h2>{!!$resume->position!!}</h2>
            <p>
                {!!$resume->name_u!!}
            </p>
            <p>
                Промисловість: {!!$resume->industry!!}
            </p>
            <p>
               Зарплата: {!!$resume->salary!!} грн.
            </p>
            <p>
                Опис: {{$resume->description}}
                <hr >
            </p>

        </article>
    @endforeach

@stop
