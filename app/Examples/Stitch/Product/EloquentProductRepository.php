<?php namespace App\Examples\Stitch\Product;

class EloquentProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product $model
     */
    protected $model;

    public function __construct(Product $product) {
        $this->model = $product;
    }

    /**
     * @return Product []
     */
    public function getAll() {
        return [];
//        return $this->model->all();
    }

    /**
     * @param $id
     * @return Product
     */
    public function getDetail($id) {
        return $this->model->find($id);
    }

    /**
     * @param array $params
     * @return Product
     */
    public function create(array $params) {
        $new_model = $this->model->newInstance($params);
        $new_model->save();
        return $new_model;
    }

    /**
     * @param $id
     * @param array $params
     * @return Product
     */
    public function update($id, array $params) {
        $model_to_update = $this->getDetail($id);
        $model_to_update->fill($params);
        $model_to_update->save();
        return $model_to_update;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        $model_to_delete = $this->getDetail($id);
        $model_to_delete->delete();
    }
}