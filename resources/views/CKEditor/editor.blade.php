<form method="POST" action={{ url('store') }}>
    <p><textarea name="editor" id="editor"></textarea></p>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="submit"/>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

<script>
 ClassicEditor
    .create(document.querySelector('#editor'), {
    })
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });

</script>
