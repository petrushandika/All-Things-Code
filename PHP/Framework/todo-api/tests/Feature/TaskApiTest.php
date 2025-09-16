<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void {
        parent::setUp(); 
    }

    /** @test */
    public function it_can_get_all_tasks() {
        Task::factory()->count(5)->create();

        $response = $this->getJson('/api/v1/tasks');
        
        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'description',
                    'completed',
                    'created_at',
                ]
            ],
            'links',
            'meta'
        ]);
    }

    /** @test */
    public function it_can_create_a_new_task() { 
        $taskData = [
            'title' => 'Test Task',
            'description' => 'This is a test task',
            'completed' => false
        ];

        $response = $this->postJson('/api/v1/tasks', $taskData);

        $response->assertStatus(201)->assertJson([
            'data' => [
                'title' => 'Test Task',
                'description' => 'This is a test task',
                'completed' => false
            ]
        ]);

        $this->assertDatabaseHas('tasks', $taskData);
    }

    /** @test */
    public function it_validates_required_fields_when_creating_task()
    {
        $response = $this->postJson('/api/v1/tasks', [
            'description' => 'Task without title'
        ]);
        
        $response->assertStatus(422)
                ->assertJsonValidationErrors(['title']);
    }

    /** @test */
    public function it_can_show_a_specific_task() {
        $task = Task::factory()->create();

        $response = $this->getJson("/api/v1/tasks/{$task->id}");

        $response->assertStatus(200)->assertJson([
            'data' => [
                'id' => $task->id,
                'title' => $task->title,
                'description' => $task->description,
                'completed' => $task->completed,
            ]
        ]);
    }

    /** @test */
    public function it_can_update_a_task()
    {
        $task = Task::factory()->create();
        $updateData = [
            'title' => 'Updated Task Title',
            'description' => 'Updated description',
            'completed' => true
        ];
        
        $response = $this->putJson("/api/v1/tasks/{$task->id}", $updateData);
        
        $response->assertStatus(200)
                ->assertJson([
                    'data' => $updateData
                ]);
                
        $this->assertDatabaseHas('tasks', array_merge(
            ['id' => $task->id],
            $updateData
        ));
    }

    /** @test */
    public function it_can_delete_a_task()
    {
        $task = Task::factory()->create();
        
        $response = $this->deleteJson("/api/v1/tasks/{$task->id}");
        
        $response->assertStatus(204);
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
    
    /** @test */
    public function it_returns_404_for_non_existent_task()
    {
        $response = $this->getJson('/api/v1/tasks/999');
        
        $response->assertStatus(404);
    }
    
    /** @test */
    public function it_can_filter_completed_tasks()
    {
        Task::factory()->completed()->count(3)->create();
        Task::factory()->pending()->count(2)->create();
        
        $response = $this->getJson('/api/v1/tasks');
        
        $response->assertStatus(200);
        $data = $response->json('data');
        $this->assertCount(5, $data);
    }
}