@extends('admin.layouts.index')
@section('adminmain')
<div class="inputatricle">
    <form action='changehomecheck' method='POST' class=''>

        {{ csrf_field() }}
 <textarea id="mde" name="markdown"></textarea>
        <button type="submit" name="add">
            送信
        </button>
    </form>
</div>
<script>
    const mde = new SimpleMDE({
        element: document.getElementById("mde")
    });
</script>
</html>
@endsection