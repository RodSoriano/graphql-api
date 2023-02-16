<?php

namespace Tests\Feature;

use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class CommentMutationTest extends TestCase
{
    /** @test */
    public function it_creates_a_comment(): void
    {
        $response = $this->createComment();

        $response->assertStatus(200);
    }

    private function createComment(): TestResponse
    {
        return $this->graphQL(
        /** @lang GraphQL */ '
            mutation {
                createComment(
                commentable_type: $model
                commentable_id: $id
                comment: $comment
                )
            }
        ',
            [
                'model' => 'Route',
                'id' => 3,
                'comment' => 'this is a test comment',
            ]
        );
    }
}
