<?php
namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\BonlivraisonModel;

class BonlivraisonModelTest extends TestCase {
    public function testSimpleInsert()
    {
        $model = new BonlivraisonModel();

        $data = [
            'dateCommande' => '2025-12-03',
            'client'       => 'Ali'
        ];

        $id = $model->insert($data);
        $bon = $model->find($id);

        $this->assertEquals('Ali', $bon['client']);
    }
    public function testInsertWithoutClient()
{
    $model = new BonlivraisonModel();

    $data = [
        'dateCommande' => '2025-12-05'
        // no 'client' field
    ];

    $id = $model->insert($data);
    $bon = $model->find($id);

    $this->assertArrayHasKey('client', $bon);  // client should exist
    $this->assertNull($bon['client']);         // but be null
}
public function testUpdateBonLivraison()
{
    $model = new BonlivraisonModel();

    // Insert a record first
    $id = $model->insert([
        'dateCommande' => '2025-12-06',
        'client'       => 'Ali'
    ]);

    // Update the client name
    $model->update($id, ['client' => 'Khaled']);

    $updated = $model->find($id);

    $this->assertEquals('Khaled', $updated['client']);
}
public function testFindAllByDateCommande()
{
    $model = new BonlivraisonModel();

    // Insert multiple records
    $model->insert(['dateCommande' => '2025-12-10', 'client' => 'Ali']);
    $model->insert(['dateCommande' => '2025-12-10', 'client' => 'Sara']);
    $model->insert(['dateCommande' => '2025-12-11', 'client' => 'Khaled']);

    // Find all with dateCommande = '2025-12-10'
    $results = $model->where('dateCommande', '2025-12-10')->findAll();

    $this->assertCount(2, $results);
    $this->assertEquals('Ali', $results[0]['client']);
    $this->assertEquals('Sara', $results[1]['client']);
}


}
?>