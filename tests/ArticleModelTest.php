<?php
namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\ArticleModel;

class ArticleModelTest extends TestCase
{
    protected ArticleModel $model;

    protected function setUp(): void
    {
        parent::setUp();
        $this->model = new ArticleModel();
    }

    public function testFindAllArticles()
    {
        $articles = $this->model->findAll();
        $this->assertIsArray($articles, "findAll should return an array.");
    }

    public function testInsertValidArticle()
    {
        $data = [
            'libelle'   => 'HP Elite Book',
            'reference' => 'HP-123456',
            'quantity'  => 10
        ];

        $id = $this->model->insert($data);
        $this->assertGreaterThan(0, $id, "Inserted Article ID should be > 0");
    }

    public function testInsertFailsWithNegativeQuantity()
    {
        $data = [
            'libelle'   => 'HP Mouse',
            'reference' => 'HP-MOU-123',
            'quantity'  => -3
        ];

        $this->assertFalse($this->model->insert($data), "Insert should fail with negative quantity.");
    }

    public function testInsertFailsWithNullLibelle()
    {
        $data = [
            'libelle'   => null,
            'reference' => 'HP-NULL-001',
            'quantity'  => 5
        ];

        $this->assertFalse($this->model->insert($data), "Insert should fail with null libelle.");
    }

    public function testInsertFailsWithNullReference()
    {
        $data = [
            'libelle'   => 'HP Keyboard',
            'reference' => null,
            'quantity'  => 5
        ];

        $this->assertFalse($this->model->insert($data), "Insert should fail with null reference.");
    }
}
?>
