<?php

class LanguageTest extends TestCase
{
    /**
     * Test change language
     *
     * @return void
     */
    public function testChangeLanguage()
    {
        $this->visit('/language/en')
            ->see('An awesome PHP framework')
            ->click('en')
            ->see('An awesome PHP framework');

    }
}
