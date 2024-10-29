@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Why Choose Us</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header collapsed bg-primary text-light p-3 " role="button"
                            data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                            <h4>Why Choose Us Section Titles..</h4>
                                <form>
                                <div class="form-group">
                                    <label for="">Top Title</label>
                                    <input type="text" class="form-control" name="why_choose_top_title" value="{{ $titles['why_choose_top_title'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Main Title</label>
                                    <input type="text" class="form-control" name="why_choose_main_title" value="{{ $titles['why_choose_main_title'] }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Title</label>
                                    <input type="text" class="form-control" name="why_choose_sub_title" value="{{ $titles['why_choose_sub_title'] }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>

                            <div class="form-group">
                                <label for="">Top Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Main Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Sub Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
