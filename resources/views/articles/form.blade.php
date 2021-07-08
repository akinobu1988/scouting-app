@csrf

<!-- <div class="form-group">
  <label>動画アップロード</label>
  <input type="file" enctype="multipart/form-data" name="img_url" class="form-control" required value="{{ $article->img_url ?? old('img_url') }}"> 
</div> -->

<!-- <form action="{{ url('/img/upload') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <input id="fileUploader" type="file" name="img_url" accept='image/' enctype="multipart/form-data" multiple="multiple" required autofocus>
    </div>
</form> -->

<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}"> 
</div>
<div class="form-group">
  <article-tags-input
  :initial-tags='@json($tagNames ?? [])'
  :autocomplete-items='@json($allTagNames ?? [])'
  >
  </article-tags-input>
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea> 
</div>
