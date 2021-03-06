@extends('flare::admin.sections.wrapper')
@section('page_title', $modelAdmin->getEntityTitle())
@section('content')

<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            Edit {{ $modelAdmin->getEntityTitle() }}
        </h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="box-body">
            @foreach ($modelAdmin->outputFields() as $attribute => $field)
                {{ $field->render('edit') }}
            @endforeach
        </div>
        <div class="box-footer">
            {!! csrf_field() !!}
            <a href="{{ $modelAdmin->currentUrl() }}" class="btn btn-default">
                Cancel
            </a>
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-edit"></i>
                Update {{ $modelAdmin->getEntityTitle() }}
            </button>
        </div>
    </form>
</div>

@endsection
