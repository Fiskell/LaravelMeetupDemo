<?php namespace App\Examples\Stitch\Product;

class ProxyProductRepository implements ProductRepositoryInterface
{
    /**
     * @return Product []
     */
    public function getAll() {
        // Use guzzle to proxy to legacy codebase;
        sleep(5);
    }

    /**
     * @param $id
     * @return Product
     */
    public function getDetail($id) {
        // Use guzzle to proxy to legacy codebase;
        sleep(5);
    }

    /**
     * @param array $params
     * @return Product
     */
    public function create(array $params) {
        // Use guzzle to proxy to legacy codebase;
        sleep(5);
    }

    /**
     * @param $id
     * @param array $params
     * @return Product
     */
    public function update($id, array $params) {
        // Use guzzle to proxy to legacy codebase;
        sleep(5);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        // Use guzzle to proxy to legacy codebase;
        sleep(5);
    }
}