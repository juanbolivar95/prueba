<?php
	/**
	 *
	 * @About:
	 * @File:        ProductsController.php
	 * @Date:        12/29/20
	 * @Version:     prueba 1.0
	 * @Developer:   Juan David Bolívar. (judaob95@hotmail.com)
	 *
	 **/

	namespace Tissini\Controllers;


	use Tissini\Models\ProductsModel;

	class ProductsController
	{
		private $model;

		/**
		 * ProductsController constructor.
		 */
		public function __construct()
		{
			$this->model = new ProductsModel();
		}

		public function getProducts($cat): string
		{
			$prods = $this->model->getProducts($cat);

			$list = '';

			if($prods->num_rows > 0) {
				while ($prod = $prods->fetch_object()) {
					$list.= '<div class="col-4">
			                    <div class="card shadow p-3 mb-5 bg-white rounded">
			                        <img src="'.$prod->photo.'" class="card-img-top" alt="...">
			                        <div class="card-body">
			                        	<h5 class="card-title">$'.number_format($prod->price, 2, '.', ',').'</h5>
			                            <h6 class="card-subtitle mb-2 text-muted">'.$prod->name.'</h6>
			                            <p class="card-text">'.$prod->description.'</p>
			                            <a href="product-detail/'.$prod->id_product.'" class="btn btn-success mt-2">Ver más</a>
			                        </div>
			                    </div>
			                </div>';
				}
			}
			else {
				$list = 'No hay productos para mostrar';
			}

			return  $list;
		}
	}