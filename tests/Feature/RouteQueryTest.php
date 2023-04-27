<?php

namespace Tests\Feature;

use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class RouteQueryTest extends TestCase
{
    /** @test */
    public function it_queries_the_collection_of_route_model(): void
    {
        $response = $this->routesQuery();

        $response->assertStatus(200);
    }

    /** @test */
    public function it_queries_a_single_route_model(): void
    {
        $response = $this->routeQuery();

        $response->assertStatus(200);
    }

    /** @test */
    public function it_queries_routes_by_grade(): void
    {
        $response = $this->gradeFilterQuery();

        $response->assertStatus(200);
    }

    /** @test */
    public function it_queries_routes_by_type(): void
    {
        $response = $this->typeFilterQuery();

        $response->assertStatus(200);
    }

    /** @test */
    public function it_queries_routes_by_quick_draws(): void
    {
        $response = $this->quickDrawFilterQuery();

        $response->assertStatus(200);
    }

    private function routesQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                routes {
                    id
                    area_id
                    name
                    grade
                    type
                    quick_draw_count
                    length
                    setters
                    first_ascend
                    bolted_at
                    description
                    detail
                }
            }
        '
        );
    }

    private function routeQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                routes(id: 3) {
                    id
                    area_id
                    name
                    grade
                    type
                    quick_draw_count
                    length
                    setters
                    first_ascend
                    bolted_at
                    description
                    detail
                }
            }
        '
        );
    }

    private function gradeFilterQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                routes(grade: "6a") {
                    id
                    area_id
                    name
                    grade
                    type
                    quick_draw_count
                    length
                    setters
                    first_ascend
                    bolted_at
                    description
                    detail
                }
            }
        '
        );
    }

    private function typeFilterQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                routes(type: SPORT) {
                    id
                    area_id
                    name
                    grade
                    type
                    quick_draw_count
                    length
                    setters
                    first_ascend
                    bolted_at
                    description
                    detail
                }
            }
        '
        );
    }

    private function quickDrawFilterQuery(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            {
                routes(quick_draws: 10) {
                    id
                    area_id
                    name
                    grade
                    type
                    quick_draw_count
                    length
                    setters
                    first_ascend
                    bolted_at
                    description
                    detail
                }
            }
        '
        );
    }
}
