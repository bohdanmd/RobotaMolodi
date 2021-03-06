@extends('newDesign.layouts.admin')
@section('content')
    <div class="col-md-10 col-sm-10 col-xs-10 contentAndmin">
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <div class="createNews"><a href="{{ URL::route('admin.industry.create') }}" class="btn btn-success btn-lg">Створити</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>Name</th>
                <th>Main</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($industries as $count => $industry)
                <tr >
                    <td>{{ $count + 1 }}</td>
                    <td>{{ $industry->name }}</td>
                    <td data-id="{{$industry->id}}">
                        @if($industry->main)
                            <i class="fa fa-check-square-o set-main"></i>
                        @else
                            <i class="fa fa-square-o set-main"></i>
                        @endif
                    </td>
                    <td>
                        <div>
                        <span style="display: inline-block">
                            <a href="{{ route('admin.industry.edit', $industry->id) }}" class="btn btn-primary">Редагувати</a>
                        </span>
                        <span style="display: inline-block">
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.industry.destroy', $industry->id]]) !!}
                                {!! Form::submit('Видалити', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </span>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('.set-main').click(function () {
                var that = $(this);
                var id = that.parent().data('id');
                $.ajax({
                    url:'{{ route('setMainIndustry') }}',
                    method: 'post',
                    data: {id: id},
                    success: function () {
                        $('.fa-check-square-o')
                            .removeClass('fa-check-square-o')
                            .addClass('fa-square-o');
                        that.removeClass('fa-square-o')
                            .addClass('fa-check-square-o');
                    }
                })
            });
        })
    </script>
    </div>
@endsection