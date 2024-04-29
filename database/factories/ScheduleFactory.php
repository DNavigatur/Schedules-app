<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Guard;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    protected $model;
    public function __construct(Factory $factory){
        $this->model = $factory->make(Guard::class);
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date('Y-m-d'),
            'guard_id' => function () {
                return $this->model->create()->id;
            },
        ];
    }
}