<?php

namespace Modules\Factcolombia1\Models\TenantService;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class PayrollTypeDocumentIdentification extends Model
{
    use  UsesTenantConnection;

    protected $table = 'co_payroll_type_document_identifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code',
    ];
}