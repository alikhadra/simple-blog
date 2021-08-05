@section('title', $post->title)

<x-layout>
    <x-post :post="$post" :comments="$comments" class="font-weight-bold" />
       <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit">تعديل المقالة</a>
    <h3 class="mt-3">أضف تعليقاً</h3>
    <x-createComment :post="$post" />
        <nav class="blog-pagination mt-3">
            <a class="btn btn-outline-primary" href="#">الأفدم</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">الأحدث</a>
        </nav>

        <aside class="col-md-4 blog-sidebar ">

        <div class="p-4">
            <h4 class="font-italic">حسابات المدونة</h4>
            <ol class="list-unstyled">
            <li><a href="#">تويتر</a></li>
            <li><a href="#">فيسبوك</a></li>
            </ol>
        </div>

        </aside><!-- /.blog-sidebar -->
</x-layout>
