<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Package;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PackageApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware;
    use DatabaseMigrations;

    /**
     * @test
     */
    public function test_create_package()
    {
        $package = factory(Package::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/packages', $package
        );

        $this->assertApiResponse('Package saved successfully',$package);
    }
    /**
     * @test
     */
    public function test_index_package()
    {
        $package = factory(Package::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/packages/'
        );

        $this->assertApiResponse('Packages retrieved successfully',[$package->toArray()]);
    }
    /**
     * @test
     */
    public function test_read_package()
    {
        $package = factory(Package::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/packages/' . $package->id
        );

        $this->assertApiResponse('Package retrieved successfully',$package->toArray());
    }

    /**
     * @test
     */
    public function test_update_package()
    {
        $package = factory(Package::class)->create();
        $editedPackage = factory(Package::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/packages/' . $package->id,
            $editedPackage
        );

        $this->assertApiResponse('Package updated successfully',$editedPackage);
    }

    /**
     * @test
     */
    public function test_delete_package()
    {
        $package = factory(Package::class)->create();

        $this->response = $this->json(
            'DELETE',
            '/api/packages/' . $package->id
        );

        $this->assertApiSuccess('Package deleted successfully', '[]');
        $this->response = $this->json(
            'GET',
            '/api/packages/' . $package->id
        );

        $this->response->assertStatus(404);
    }
}
