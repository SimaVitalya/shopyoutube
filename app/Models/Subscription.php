<?php

namespace App\Models;

use App\Mail\SendSubscriptionMesagge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Subscription extends Model
{
    protected $guarded = false;

    public function scopeActiveByProductId($query, $productId)
    {
        return $query->where('status', 0)->where('product_id', $productId);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function sendEmailSubscription(Product $product)
    {

        $subscriptions = self::ActiveByProductId($product->id)->get();
        foreach ($subscriptions as $subscription) {
            Mail::to($subscription->email)->send(new SendSubscriptionMesagge($product));
            $subscription->status = 1;
            $subscription->save();
        }

    }

}
