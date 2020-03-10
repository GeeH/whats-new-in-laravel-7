<?php declare(strict_types=1);

namespace App\Cast;

use App\ValueObject\Amount;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class AmountCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes): Amount
    {
        $amount = new Amount();
        $amount->primary = $attributes['amount_primary'];
        $amount->secondary = $attributes['amount_secondary'];
        $amount->symbol = $attributes['amount_symbol'];
        $amount->currency = $attributes['amount_currency'];
        $amount->separator = $attributes['amount_separator'];
        return $amount;
    }

    /** @var Amount $model */
    public function set($model, string $key, $value, array $attributes): array
    {
        return [
            'amount_primary' => $model->primary,
            'amount_secondary' => $model->secondary,
            'amount_symbol' => $model->symbol,
            'amount_currency' => $model->currency,
            'amount_separator' => $model->separator,
        ];
    }
}
