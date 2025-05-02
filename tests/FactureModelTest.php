<?php
namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\FactureModel;

class FactureModelTest extends TestCase {

    private $model;

    // Set up the model before each test
    public function setUp(): void
    {
        // Create an instance of the FactureModel
        $this->model = new FactureModel();
    }

    // Test retrieving all factures
    public function testFindAllFactures()
    {
        $factures = $this->model->getAll();

        $this->assertIsArray($factures, "getAll retourne un tableau !");
    }

    // Test inserting a new facture
    public function testInsertFacture()
    {
        // Sample data for the test
        $dateFacture = date('Y-m-d');
        $client = 'Client Test';
        $total = 1500.75;

        // Insert the facture and check if the result is true
        $result = $this->model->insert($dateFacture, $client, $total);

        $this->assertTrue($result, "La facture a bien été insérée !");
    }
}
?>
