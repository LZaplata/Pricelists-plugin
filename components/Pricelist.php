<?php namespace Lzaplata\Pricelists\Components;

use Cms\Classes\ComponentBase;
use LZaplata\Pricelists\Models\Pricelist as PricelistModel;

/**
 * Pricelist Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Pricelist extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'lzaplata.pricelists::lang.component.pricelist.name',
            'description' => 'lzaplata.pricelists::lang.component.pricelist.description',
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            "slug" => [
                "title"         => "lzaplata.pricelists::lang.component.pricelist.slug.title",
                "description"   => "lzaplata.pricelists::lang.component.pricelist.slug.description",
                "type"          => "dropdown",
            ]
        ];
    }

    /**
     * @return array
     */
    public function getSlugOptions(): array
    {
        return PricelistModel::orderBy("name", "ASC")->lists("name", "slug");
    }

    /**
     * @return PricelistModel|null
     */
    public function pricelist(): ?PricelistModel
    {
        return PricelistModel::where("slug", $this->property("slug"))->first();
    }
}
