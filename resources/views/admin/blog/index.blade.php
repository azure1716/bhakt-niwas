@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Blogs</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3>Blogs List</h3>
                                <div>
                                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add New Blog</a>
                                </div>
                            </div>

                            @if (count($blogs) > 0)
                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Categories</th>
                                            <th>Topics</th>
                                            <th>Homepage</th>
                                            <th>About Page</th>
                                            <th>Location Page</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $key => $blog)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    @if ($blog->image && file_exists(public_path($blog->image)))
                                                        <img src="{{ asset($blog->image) }}" alt="Blog Image"
                                                            style="height: 50px; width: 80px; object-fit: cover; border-radius: 4px;">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>
                                                    @if (!empty($blog->categories) && is_array($blog->categories))
                                                        @foreach (array_slice($blog->categories, 0, 2) as $cat)
                                                            <span class="badge bg-info me-1">{{ $cat }}</span>
                                                        @endforeach
                                                        @if (count($blog->categories) > 2)
                                                            <span
                                                                class="badge bg-light text-dark">+{{ count($blog->categories) - 2 }}
                                                                more</span>
                                                        @endif
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (!empty($blog->topics) && is_array($blog->topics))
                                                        @foreach (array_slice($blog->topics, 0, 2) as $topic)
                                                            <span
                                                                class="badge bg-warning text-dark me-1">{{ $topic }}</span>
                                                        @endforeach
                                                        @if (count($blog->topics) > 2)
                                                            <span
                                                                class="badge bg-light text-dark">+{{ count($blog->topics) - 2 }}
                                                                more</span>
                                                        @endif
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($blog->is_homepage)
                                                        <span class="badge bg-success">Yes</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($blog->is_aboutpage)
                                                        <span class="badge bg-success">Yes</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($blog->is_locationpage)
                                                        <span class="badge bg-success">Yes</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-start justify-content-start"
                                                        style="flex-direction: column">
                                                        <div class="form-check form-switch d-inline-block">
                                                            <input class="form-check-input status_btn"
                                                                data-id="{{ $blog->id }}"
                                                                data-url="{{ route('admin.blog.status', $blog->id) }}"
                                                                type="checkbox" role="switch"
                                                                {{ $blog->status == 'active' ? 'checked' : '' }}>
                                                        </div>
                                                        <span
                                                            class="badge bg-{{ $blog->status == 'active' ? 'success' : 'danger' }} mt-1">{{ ucfirst($blog->status) }}</span>
                                                    </div>
                                                </td>
                                                <td class="table-action">
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                                        class="action-icon"><i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon delete_btn"
                                                        data-url="{{ route('admin.blog.destroy', $blog->id) }}"><i
                                                            class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center py-5">
                                    <i class="mdi mdi-post" style="font-size: 48px; color: #ccc;"></i>
                                    <h3 class="mt-3">No blogs found.</h3>
                                    <p class="text-muted">Click the "Add New Blog" button to create your first blog.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript-section')
    @if (Session::has('created'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ Session::get('created') }}",
                icon: "success"
            });
        </script>
    @elseif(Session::has('updated'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ Session::get('updated') }}",
                icon: "success"
            });
        </script>
    @endif

    <script>
        $(document).on("click", ".delete_btn", function() {
            let url = $(this).data('url');
            let csrf_token = $("meta[name='csrf-token']").attr('content');

            Swal.fire({
                title: "Are you sure?",
                text: "You want to delete this blog?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(async (result) => {
                if (result.isConfirmed) {
                    try {
                        const response = await fetch(url, {
                            method: "DELETE",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": csrf_token,
                                "Accept": "application/json"
                            }
                        });

                        const data = await response.json();

                        if (data.status == "success") {
                            Swal.fire("Deleted!", "Blog has been deleted successfully.", "success")
                                .then(() => {
                                    window.location.reload();
                                });
                        } else {
                            Swal.fire("Error", data.message || "Something went wrong", "error");
                        }
                    } catch (err) {
                        Swal.fire("Error", "Request failed. Please try again.", "error");
                    }
                }
            });
        });

        $(document).on("change", ".status_btn", function() {
            let $checkbox = $(this);
            let url = $checkbox.data('url');
            let newStatus = $checkbox.prop('checked') ? 'active' : 'inactive';
            let csrfToken = $("meta[name='csrf-token']").attr('content');

            Swal.fire({
                title: "Are you sure?",
                text: "You want to change the status?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, change it!"
            }).then(async (result) => {
                if (result.isConfirmed) {
                    try {
                        const response = await fetch(url, {
                            method: "PUT",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": csrfToken,
                                "Accept": "application/json"
                            },
                            body: JSON.stringify({
                                status: newStatus
                            })
                        });

                        const data = await response.json();

                        if (data.status == "success") {
                            Swal.fire("Updated!", "Status changed successfully.", "success").then(
                                () => {
                                    window.location.reload();
                                });
                        } else {
                            Swal.fire("Error", data.message || "Something went wrong", "error");
                            $checkbox.prop('checked', newStatus == 'active' ? false : true);
                        }
                    } catch (err) {
                        Swal.fire("Error", "Request failed. Please try again.", "error");
                        $checkbox.prop('checked', newStatus == 'active' ? false : true);
                    }
                } else {
                    $checkbox.prop('checked', newStatus == 'active' ? false : true);
                }
            });
        });
    </script>
@endsection
