<form method="GET">
    {{ csrf_field() }}
    <div class='form-group'>
        <label for='keyword'>キーワード:</label>
        <input type='text' name='keyword' id='keyword' class='form-control'>
    </div>
    <div class='form-group'>
    <button type="submit" class="btn btn-outline-primary">検索</button>
        <a href={{ route('article.list') }}>クリア</a>
    </div>
</form>