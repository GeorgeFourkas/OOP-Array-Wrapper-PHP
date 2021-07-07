<?php


class Arr
{

    protected $array;

    public function set(array $ar)
    {
        $this->array = $ar;
    }

    public function get(): array
    {
        return (array)$this;
    }

    public function changeKeyCase($case = CASE_UPPER): Arr
    {
        $this->array = array_change_key_case($this->array, $case);
        return $this;
    }

    public function chunk(int $length, $preserve = false): Arr
    {
        $this->array = array_chunk($this->array, $length, $preserve);
        return $this;
    }

    public function column($key, $index = null): Arr
    {
        $this->array = array_column($this->array, $key, $index);
        return $this;
    }

    public function combine(array $values): Arr
    {
        $this->array = array_combine($this->array, $values);
        return $this;
    }

    public function combineAsValues(array $keys): Arr
    {
        $this->array = array_combine($keys, $this->array);
        return $this;
    }

    public function frequency(): Arr
    {
        $this->array = array_count_values($this->array);
        return $this;
    }

    public function diffAssoc(array ...$arrays): Arr
    {
        $this->array = array_diff_assoc($this->array, $arrays);
        return $this;
    }

    public function diffKeysAssoc(array ...$arrays): Arr
    {
        $this->array = array_diff_key($this->array, $arrays);
        return $this;
    }

    public function diffAssocCallback(callable $callback, array ...$arrays): Arr
    {
        $this->array = array_diff_uassoc($this->array, $arrays, $callback);
        return $this;
    }

    public function diffKeysAssocCallback(callable $callback, array ...$arrays): Arr
    {
        $this->array = array_diff_ukey($this->array, $arrays, $callback);
        return $this;
    }

    public function difference(array ...$toCompare): Arr
    {
        $this->array = array_diff($this->array, $toCompare);
        return $this;
    }

    public function addKeys(array $keys, $value): Arr
    {
        $this->array = array_fill_keys($keys, $value);
        return $this;
    }

    public function fillValues($startIndex, $times, $value): Arr
    {
        $this->array = array_fill($startIndex, $times, $value);
        return $this;
    }

    public function filter(callable $callback = null, int $mode = 0): Arr
    {
        $this->array = array_filter($this->array, $callback, $mode);
        return $this;
    }

    public function flip(): Arr
    {
        $this->array = array_flip($this->array);
        return $this;
    }

    public function intersectAssoc(array ...$arrays): Arr
    {
        $this->array = array_intersect_assoc($this->array, $arrays);
        return $this;
    }

    public function intersectKey(array ...$arrays): Arr
    {
        $this->array = array_intersect_key($this->array, $arrays);
        return $this;
    }

    public function intersectAssocCallback(callable $callback, array ...$arrays): Arr
    {
        $this->array = array_intersect_uassoc($this->array, $arrays, $callback);
        return $this;
    }

    public function intersectKeyCallback(callable $callback, array ...$arrays)
    {
        $this->array = array_intersect_ukey($this->array, $arrays, $callback);
        return $this;
    }

    public function intersect(array ...$arrays)
    {
        $this->array = array_intersect($this->array, $arrays);
        return $this;
    }

    public function keyExists($key): bool
    {
        return array_key_exists($key, $this->array);
    }


    //TODO TEST IT
    public function firstKey()
    {
        return key(current($this->array));
    }

    //TODO TEST IT
    public function lastKey()
    {
        return key(end($this->array));
    }

    public function keys($searchValue = null, $strict = false): Arr
    {
        $this->array = array_keys($this->array, $searchValue, $strict);
        return $this;
    }

    public function map(callable $callback): Arr
    {
        $this->array = array_map($callback, $this->array);
        return $this;
    }

    public function mergeRecursive(array ...$arrays): Arr
    {
        $this->array = array_merge_recursive($this->array, $arrays);
        return $this;
    }

    public function merge(array ...$arrays)
    {
        $this->array = array_merge($this->array, $arrays);
        return $this;
    }

    public function pad(int $length, $value)
    {
        $this->array = array_pad($this->array, $length, $value);
        return $this;
    }

    public function pop()
    {
        return array_pop($this->array);
    }

    public function product()
    {
        return array_product($this->array);
    }

    public function push(...$values)
    {
        array_push($this->array, $values);
        return $this;
    }

    public function random($count = 1)
    {
        return array_rand($this->array, $count);
    }


    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce($this->array, $callback, $initial);
    }

    public function replaceRecursive(array ...$replacements)
    {
        $this->array = array_replace_recursive($this->array, $replacements);
        return $this;
    }

    public function replace(array ...$replacements)
    {
        $this->array = array_replace($this->array, $replacements);
        return $this;
    }

    public function reverse($preserve_keys = false)
    {
        $this->array = array_reverse($this->array, $preserve_keys);
        return $this;
    }

    public function search($needle, $strict = false)
    {
        return array_search($needle, $this->array, $strict);
    }

    public function shift()
    {
        return array_shift($this->array);
    }

    public function slice(int $offset, $length = null, $preserve_keys = false)
    {
        $this->array = array_slice($this->array, $offset, $length, $preserve_keys);
        return $this;
    }

    public function splice($offset, $length = null, array $replacements = [])
    {
        $this->array = array_splice($this->array, $length, $replacements);
        return $this;
    }

    public function sum()
    {
        return array_sum($this->array);
    }
    



}