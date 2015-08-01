@extends('app')

@section('content')
    <!-- <meta name="csrf_token" content="{{ csrf_token() }}" />

    Form filters-->
    {!! Form::open(['route' => 'filters', 'class'=>'form-inline']) !!} <!-- F-->

        <select name="industry" class="form-control" id="selectIndustry" style="width: 200px">
            <option value="0"> Усі галузі</option>
            @foreach($industries as $industry)
                <option value="{{$industry->id}}"> {{$industry->name}} </option>
            @endforeach
        </select>

        <select name="city" class="form-control" id="selectCity">
            <option value="0"> Усі міста</option>
            @foreach($cities as $city)
                <option value="{{$city->id}}"> {{$city->name}} </option>
            @endforeach
        </select>

   <!--     <button type="button" class="btn btn-primary" id="search">Пошук</button>
    <input type="hidden" name="post_id" value="34"> -->


    <div class="form-group">
        {!! Form::submit('Запуск', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close()!!}

    <!-- Output vacancies  -->

    <div class="list-group">
        <?php $i=1; ?>
        @foreach($vacancies as $vacancy)
            <a href="{{url('/vacancy',['id'=>$vacancy->id])}}" class="list-group-item">
                <p>
                    <h3 class="list-group-item-heading">{{$vacancy->id}} Позиція: <span class="text-info" >{{$vacancy->position}}</span>
                    <span class="text-muted text-right pull-right"><h5>{{$vacancy->date_field}}</h5></span></h3>
                    <h4 class="list-group-item-heading">Опис вакансії: <span class="text-success">{{$vacancy->description}}</span></h4>
                </p>
                <p class="list-group-item-text"><b>Зарплата: </b> {{$vacancy->salary}} </p>
            </a>
        @endforeach
            <?php echo $vacancies->render(); ?>
    </div>


@stop
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>


<script type="text/javascript">

    $(document).ready(function(){
        $('#search').click(function(){
            $("div.list-group").empty();
            var city_id = $('[name=city]').val();
            var industry_id = $('[name=industry]').val();

            alert(city_id+ " "+ industry_id);
            //alert(industry_id);
            $.ajax({   //start of ajax
                url: "searchCity",
                type:"POST",
                beforeSend: function(xhr){
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {'city_id' : city_id, 'industry_id' : industry_id},
                success:function(json){
                    if(json.length < 1){
                        $('div[class=list-group]').html('<p class="btn bg-danger">По даному  запросу дані відсутні.</p>');
                    }
                    else if(json){
                        alert(json);
                        for(var i in json) {
                            var j = i * 1 + 1;
                            <!-- Output filters vacancies  -->
                            $('div[class=list-group]').append('<a href="http://localhost/RobotaMolodi/public/vacancy/' + json[i].id + ' " class="list-group-item">' +
                            '<h3 class="list-group-item-heading">' + j + ' Позиція: <span class="text-info" >' + json[i].position +'</span>' +
                            '<span class="text-muted text-right pull-right"><h5>' + json[i].date_field + '</h5></span></h3>' +
                            '<h4 class="list-group-item-heading">Опис вакансії: <span class="text-success">' + json[i].description + '</span></h4>' +
                            '<p class="list-group-item-text"><b>Зарплата: </b>' + json[i].salary + '</p>');
                        }

                        $('div[class=list-group]').append('<nav>'+
                        '<ul class="pagination">'+
                        '<li class="disabled">'+
                        '<span>'+
                        '<span aria-hidden="true">&laquo;</span>'+
                       '</span>'+
                        '</li>'+
                        '<li class="active">'+
                        '<span>1 <span class="sr-only">(current)</span></span>'+
                        '</li>'+
                    '...'+
                    '</ul>'+
                        '</nav><br >'+

                        '<ul class="pagination">'+
                        '<li class="disabled"><a href="#">&laquo;</a></li>'+
                        '<li class="active"><a href="#">1</a></li>'+
                        '<li><a href="#">2</a></li>'+
                        '<li><a href="#">3</a></li>'+
                        '<li><a href="#">4</a></li>'+
                       '<li><a href="#">5</a></li>'+
                        '<li><a href="#">&raquo;</a></li>'+
                       '</ul>'

                        );
                    }
                },
                error:function(){
                    alert("error!!!!");
                }
            }); //end of ajax
        });
    });

</script>