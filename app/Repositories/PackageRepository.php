<?php

namespace App\Repositories;

use App\Models\Package;

/**
 * Class PackageRepository
 * @package App\Repositories
 * @version October 2, 2020, 6:28 pm UTC
 */
class PackageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'transaction_id',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Package::class;
    }
}
