<?php

namespace CMS\Entity;

/**
 * @Entity(readOnly=true)
 * @Table(name="nerd_words")
 */
class Word
{
    /**
     * @Id
     * @Column(type="string", length=32, nullable=false)
     */
    protected $word;

    public function getWord()
    {
        return $this->word;
    }
}