<x-layout>
    <form action="/posts/{{$post->id}}" method="post">
        @method('PATCH')
       <x-form :post="$post" />
      <button type="submit" class="btn btn-primary">تعديل</button>
    </form>
</x-layout>
