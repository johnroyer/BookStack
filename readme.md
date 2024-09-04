# BookStack-meilisearch

This is a concept provement testing. Use Meilisearch as BookStack's search suggestion.

**NOTE**: not all funtionality has been implemented yet. Do NOT use it on production.

----

# Why Meilisearch

BookStack use space to separate sentence to words (search tokens). But not all language can be index by this algorithm.

Meilisearch use N-grams to create indexes. It make better search experience, and can use on most of languages.
