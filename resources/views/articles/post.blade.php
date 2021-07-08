<div class="form-group">
  <label>動画アップロード</label>
  <input type="file" enctype="multipart/form-data" name="video_url" class="form-control" required value="{{ $article->img_url ?? old('img_url') }}"> 
</div>