<?php
namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\ArticleModel;

class ArticleModelTest extends TestCase {
    public function testFindAllStudents()
    {
        $model = new ArticleModel();
        $articles = $model->findAll();

        $this->assertIsArray($articles, "findAll retourne un tableau !");
        
    }

    public function testInsertStudent()
    {
        $model = new ArticleModel();


        $data = ['nom' => 'Hamza', 'reference' => "123456", 'quantity' => 10];

        $id = $model->insert($data);

        $this->assertGreaterThan(0, $id, "ID Article inséré > 0");
    }
}
?>
