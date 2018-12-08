<br><br><br>
<h2>Upload Image</h2>
<form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="">Please choose a file</label>
    <input type="file" name="file"><br>
    <button type="submit">Upload</button>
</form>