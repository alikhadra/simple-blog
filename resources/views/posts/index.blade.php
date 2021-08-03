<x-layout>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

        @foreach ($posts as $post)


        <div class="blog-post mb-3">
            <h2 class="blog-post-title">
              <a href="/posts/{{ $post->id }}) ">
                {{ $post->title }}
              </a>
            </h2>
            <p class="blog-post-meta">بقلم
                <a href="#">
                    {{ $post->author }}
                </a>
                <?php echo(Carbon\Carbon::parse($post->created_at)->diffForHumans()) ?>
            </p>
        </div>
        @endforeach

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">الأقدم</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">الأحدث</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4> مبادئ التسويق الاكتروني</h4>
        <p>يمكنك الآن شراء نسختك من كتاب مبادئ التسويق الاكتروني بتخفيض قدره 30% أدخل عنوان بريدك الالكتروني لتصلك رسالة بالتفاصيل</p>
        <form action="/mail" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" id="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">إرسال</button>
            </div>
        </form>
        @error('email')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
      </div>

      <div class="p-4">
        <h4 class="font-italic">حسابات المدونة</h4>
        <ol class="list-unstyled">
          <li><a href="#">تويتر</a></li>
          <li><a href="#">فيسبوك</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
</x-layout>
