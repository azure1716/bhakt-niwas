<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'categories' => 'nullable|array',
            'topics' => 'nullable|array',
        ]);

        $data = $request->except('image', '_token');
        $data['is_homepage'] = $request->has('is_homepage') ? 1 : 0;
        $data['is_aboutpage'] = $request->has('is_aboutpage') ? 1 : 0;
        $data['is_locationpage'] = $request->has('is_locationpage') ? 1 : 0;
        // $data['published_date'] = now();
        $data['published_date'] = $request->published_date ?? now();

        $data['slug'] = Str::slug($request->title);

        // Image Upload to public/uploads/blogs
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Ensure directory exists
            if (!file_exists(public_path('uploads/blogs'))) {
                mkdir(public_path('uploads/blogs'), 0777, true);
            }

            // Move image to public folder
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = 'uploads/blogs/' . $filename;
        }

        Blog::create($data);

        return redirect()->route('admin.blog.index')->with('created', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'categories' => 'nullable|array',
            'topics' => 'nullable|array',
        ]);

        $blog = Blog::findOrFail($id);
        $data = $request->except('image', '_token', '_method');
        $data['published_date'] = $request->published_date ?? $blog->published_date;

        $data['is_homepage'] = $request->has('is_homepage') ? 1 : 0;
        $data['is_aboutpage'] = $request->has('is_aboutpage') ? 1 : 0;
        $data['is_locationpage'] = $request->has('is_locationpage') ? 1 : 0;

        // === IMAGE LOGIC START ===
        if ($request->has('remove_image')) {
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
            $data['image'] = null;
        } elseif ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            if (!file_exists(public_path('uploads/blogs'))) {
                mkdir(public_path('uploads/blogs'), 0777, true);
            }
            $file->move(public_path('uploads/blogs'), $filename);
            $data['image'] = 'uploads/blogs/' . $filename;
        }

        $blog->update($data);

        return redirect()->route('admin.blog.index')->with('updated', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }
        $blog->delete();

        return response()->json(['status' => 'success', 'message' => 'Blog deleted successfully']);
    }

    public function status(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = $request->status;
        $blog->save();

        return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
    }
}
