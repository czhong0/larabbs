<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $sentence = $this->faker->sentence();
        // 随机取一个月以内的时间
        $updated_at = $this->faker->dateTimeThisMonth();

        // 传参为生成最大时间不超过，因为创建时间需永远比更改时间要早
        $created_at = $this->faker->dateTimeThisMonth($updated_at);
        return [
            // $this->faker->name,
            'title' => $sentence,
            'body' => $this->faker->text(),
            'excerpt' => $sentence,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'user_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'category_id' => $this->faker->randomElement([1,2,3,4]),
        ];
    }
}
