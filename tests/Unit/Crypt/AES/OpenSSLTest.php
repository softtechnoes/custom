<?php
/**
 * @author    Andreas Fischer <bantu@phpbb.com>
 * @copyright 2013 Andreas Fischer
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */

use phpseclibcustom\Crypt\Base;

class Unit_Crypt_AES_OpenSSLTest extends Unit_Crypt_AES_TestCase
{
    protected function setUp()
    {
        $this->engine = Base::ENGINE_OPENSSL;
    }
}
