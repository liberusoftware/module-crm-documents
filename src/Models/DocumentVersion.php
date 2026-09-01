<?php

declare(strict_types=1);

namespace Liberu\CRM\Documents\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $document_id @property int $version */
final class DocumentVersion extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_document_versions';

    protected $guarded = [];
}
