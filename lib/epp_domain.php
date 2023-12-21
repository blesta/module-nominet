<?php

use Metaregistrar\EPP\eppDomain;

/**
 * Nominet EPP Domain
 *
 * @package blesta
 * @subpackage blesta.components.modules.nominet
 * @copyright Copyright (c) 2023, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */
class NominetEppDomain extends eppDomain
{
    /**
     * @var string The registrant tag to push the domain
     */
    private $tag = '';

    /**
     * Set the new domain tag
     *
     * @param string $tag The new registrant tag
     */
    public function setTag($tag) {
        $this->tag = $tag;
    }

    /**
     * Returns the domain tag
     *
     * @return string The domain registrant tag
     */
    public function getTag() {
        return $this->tag;
    }
}
