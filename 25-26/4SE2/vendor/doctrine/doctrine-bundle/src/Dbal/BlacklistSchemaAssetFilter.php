<?php

namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Schema\AbstractAsset;

use function in_array;

/** @deprecated Implement your own include/exclude mechanism */
class BlacklistSchemaAssetFilter
{
    /** @param string[] $blacklist */
    public function __construct(
        private readonly array $blacklist,
    ) {
    }

    /** @param string|AbstractAsset $assetName */
    public function __invoke($assetName): bool
    {
        if ($assetName instanceof AbstractAsset) {
            $assetName = $assetName->getName();
        }

        return ! in_array($assetName, $this->blacklist, true);
    }
}
