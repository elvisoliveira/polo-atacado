<div id="assine-news">
    <form action="{{ $page->baseUrl }}/assine-news" enctype="multipart/form-data" method="post">
        <fieldset>
            <div class="field">
                <input type="text" class="text" name="email" />
            </div>
            <div class="action">
                <input type="submit" class="submit" value="OK" />
            </div>
        </fieldset>
    </form>
</div>
