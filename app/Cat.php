<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Cat
 *
 * @property int $id
 * @property mixed $info
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cat extends Model
{

    protected $fillable = ['info'];

    public function changeName(string $name = '', string $newName = '')
    {
        $this->where('info->name', '=', $name)
            ->update(['info->name' => $newName]);
    }

    public function getLonghairs()
    {
        return $this->where('info->long-hair', 'true')->get();
    }
}
