<?php namespace LZaplata\Pricelists\Models;

use Model;

/**
 * Model
 */
class Pricelist extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'lzaplata_pricelists_pricelists';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        "name"              => "required",
        "slug"              => ["required", "regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i", "unique:lzaplata_pricelists_pricelists,slug,NULL,id,deleted_at,NULL"],
        "items.*.title"     => "required",
        "items.*.price"     => "nullable|integer",
        "items.*.price_vat" => "nullable|integer",
    ];

    public $customMessages = [
        "items.*.title.required"        => "lzaplata.pricelists::lang.pricelist.field.items.form.field.title.message",
        "items.*.price.integer"         => "lzaplata.pricelists::lang.pricelist.field.items.form.field.price.message_int",
        "items.*.price_vat.integer"     => "lzaplata.pricelists::lang.pricelist.field.items.form.field.price_vat.message_int",
    ];

    protected $jsonable = ["items"];

}
