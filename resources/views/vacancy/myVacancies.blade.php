@extends ('cabinet/cabinet')

@section ('contents')

    <div>
        <ul class="nav nav-tabs">
            <li role = "presentation">{!!link_to_route('vacancy.create','Створити вакансію')!!}</li>
            <li role = "presentation">{!!link_to_route('vacancy.edit','Редагувати вакансію')!!}</li>
            <li role = "presentation">{!!link_to_route('vacancy.destroy','Видалити вакансію')!!}</li>
            <li role = "presentation">{!!link_to_route('company.create','Створити компанію')!!}</li>
            <li role = "presentation">{!!link_to_route('company.edit','Редагувати компанію')!!}</li>

        </ul>
    </div>


    @yield('contents')
    <?php echo $child ?>



@stop