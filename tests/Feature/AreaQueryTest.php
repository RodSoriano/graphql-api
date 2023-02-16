<?php

namespace Tests\Feature;

use App\Models\Area;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class AreaQueryTest extends TestCase
{
    /** @test */
    public function it_queries_the_collection_of_area_model(): void
    {
        $expected = Area::all();

        $response = $this->areasQuery();

        $actual = $response['data']['areas'];

        $this->assertEquals($expected->toArray(), $actual);
    }

    /** @test */
    public function it_queries_a_single_area_model(): void
    {
        $expected = Area::query()
            ->where('id', '=', 5)
            ->get();

        $response = $this->areaQuery();

        $actual = $response['data']['areas'];

        $this->assertEquals($expected->toArray(), $actual);
    }

    private function areasQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                areas {
                    id
                    crag_id
                    name
                    location
                    route_count
                    description
                    detail
                }
            }
        '
        );
    }

    private function areaQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                areas(id: 5) {
                    id
                    crag_id
                    name
                    location
                    route_count
                    description
                    detail
                }
            }
        '
        );
    }
}
