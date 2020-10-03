<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;

    public $table = 'Package';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        "transaction_id",
        "customer_name",
        "customer_code",
        "transaction_amount",
        "transaction_discount",
        "transaction_additional_field",
        "transaction_payment_type",
        "transaction_state",
        "transaction_code",
        "transaction_order",
        "location_id",
        "organization_id",
        "created_at",
        "updated_at",
        "transaction_payment_type_name",
        "transaction_cash_amount",
        "transaction_cash_change",
        "customer_attribute",
        "connote",
        "connote_id",
        "origin_data",
        "destination_data",
        "koli_data",
        "custom_field",
        "currentLocation",
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "transaction_id"                     => 'required',
        "customer_name"                      => 'required|min:1|max:100',
        "customer_code"                      => 'required|numeric',
        "transaction_amount"                 => 'required|numeric',
        "transaction_discount"               => 'required',
        "transaction_payment_type"           => 'required',
        "transaction_state"                  => 'required',
        "transaction_code"                   => 'required|size:16',
        "transaction_order"                  => 'required',
        "location_id"                        => 'required',
        "organization_id"                    => 'required',
        "transaction_payment_type_name"      => 'required',
        "transaction_cash_amount"            => 'required',
        "transaction_cash_change"            => 'required',
        "customer_attribute"                 => 'required|array|min:3',
        "customer_attribute.Nama_Sales"      => 'required',
        "customer_attribute.TOP"             => 'required',
        "customer_attribute.Jenis_Pelanggan" => 'required',
        "connote"                            => 'required|array',
        "connote_id"                         => 'required',
        "origin_data"                        => 'required|array',
        "destination_data"                   => 'required|array',
        "koli_data"                          => 'required|array',
        "custom_field"                       => 'required|array',
        "currentLocation"                    => 'required|array',
    ];
}
