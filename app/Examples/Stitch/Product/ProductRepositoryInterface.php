<?php namespace App\Examples\Stitch\Product;

interface ProductRepositoryInterface
{
    /**
     * @return Product []
     */
    public function getAll();

    /**
     * @param $id
     * @return Product
     */
    public function getDetail($id);

    /**
     * @param array $params
     * @return Product
     */
    public function create(array $params);

    /**
     * @param $id
     * @param array $params
     * @return Product
     */
    public function update($id, array $params);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}