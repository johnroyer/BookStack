<?php

namespace BookStack\Search;

use BookStack\Entities\EntityProvider;
use BookStack\Entities\Models\Entity;
use Illuminate\Support\Collection;
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
        $index = $this->client->index($this->indexName);

        $entityInfo = $entity->toArray();
        $id = class_basename($entity) . '-' . $entityInfo['id'];

        // remove exists data first by entity ID
        $doc = $index->deleteDocument($id);

        // index entity content
        $doc = array_merge($entityInfo, ['id' => $id]);
        $index->addDocuments($doc);
    }

    /**
     * @param string $keyword
     * @return array{total: int, count: int, has_more: bool, results: Collection<Entity>}
     * @see "SearchRunner::searchEntities()"
     */
    public function search(string $keyword): array
    {
        $index = $this->client->index($this->indexName);
        $list = $index->search($keyword)->getHits();
        $collection = collect();

        $eneityProvider = new EntityProvider();
        foreach ($list as $document) {
            $entityInfo = explode('-', $document['id']);
            $entity = $eneityProvider->get($entityInfo[0])
                ->find($entityInfo[1]);
            $collection->push($entity);
        }

        return [
            'total' => $list,
            'count' => $list,
            'has_more' => false,
            'results' => $collection,
        ];
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
                'name',
                'description',
                'tags',
            ],
            'filterableAttributes' => [
            ],
            'sortableAttributes' => [
            ],
        ];
    }
}