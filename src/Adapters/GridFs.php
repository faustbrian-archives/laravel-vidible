<?php

namespace DraperStudio\Vidible\Adapters;

use DraperStudio\Vidible\Contracts\ShareableInterface;
use DraperStudio\Vidible\Models\Video;

class GridFs extends AbstractAdapter implements ShareableInterface
{
    public function getShareableLink(Video $video, array $filters = [])
    {
        //
    }
}
