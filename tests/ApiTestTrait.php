<?php namespace Tests;

trait ApiTestTrait
{
    private $response;
    public function assertApiResponse($message , Array $actualData)
    {
        $this->assertApiSuccess($message , $actualData);
    }

    public function assertApiSuccess($message , $result)
    {
        $response = [
            'status'  => true,
            'message' => $message,
            'data'    => $result,
        ];

        $this->response->assertStatus(200);
        $this->response->assertJson($response);
    }

    public function assertModelData(Array $actualData, Array $expectedData)
    {
        foreach ($actualData as $key => $value) {
            if (in_array($key, ['created_at', 'updated_at'])) {
                continue;
            }
            $this->assertEquals($actualData[$key], $expectedData[$key]);
        }
    }
}
