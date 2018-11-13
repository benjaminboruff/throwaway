<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Hamster
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hamster whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Hamster[] $hamsters
 */
class Hamster extends Model
{

    protected $fillable = ['name'];

}
