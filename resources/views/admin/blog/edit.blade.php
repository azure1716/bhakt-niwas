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
                                <li class="breadcrumb-item"><a href="{{ route('admin.blog.index') }}">Blogs</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Blog</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h3>Edit Blog</h3>
                                        <div>
                                            <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Back</a>
                                        </div>
                                    </div>

                                    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row">
                                            <!-- Title -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="title" id="title"
                                                        value="{{ old('title', $blog->title) }}" class="form-control"
                                                        required>
                                                    @error('title')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Short Description -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="short_description" class="form-label">Short
                                                        Description</label>
                                                    <textarea name="short_description" id="short_description" rows="3" class="form-control">{{ old('short_description', $blog->short_description) }}</textarea>
                                                    @error('short_description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- New Sansthan Related Fields -->
                                            {{-- <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="related_sansthan_location" class="form-label">Related
                                                        Sansthan Location</label>
                                                    <input type="text" name="related_sansthan_location"
                                                        id="related_sansthan_location"
                                                        value="{{ old('related_sansthan_location', $blog->related_sansthan_location) }}"
                                                        class="form-control" placeholder="e.g. Shegaon, Pandharpur">
                                                    @error('related_sansthan_location')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="related_sansthan_link" class="form-label">Related Sansthan
                                                        Link</label>
                                                    <input type="text" name="related_sansthan_link"
                                                        id="related_sansthan_link"
                                                        value="{{ old('related_sansthan_link', $blog->related_sansthan_link) }}"
                                                        class="form-control" placeholder="https://example.com/location">
                                                    @error('related_sansthan_link')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div> --}}

                                            <!-- Categories & Topics (Select2 with existing values) -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="categories" class="form-label">Categories</label>
                                                    <select name="categories[]" id="categories"
                                                        class="form-control select2-tags" multiple="multiple">
                                                        @if (!empty($blog->categories) && is_array($blog->categories))
                                                            @foreach ($blog->categories as $cat)
                                                                <option value="{{ $cat }}" selected>
                                                                    {{ $cat }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <small class="text-muted">Type and press Enter to add new
                                                        categories.</small>
                                                    @error('categories')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="topics" class="form-label">Topics</label>
                                                    <select name="topics[]" id="topics" class="form-control select2-tags"
                                                        multiple="multiple">
                                                        @if (!empty($blog->topics) && is_array($blog->topics))
                                                            @foreach ($blog->topics as $topic)
                                                                <option value="{{ $topic }}" selected>
                                                                    {{ $topic }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <small class="text-muted">Type and press Enter to add new
                                                        topics.</small>
                                                    @error('topics')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Image -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Image <span
                                                            class="text-muted">(Optional)</span></label>
                                                    <input type="file" name="image" id="image" class="form-control"
                                                        accept="image/*">
                                                    <small class="text-muted">Leave empty to keep current image</small>
                                                    @error('image')
                                                        <br><span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            @if ($blog->image)
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Current Image</label>
                                                        <div>
                                                            <img src="{{ asset($blog->image) }}" alt="Current Image"
                                                                style="max-width: 200px; border-radius: 4px;">
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="remove_image" id="remove_image" value="1">
                                                            <label class="form-check-label text-danger" for="remove_image">
                                                                <i class="mdi mdi-delete me-1"></i> Remove current image
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <!-- Image Preview (For New Uploads) -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div id="image-preview" style="display: none;">
                                                        <img src="#" alt="Preview"
                                                            style="max-width: 200px; border-radius: 4px;">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Description -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Description <span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="description" id="description" rows="8" class="form-control text_editor" required>{{ old('description', $blog->description) }}</textarea>
                                                    @error('description')
                                                        <br><span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Display Settings Section -->
                                            <div class="col-md-12">
                                                <h4 class="mt-2 mb-3">Display Settings</h4>
                                                <hr>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="is_homepage" name="is_homepage" value="1"
                                                                {{ old('is_homepage', $blog->is_homepage) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="is_homepage">Show on
                                                                Homepage</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="is_aboutpage" name="is_aboutpage" value="1"
                                                                {{ old('is_aboutpage', $blog->is_aboutpage) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="is_aboutpage">Show on
                                                                About Page</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="is_locationpage" name="is_locationpage"
                                                                value="1"
                                                                {{ old('is_locationpage', $blog->is_locationpage) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="is_locationpage">Show on
                                                                Locations Page</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Published Date -->
                                            <div class="col-md-6 mt-3">
                                                <div class="mb-3">
                                                    <label for="published_date" class="form-label">Published Date</label>
                                                    <input type="date" name="published_date" id="published_date"
                                                        value="{{ old('published_date', $blog->published_date ? \Carbon\Carbon::parse($blog->published_date)->format('Y-m-d') : '') }}"
                                                        class="form-control">
                                                    <small class="text-muted">Leave empty to keep existing date.</small>
                                                    @error('published_date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- SEO Section --}}
                                            <div class="col-md-12 mt-3">
                                                <h4 class="mt-2 mb-3">SEO Settings</h4>
                                                <hr>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="meta_title" class="form-label">Meta Title</label>
                                                    <input type="text" name="meta_title" id="meta_title"
                                                        value="{{ old('meta_title', $blog->meta_title) }}"
                                                        class="form-control">
                                                    @error('meta_title')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="meta_description" class="form-label">Meta
                                                        Description</label>
                                                    <textarea name="meta_description" id="meta_description" rows="3" class="form-control">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                                    @error('meta_description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                                    <input type="text" name="meta_keywords" id="meta_keywords"
                                                        value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                                                        class="form-control" placeholder="keyword1, keyword2, keyword3">
                                                    @error('meta_keywords')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Status -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="active"
                                                            {{ old('status', $blog->status) == 'active' ? 'selected' : '' }}>
                                                            Active</option>
                                                        <option value="inactive"
                                                            {{ old('status', $blog->status) == 'inactive' ? 'selected' : '' }}>
                                                            Inactive</option>
                                                    </select>
                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Submit -->
                                            <div class="col-md-12 text-end">
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary px-4">Update
                                                        Blog</button>
                                                    <a href="{{ route('admin.blog.index') }}"
                                                        class="btn btn-secondary ms-2">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript-section')
    <!-- Select2 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // Image preview
        document.getElementById('image').addEventListener('change', function(e) {
            var preview = document.getElementById('image-preview');
            var previewImg = preview.querySelector('img');
            var file = e.target.files[0];

            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                previewImg.src = '#';
            }
        });

        // Select2 Initialization with pre-filled values
        $(document).ready(function() {
            $('.select2-tags').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                placeholder: "Add items and press Enter"
            });
        });
    </script>
@endsection
