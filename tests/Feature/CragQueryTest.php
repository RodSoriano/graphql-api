<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Crag;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class CragQueryTest extends TestCase
{
    /** @test */
    public function it_returns_the_collection_of_crag_model(): void
    {
        $expected = Crag::all();

        $response = $this->cragsQuery();

        $actual = $response['data']['crags'];

        $this->assertEquals($expected->toArray(), $actual);
    }

    private function cragsQuery(): TestResponse
    {
        return $this->graphQL(
            /** @lang GraphQL */ '
            {
                crags {
                    id
                    name
                    location
                    route_count
                    get_here
                    description
                    detail
                }
            }
        ');
    }
}
