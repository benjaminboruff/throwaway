<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Dog
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $birthday
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $age
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Dog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Dog withoutTrashed()
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dog whereAge($value)
 */
class Dog extends Model
{

    use SoftDeletes;

    //protected $fillable = ['name', 'birthday'];
    // protected $dates    = ['deleted_at', 'birthday'];

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(
//            'birthday',
//            function (Builder $builder) {
//                $builder->whereYear('birthday', '<=', Carbon::now(0)
//                    ->subYears(3)
//                    ->year);
//            }
//        );
//    }

//    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//        $this->name = $attributes['name'] ?? 'default';
//        $this->birthday = $attributes['birthday'] ?? Carbon::now();
//    }
//
//    public function getNameAttribute()
//    {
//        return strtoupper($this->attributes['name']);
//    }
//
//    public function getAgeAttribute()
//    {
//        return Carbon::now()->diffInYears($this->birthday);
//    }
//
//    public function setNameAttribute(string $value)
//    {
//        $this->attributes['name'] = strtoupper($value);

// }

//    public function setBirthdayAttribute(string $birthday)
//    {
//        $this->attributes['birthday'] = $birthday;
//        $this->attributes['age'] = Carbon::now()->diffInYears($this->birthday);
//    }

//    public function dogsRequiringAntiRabbitBiteShot()
//    {
//        return $this->ageGreaterThan(6);
//    }
//
//    /**
//     *
//     * @param \Illuminate\Database\Eloquent\Builder $query
//     * @return \Illuminate\Database\Eloquent\Builder
//     */
//    public function scopeAgeGreaterThan($query, $age)
//    {
//        return $query->where('age', '>', $age);
//    }

    public function report(int $age)
    {
        // $age = 8;

        return $this->select(['name', 'age'])
            ->where('age', '<', 6)
            ->orWhere(function (Builder $q) use ($age) {
                $q->where('age', '>', $age);
                $q->whereIn('name', ['Jane', 'Jerry']);
            })
            ->get();
    }

    public function report2(string $ageGroup = 'younger')
    {

        return $this->select(['name', 'age'])
            ->when($ageGroup == 'older',
                function (Builder $q) {
                    return $q->where('age', '>', 8)->get();
                },
                function (Builder $q) {
                    return $q->where('age', '<', 8)->get();
                }
            );

    }
}
