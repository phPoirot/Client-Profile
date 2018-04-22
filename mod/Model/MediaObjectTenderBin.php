<?php
namespace Module\ProfileClient\Model;


class MediaObjectTenderBin
    extends \Poirot\ProfileClient\Model\MediaObjectTenderBin
{
    /**
     * Generate Http Link To Media
     *
     * @return string
     */
    function get_Link()
    {
        // TODO include filename

        return (string) \Module\Foundation\Actions::Path(
            'tenderbin-media_cdn' // this name is reserved; @see mod-tenderbin_client.conf.php
            , [
                'hash' => $this->getHash()
            ]
        );
    }
}
