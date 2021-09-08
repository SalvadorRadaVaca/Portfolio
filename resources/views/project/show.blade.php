@extends('layouts.app')

@section('template_title')
    {{ $project->name ?? 'Show Project' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $project->name }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $project->image }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $project->description }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $project->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
