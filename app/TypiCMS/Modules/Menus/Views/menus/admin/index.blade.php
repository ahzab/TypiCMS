@section('js')
    {{ HTML::script(asset('js/list.js')) }}
@stop

@section('h1')
    <span id="nb_elements">{{ count($models) }}</span> @choice('menus::global.menus', count($models))
@stop

@section('addButton')
    <a href="{{ route('admin.menus.create') }}" class=""><i class="fa fa-plus-circle"></i><span class="sr-only">{{ ucfirst(trans('menus::global.New')) }}</span></a>
@stop

@section('main')

    <div class="list-form" lang="{{ Config::get('app.locale') }}">

        @include('admin._buttons-list')

        <ul class="list-main">
        @foreach ($models as $model)
            <li id="item_{{ $model->id }}">
                <div>
                    {{ $model->present()->checkbox }}
                    {{ $model->present()->edit }}
                    {{ $model->present()->status }}
                    <a href="{{ route('admin.menus.menulinks.index', $model->id) }}">{{ $model->title }} ({{ $model->name }})</a>
                </div>
            </li>
        @endforeach
        </ul>

    </div>

@stop
