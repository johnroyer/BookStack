# BookStack-meilisearch

This is a concept provement testing. Use Meilisearch as BookStack's search suggestion.

**NOTE**: not all funtionality has been implemented yet. Do NOT use it on production.

----

# Why Meilisearch

BookStack use space to separate sentence to words (search tokens). But not all language can be index by this algorithm.

Meilisearch use N-grams to create indexes. It make better search experience, and can use on most of languages.

----

# Migration

**WARNING**: BACKUP, before you do any changes.

You can manually copy and overwrite `app/Search/SearchController.php` on your currrent project.

set your Meilisearch configs in `.env`:

```
MEILISEARCH_HOST=127.0.0.1
MEILISEARCH_PORT=7700
MEILISEARCH_MASTER_KEY=
```

Then execute `php artisan bookstack:regenerate-search` to re-index data by Meilisearch.

if no error occurs, you can search using Meiliseach on SearchSuggestion (only, see sreenshot below). 

----

# Screenshot

You can now search using event words in the middle of the phrease:

![search](https://i.imgur.com/nBerBDM.png)
