@extends('admin.layouts.master')
@section('content')
    <div class="content pb-4">
        <div class="container-fluid">

            <!-- Welcome Header -->
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div
                                class="bg-light bg-opacity-25 border-top border-bottom border-light border-dashed text-center py-3">
                                <h2>Welcome Admin!</h2>
                                <p class="text-muted mb-0">{{ now()->format('l, d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
