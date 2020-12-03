<form class="search-form" role="search" action="/" method="get">
  <label for="search">
    <span class="screen-reader-text">Search for:</span>
    <input type="hidden" value="krvideo" name="post_type" id="post_type" />
    <input type="text" class="search-field" name="s" id="search" placeholder="Search …" value="{{ the_search_query() }}" />
  </label>
</form>
