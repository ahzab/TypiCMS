@section('main')

	{{ Former::vertical_open_for_files()->method('PATCH')->action('admin/'.$model->view.'/'.$model->id)->role('form') }}
		@include('admin._form')
	{{ Former::close() }}

@stop