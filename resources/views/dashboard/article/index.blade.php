@extends('dashboard.layouts.app')
@section('title', 'Article')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Article</h3>
                    <p class="text-subtitle text-muted">Article data is all data from Articles.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Article
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data Article</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Welcome to our web page showcasing the Article data of our boarding house, where comfort
                        and convenience come together in one place."
                    </p>
                    <a href="{{ route('article.create') }}" class="btn icon icon-left btn-primary"><i
                            class="bi bi-clipboard-plus"></i>
                        Add Article</a>
                </div>

                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($articles as $article => $post)
                                <tr>
                                    <td>{{ $article + $articles->firstitem() }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{!! $post->excerpt !!}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="" width="100px">
                                    <td>
                                        <a href="{{ route('article.show', $post->slug) }}" class="btn icon btn-primary m-1"
                                            title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('article.edit', $post->slug) }}" class="btn icon btn-success m-1"
                                            title="Edit"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('article.destroy', $post->slug) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn icon btn-danger m-1" title="Delete"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table -->
                <div class="m-3 pagination pagination-primary">
                    {{ $articles->links() }}
                </div>
            </div>



        </section>
    </div>

@endsection
