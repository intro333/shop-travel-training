<?php

namespace App\Services\Factory;

use Illuminate\Database\Eloquent\Collection;

class OrderFactory implements AbstractModelFactory
{
    public $collection;
    public $request;

    /**
     * OrderFactory constructor.
     * @param Collection $collection
     * @param array $request
     */
    public function __construct(Collection $collection, $request)
    {
        $this->collection = $collection;
        $this->request = $request;
    }

    /**
     * @return array
     */
    public function getUserData()
    {
        $request = $this->request;
        $collection = $this->collection
            ->map(function ($collection) use($request) {
                return [
                    'email' => $collection->email,
                    'fname' => $collection->userDetails->fname,
                    'sname' => $collection->userDetails->sname,
                    'phone' => $collection->userDetails->phone,
                ];
            });

        return $collection->first();
    }
}