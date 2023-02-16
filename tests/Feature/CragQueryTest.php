<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Crag;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class CragQueryTest extends TestCase
{
    /** @test */
    public function it_queries_the_collection_of_crag_model(): void
    {
        $expected = Crag::all();

        $response = $this->cragsQuery();

        $actual = $response['data']['crags'];

        $this->assertEquals($expected->toArray(), $actual);
    }

    /** @test */
    public function it_queries_a_single_crag_model(): void
    {
        $expected = Crag::query()
            ->where('id', '=', 2)
            ->get();

        $response = $this->cragQuery();

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
        '
        );
    }

    private function cragQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                crags(id: 2) {
                    id
                    name
                    location
                    route_count
                    get_here
                    description
                    detail
                }
            }
        '
        );
    }
}
