<?php

namespace BookStack\Search;

use BookStack\Entities\Models\Entity;
use Meilisearch\Client;

class Meilisearch
{
    private $client;

    private $indexName = '';

    public function __construct(Client $client, string $indexName)
    {
        $this->client = $client;
        $this->indexName = $indexName;
    }

    public function initialize()
    {
        try {
            $index = $this->client->getIndex($this->indexName);

            // delete if exists
            $index->delete();
        } catch (\Exception $exception) {
            // index is not exists
            // do nothing
        }

        $index = $this->client->getIndex($this->indexName);

        // update index attributes
        $index->updateSearchableAttributes(
            $this->getIndexSettings()['searchableAttributes']
        );
        $index->updateDisplayedAttributes(
            $this->getIndexSettings()['displayedAttributes']
        );
    }

    public function addIndex(Entity $entity)
    {
        // remove exists data first by entity ID

        // index entity content
    }

    public function getIndexSettings(): array
    {
        /**
         * Meiliserch index attributes
         *
         * while index data is:
         *   [
         *       'id' => 'entity ID',
         *       'content' => 'entity text without HTML'
         *   ]
         */
        return [
            'displayedAttributes' => [
                'id',
                'entityType',
                'entityId',
            ],
            'searchableAttributes' => [
                'content',
            ],
            'filterableAttributes' => [
            ],
            'sortableAttributes' => [
            ],
        ];
    }
}