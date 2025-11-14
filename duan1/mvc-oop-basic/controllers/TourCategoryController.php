<?php

class TourCategoryController extends Controller {

    private $model;

    public function __construct() {
        $this->model = new TourCategory();
    }

    public function index() {
        $data = $this->model->all();
        $this->render("tour_category/index", ['categories' => $data]);
    }

    public function create() {
        $this->render("tour_category/create");
    }

    public function store() {
        $this->model->store($_POST);
        header("Location: ?act=tourcategory/index");
    }

    public function edit() {
        $id = $_GET['id'];
        $category = $this->model->find($id);

        $this->render("tour_category/edit", ['category' => $category]);
    }

    public function update() {
        $id = $_POST['id'];
        $this->model->updateRow($id, $_POST);
        header("Location: ?act=tourcategory/index");
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->deleteRow($id);
        header("Location: ?act=tourcategory/index");
    }
}
